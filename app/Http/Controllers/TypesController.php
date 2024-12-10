<?php

namespace App\Http\Controllers;

use App\Models\Types;
use App\Http\Controllers\Controller;
use App\Models\Fabricants;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id){
        $fabricant = Fabricants::find($id);
        $types = Types::where('fabricant_id',$id)->get();
        return view('types')->with(['types'=>$types , 'fabricant' => $fabricant]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , $id){
        $input = $request->only('nom');
        $input['fabricant_id'] = $id ;
        Types::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Types $types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $type = Types::find($id);
        return response([
            'status' => 200,
            'type' => $type,
        ]);
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $type_id = $request->id;
        $type = Types::find($type_id);
        $type->nom = $request->nom;
        $type->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('delete_utilisateur_id');
        $type = Types::find($id);
        $type->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }
}
