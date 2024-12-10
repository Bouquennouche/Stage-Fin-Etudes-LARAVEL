<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Entites;
use Illuminate\Http\Request;
use App\Models\Materials;
use App\Models\Fabricants;
use App\Models\Labels;
use App\Models\Types;
use App\Models\References;
use App\Models\Utilisateurs;
use League\CommonMark\Reference\Reference;

class MaterialsController extends Controller
{
    public function index($id)
    {

        $materials = Materials::where('label_id' , $id )->get();
        $fabricants = Fabricants::get();
        $entites = Entites::get();
        $label = Labels::find($id);

        return view('laravel-examples.liste-materials')->with(['materials' => $materials , 'fabricants' => $fabricants , 'id_label'=>$id , 'nomLabel' => $label->nom ,"entites"=>$entites]);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Materials::create($input);
        return redirect()->back();
    }


    public function getTypesByFabricant($id){
        $types = Types::where('fabricant_id', $id)->get();
    
        return response()->json($types);
    }

    public function getReferencesByType($id)
{
    $references = References::where('type_id', $id)->get();
    
    return response()->json($references);
}
 public function getUtilisateursByEntite($id){
    $utilisateurs = Utilisateurs::where('entite_id', $id)->get();
    
    return response()->json($utilisateurs);
 }

public function destroy(Request $request)
{
    $id = $request->input('delete_material_id');
    $material = Materials::find($id);
    $material->delete();
    return redirect()->back()->with('status','deleted succesfully');
}

public function edit($id){
    $materiel = Materials::find($id);
    $materiel['fabricant']= $materiel->fabricant->nom;
    $materiel['type']= $materiel->type->nom ;
    $materiel['reference']= $materiel->reference->nom ;
    $materiel['utilisateur']= $materiel->utilisateur->nom ;
    return response([
        'status' => 200,
        'materiel' => $materiel,
    ]);
} 

public function update(Request $request){
    $fabricant = Fabricants::where('nom', $request->fabricant)->first();
    $type = Types::where('nom', $request->type)->first();
    $reference = References::where('nom', $request->reference)->first();
    $utilisateur = Utilisateurs::where('nom', $request->utilisateur)->first();
    $materiel_id = $request->id;
    $materiel = Materials::find($materiel_id);
    $materiel->numero_serie = $request->numero_serie;
    $materiel->modele = $request->modele;
    if($fabricant)
    $materiel->fabricant_id = $fabricant->id;
    if($type)
    $materiel->type_id = $type->id;
    if($reference)
    $materiel->reference_id = $reference->id;
    $materiel->numero_inventaire = $request->numero_inventaire;
    if($utilisateur)
    $materiel->utilisateur_id = $utilisateur->id;
    $materiel->save();

    return redirect()->back()->with('status', 'updated succesfully');
}
}