<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labels extends Model
{
    use HasFactory;

    protected $table="labels";
    protected $primarykey = "id";
    protected $fillable = ['nom','date_delibration'];
}
