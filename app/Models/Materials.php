<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    use HasFactory;
    protected $table="materials";
    protected $primarykey = "id";
    protected $fillable = ['numero_serie' , 'reference_id' , 'type_id' , 'fabricant_id', 'modele' , 'numero_inventaire' , 'utilisateur_id' , 'label_id' ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateurs::class,'utilisateur_id');
    }

    public function reference()
    {
        return $this->belongsTo(References::class,'reference_id' , );
    }
    public function type()
    {
        return $this->belongsTo(Types::class,'type_id');
    }
    public function fabricant()
    {
        return $this->belongsTo(Fabricants::class,'fabricant_id');
    }
}
