<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entites extends Model
{
    use HasFactory;
    protected $table="entites";
    protected $primarykey = "id";
    protected $fillable = ['nom' , 'adresse' , 'telephone'];

    public function utilisateurs()
    {
        return $this->hasMany(Utilisateurs::class , 'entite_id' , 'id');
    }
}
