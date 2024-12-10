<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $table="types";
    protected $primarykey = "id";
    protected $fillable = ['nom' , 'fabricant_id'];

    public function references()
    {
        return $this->hasMany(References::class,'type_id' , 'id');
    }

    public function fabricant()
{
    return $this->belongsTo(Fabricants::class,'fabricant_id');
}


}
