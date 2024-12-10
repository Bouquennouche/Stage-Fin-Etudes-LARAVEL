<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Domaines;
use Illuminate\Http\Request;

class DomainesController extends Controller
{
    public function index(){
        $domaines = Domaines::get();
        return view('domaines')->with('domaines',$domaines);
    }

    public function store(Request $request){
        $input = $request->only('nomDomaine','specialite');
        Domaines::create($input);
        return redirect()->back();
    }

    public function edit($id){
        $domaine = Domaines::find($id);
        return response([
            'status' => 200,
            'domaine' => $domaine,
        ]);
    } 

    public function update(Request $request){
        $domaine_id = $request->id;
        $domaine = Domaines::find($domaine_id);
        $domaine->nomDomaine = $request->nomDomaine;
        $domaine->specialite = $request->specialite;
        $domaine->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_domaine_id');
        $domaine = Domaines::find($id);
        $domaine->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }
}
