<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricants extends Model
{
    use HasFactory;

    protected $table="fabricants";
    protected $primarykey = "id";
    protected $fillable = ['nom'];

    public function types()
    {
        return $this->hasMany(Types::class , 'fabricant_id' , 'id');
    }
}
