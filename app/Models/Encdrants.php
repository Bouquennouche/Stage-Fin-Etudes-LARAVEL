<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encdrants extends Model
{
    use HasFactory;
    protected $table="encdrants";
    protected $primarykey = "id";
    protected $fillable = ['nomEncadrant' , 'prenomEncadrant' , 'poste'];
}
