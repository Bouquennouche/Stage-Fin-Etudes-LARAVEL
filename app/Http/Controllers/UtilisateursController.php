<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entites;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function index($id){
        $entite = Entites::find($id);
        $utilisateurs = Utilisateurs::where('entite_id',$id)->get();
        return view('laravel-examples.utilisateur')->with(['entite' => $entite,'utilisateurs' => $utilisateurs]);
    }

    public function store(Request $request , $id){
       
        $input = $request->only('nom','prenom');
        $input["entite_id"]=$id;
        Utilisateurs::create($input);
        return redirect()->back();
    }

    public function edit($id){
        $utilisateur = Utilisateurs::find($id);
        return response([
            'status' => 200,
            'utilisateur' => $utilisateur,
        ]);
    } 

    public function update(Request $request){
        $ut_id = $request->id;
        $Utilisateur = Utilisateurs::find($ut_id);
        $Utilisateur->nom = $request->nom;
        $Utilisateur->prenom = $request->prenom;
        $Utilisateur->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_utilisateur_id');
        $utilisateur = Utilisateurs::find($id);
        $utilisateur->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }

}
