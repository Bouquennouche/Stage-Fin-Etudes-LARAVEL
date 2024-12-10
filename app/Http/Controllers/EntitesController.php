<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entites;
use Illuminate\Http\Request;

class EntitesController extends Controller
{
    public function index(){
        $entites = Entites::get();
        return view('laravel-examples.liste-entites',compact('entites'))->render();
    }
    public function store(Request $request){
       Entites::create($request->all());
       return redirect()->back();
    }

    public function edit($id){
        $entite = Entites::find($id);
        return response([
            'status' => 200,
            'entite' => $entite,
        ]);
    } 

    public function update(Request $request){
        $entite_id = $request->id;
        $entite = Entites::find($entite_id);    
        $entite->nom = $request->nom;
        $entite->adresse = $request->adresse;
        $entite->telephone = $request->telephone;
        $entite->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_entite_id');
        $entite = Entites::find($id);
        $entite->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }
}
