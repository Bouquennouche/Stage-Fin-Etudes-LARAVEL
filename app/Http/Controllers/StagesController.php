<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Domaines;
use App\Models\Encdrants;
use App\Models\Etablissements;
use App\Models\Stages;
use App\Models\Stagiaires;
use Illuminate\Http\Request;

class StagesController extends Controller
{
    public function index($id)
    {
        $stagiaire = Stagiaires::find($id);
        $stages = Stages::where('stagiare_id',$id)->get();
        $etablissement = Etablissements::get();
        $domaine = Domaines::get();
        $encadrant = Encdrants::get();
        return view('stg')->with(['stagiaire' => $stagiaire,'stages' => $stages, 
        "etablissement" =>$etablissement , "domaine" => $domaine , "encadrant" => $encadrant]);
    }

    public function store(Request $request , $id){
        $input = $request->only(['dateDebut', 'dateFin', 'sujet']);
        $input['stagiare_id'] = $id;
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
        return redirect()->back()->with('status','Added succesfully');
    }

    public function destroy(Request $request)
    {
        
        $id = $request->input('delete_stage_id');
        $stage = Stages::find($id);
        $stage->delete();
        $stages = Stages::where('stagiare_id' , $stage->stagiare_id)->get();
        if (blank($stages)) {
            $deletedOne = Stagiaires::find($stage->stagiare_id);
            $deletedOne->delete();
            $stagiaires = Stagiaires::get();
            $etablissement = Etablissements::get();
            $domaine = Domaines::get();
            $encadrant = Encdrants::get();
            return view('laravel-examples.liste-stagiaires')->with(["stagiaires"=>$stagiaires , 
            "etablissement" =>$etablissement , "domaine" => $domaine , "encadrant" => $encadrant]);
        } else {
            return redirect()->back()->with('status','deleted succesfully');
        }
    }

    public function update(Request $request){
        $stage_id = $request->id;
        $stage = Stages::find($stage_id);
        $stage->dateDebut = $request->dateDebut;
        $stage->dateFin = $request->dateFin;
        $stage->sujet = $request->sujet;
        $stage->note = $request->note;
        if ($request->hasFile('convention')) {
            $convention = $request->file('convention');
            $filename = time() . '.' . $convention->getClientOriginalExtension();
            $convention->move(public_path('uploads/conventions'), $filename); 
            $conventionPath = 'uploads/conventions/' . $filename;
            $stage->convention = $conventionPath;
        }
        if ($request->hasFile('rapport')) {
            $rapport = $request->file('rapport');
            $filename = time() . '.' . $rapport->getClientOriginalExtension();
            $rapport->move(public_path('uploads/rapports'), $filename); 
            $rapportPath = 'uploads/rapports/' . $filename;
            $stage->rapport = $rapportPath;
        }
        $stage->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    public function edit($id)
    {
        $stage = Stages::find($id);
        $stage['nomEncadrant'] = $stage->encadrant->nomEncadrant;
        $stage['nomDomaine'] =$stage->domaine->nomDomaine ;
        $stage['nomEtablissement'] =$stage->etablissement->nomEtablissement ;
        return response([
            'status' => 200,
            'stage' => $stage,
        ]);
    }
}
