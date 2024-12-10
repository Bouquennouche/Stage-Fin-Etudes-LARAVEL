<?php

namespace App\Http\Controllers;

use App\Models\Fabricants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FabricantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fabricants = Fabricants::get();
        return view('fabricants')->with('fabricants', $fabricants);
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
    public function store(Request $request)
    {
        $input = $request->all();
        Fabricants::create($input);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Fabricants $fabricants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fabricant = Fabricants::find($id);
        return response([
            'status' => 200,
            'fabricant' => $fabricant,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $fabricant_id = $request->id;
        $fabricant = Fabricants::find($fabricant_id);
        $fabricant->nom = $request->nom;
        $fabricant->save();

        return redirect()->back()->with('status', 'updated succesfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->input('delete_utilisateur_id');
        $fabricant = Fabricants::find($id);
        $fabricant->delete();
        return redirect()->back()->with('status', 'deleted succesfully');
    }
}
