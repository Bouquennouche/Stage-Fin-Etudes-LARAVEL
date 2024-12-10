<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stagiaires extends Model
{
    use HasFactory;
    protected $table="stagiaires";
    protected $primarykey = "id";
    protected $fillable = ['nom' , 'prenom' , 'gendre' , 'CIN' , 'dateNaissance' , 'lieuNaissance' , 'ville' , 'adresse' ,  'email' , 'telephone' , 'created_at', 'photo' ];

    public function stages()
    {
        return $this->hasMany(Stages::class , 'stagiare_id' , 'id');
    }
}
