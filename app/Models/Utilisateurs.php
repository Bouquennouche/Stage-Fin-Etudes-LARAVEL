<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    use HasFactory;

    protected $table="utilisateurs";
    protected $primarykey = "id";
    protected $fillable = ['nom' , 'prenom' , 'entite_id'];

}
