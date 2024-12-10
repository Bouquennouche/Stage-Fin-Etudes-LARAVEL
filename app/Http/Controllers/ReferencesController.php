<?php

namespace App\Http\Controllers;

use App\Models\References;
use App\Http\Controllers\Controller;
use App\Models\Types;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;

class ReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id){
        $type = Types::find($id);
        $references = References::where('type_id',$id)->get();
        return view('references')->with(['references'=>$references , 'type' => $type]);
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
        $input['type_id'] = $id ;
        References::create($input);
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(References $references)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $reference = References::find($id);
        return response([
            'status' => 200,
            'reference' => $reference,
        ]);
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $reference_id = $request->id;
        $reference = References::find($reference_id);
        $reference->nom = $request->nom;
        $reference->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('delete_utilisateur_id');
        $reference = References::find($id);
        $reference->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }
}
