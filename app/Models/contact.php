<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $primaryKey = "idcontact";
    public $timestamps = true;
    const UPDATED_AT = null;
    protected $fillable = ['nom','prenom', 'mail', 'telephone'];
    //use HasFactory;
}
