<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stagiaires;
use App\Models\Etablissements;
use App\Models\Domaines;
use App\Models\Encdrants;
use App\Models\Stages;

class StagiairesController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->only(['nom', 'prenom', 'dateNaissance', 'lieuNaissance', 'telephone', 'email', 'genre', 'CIN', 'ville', 'adresse']);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('uploads'), $filename); 
            $photoPath = 'uploads/' . $filename;
            $input['photo'] = $photoPath;
        }
        $stg = Stagiaires::create($input);
        $stagiare_id = $stg->id;
        $input = $request->only(['dateDebut', 'dateFin', 'sujet']);
        $input['stagiare_id'] = $stagiare_id; // Add stagiaire_id to the $input array

        // Replace with the actual value of nom you want to select
        $etablissement = Etablissements::where('nomEtablissement', $request->input('nomEtablissement'))->first(); // Query the database to get the Etablissement model with the given nom
        if ($etablissement) {
            $id = $etablissement->id;
            $input['etablissement_id'] = $id;
        } else {
        }
        $domaine = Domaines::where('nomDomaine', $request->input('nomDomaine'))->first();
        if ($domaine) {
            $id = $domaine->id;
            $input['domaine_id'] = $id;
        }

        $encadrant = Encdrants::where('nomEncadrant', $request->input('nomEncadrant'))->first();
        if ($domaine) {
            $id = $encadrant->id;
            $input['encadrant_id'] = $id;
        }
        Stages::create($input);
        return redirect('liste-stagiaires')->with('flash_message', 'Stagiaire Addedd!');
    }

    public function index()
    {
        $stagiaires = Stagiaires::get();
        $etablissement = Etablissements::get();
        $domaine = Domaines::get();
        $encadrant = Encdrants::get();
        return view('laravel-examples.liste-stagiaires')->with(["stagiaires"=>$stagiaires , 
        "etablissement" =>$etablissement , "domaine" => $domaine , "encadrant" => $encadrant]);
    }

    public function edit($id)
    {
        $stagiaire = Stagiaires::find($id);
        return response([
            'status' => 200,
            'stagiaire' => $stagiaire,
        ]);
    }

    public function update(Request $request)
    {
        $stagiaire_id = $request->id;
        $stagiaire = Stagiaires::find($stagiaire_id);
        $stagiaire->nom = $request->nom;
        $stagiaire->prenom = $request->prenom;
        $stagiaire->gendre = $request->genre;
        $stagiaire->CIN = $request->CIN;
        $stagiaire->dateNaissance = $request->dateNaissance;
        $stagiaire->lieuNaissance = $request->lieuNaissance;
        $stagiaire->ville = $request->ville;
        $stagiaire->adresse = $request->adresse;
        $stagiaire->email = $request->email;
        $stagiaire->telephone = $request->telephone;
        $stagiaire->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }


    public function destroy(Request $request)
    {
        $id = $request->input('delete_stagiare_id');
        $stagiaire = Stagiaires::find($id);
        $stagiaire->delete();
        return redirect()->back()->with('status','deleted succesfully');
        
    }
}
