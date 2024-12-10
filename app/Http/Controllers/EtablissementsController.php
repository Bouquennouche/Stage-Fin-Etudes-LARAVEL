<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Etablissements;
use Illuminate\Http\Request;

class EtablissementsController extends Controller
{
    public function index(){
        $etabs = Etablissements::get();
        return view('etablissements')->with('etabs',$etabs);
    }
    public function store(Request $request){
        $input = $request->all();
        Etablissements::create($input);
        return redirect()->back()->with('status', 'added succesfully');
    }

    public function edit($id){
        $etablissement = Etablissements::find($id);
        return response([
            'status' => 200,
            'etablissement' => $etablissement,
        ]);
    } 

    public function update(Request $request){
        $etablissement_id = $request->id;
        $etablissement = Etablissements::find($etablissement_id);
        $etablissement->nomEtablissement = $request->nomEtablissement;
        $etablissement->email = $request->email;
        $etablissement->adresse = $request->adresse;
        $etablissement->ville = $request->ville;
        $etablissement->telephone = $request->telephone;
        $etablissement->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_etablissement_id');
        $etablissement = Etablissements::find($id);
        $etablissement->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }
}
