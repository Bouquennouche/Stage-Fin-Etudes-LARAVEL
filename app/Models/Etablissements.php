<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissements extends Model
{
    use HasFactory;
    protected $table="etablissements";
    protected $primarykey = "id";
    protected $fillable = ['nomEtablissement' , 'email' , 'adresse' , 'ville' , 'telephone'];
}
