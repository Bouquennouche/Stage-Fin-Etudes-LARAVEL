<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encdrants;
use Illuminate\Http\Request;

class EncdrantsController extends Controller
{
    //{
    public function index(){
        $encadrants = Encdrants::get();
        return view('encadrants')->with('encadrants',$encadrants);
    }

    public function store(Request $request){
        $input = $request->all();
        Encdrants::create($input);
        return redirect()->back();
    }

    public function edit($id){
        $encadrant = Encdrants::find($id);
        return response([
            'status' => 200,
            'encadrant' => $encadrant,
        ]);
    } 

    public function update(Request $request){
        $encadrant_id = $request->id;
        $encadrant = Encdrants::find($encadrant_id);
        $encadrant->nomEncadrant = $request->nomEncadrant;
        $encadrant->prenomEncadrant = $request->prenomEncadrant;
        $encadrant->poste = $request->poste;
        $encadrant->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_encadrant_id');
        $encadrant = Encdrants::find($id);
        $encadrant->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }

}
