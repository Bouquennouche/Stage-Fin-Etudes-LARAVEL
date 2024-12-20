<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domaines extends Model
{
    use HasFactory;
    protected $table="domaines";
    protected $primarykey = "id";
    protected $fillable = ['nomDomaine','specialite'];
}
