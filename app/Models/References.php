<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class References extends Model
{
    use HasFactory;

    protected $table="references";
    protected $primarykey = "id";
    protected $fillable = ['nom' , 'type_id'];


}
