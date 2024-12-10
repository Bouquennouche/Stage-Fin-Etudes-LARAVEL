<?php

namespace App\Http\Controllers;

use App\Models\Domaines;
use App\Models\Encdrants;
use App\Models\Etablissements;
use App\Models\Labels;
use App\Models\Stagiaires;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
            $nb_stagiaires = Stagiaires::get()->count();
            $nb_etab = Etablissements::get()->count();
            $nb_domaines = Domaines::get()->count();
            $nb_encadrs = Encdrants::get()->count();
            $nbLabActif = Labels::where("status" , "actif")->count();
            $nbLabVer = Labels::where("status" , "verrouillé")->count();
            return view('dashboard')
            ->with(['nb_stagiaires'=>$nb_stagiaires, 'nb_etabs' => $nb_etab,
             'nb_domaines'=>$nb_domaines, 'nb_encadrs'=>$nb_encadrs ,
                'nbLabActif' => $nbLabActif , 'nbLabVer' => $nbLabVer
        
        ]);
    }
}
