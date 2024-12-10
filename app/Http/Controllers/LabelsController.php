<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Labels;
use PhpParser\Node\Stmt\Label;

class LabelsController extends Controller
{
    public function index()
    {
        $labels = Labels::get();
        foreach ($labels as $label) {
            if(now()->greaterThanOrEqualTo($label->date_delibration)){
                $label_id = $label->id;
                $label->status = 'verrouillé';
                $label->save();
            }
            else{
                $label->status = 'actif';
                $label->save();
            }
        }
        return view('laravel-examples.liste-labels',compact('labels'))->render();
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Labels::create($input);
        return redirect()->back();

    }

    public function edit($id)
    {
        $label = Labels::find($id);
        return response([
            'status' => 200,
            'label' => $label,
        ]);
    }

    public function update(Request $request)
    {
        $label_id = $request->id;
        $label = Labels::find($label_id);
        $label->nom = $request->nom;
        $label->date_delibration = $request->date_delibration;
        $label->save();
        return redirect()->back()->with('status', 'updated succesfully');
    }

    public function destroy(Request $request)
    {
        $id = $request->input('delete_label_id');
        $label = Labels::find($id);
        $label->delete();
        return redirect()->back()->with('status','deleted succesfully');
    }

}


