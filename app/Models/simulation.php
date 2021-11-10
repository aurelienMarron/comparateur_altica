<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simulation extends Model
{
    protected $primaryKey = "idsimulation";
    public $timestamps = true;
    const UPDATED_AT = null;
    protected $fillable = ['chemin','nbmots', 'qualite', 'bat','langue_source','langue_cible'];
    //use HasFactory;
}
