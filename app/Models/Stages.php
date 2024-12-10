<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stages extends Model
{
    use HasFactory;
    protected $table="stages";
    protected $primarykey = "id";
    protected $fillable = ['dateDebut' , 'dateFin' , 'sujet' , 'stagiare_id' , 'etablissement_id' , 'domaine_id' , 'encadrant_id'];

    public function encadrant()
    {
        return $this->belongsTo(Encdrants::class,'encadrant_id');
    }

    public function etablissement()
    {
        return $this->belongsTo(Etablissements::class,'etablissement_id');
    }

    public function domaine()
    {
        return $this->belongsTo(Domaines::class,'domaine_id');
    }

    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class,'stagiaire_id');
    }
}
