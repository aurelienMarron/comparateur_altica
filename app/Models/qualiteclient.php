<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class qualiteclient extends Model
{
    use HasFactory;
    protected $primaryKey = "idqualite";
    public $timestamps = true;
    const UPDATED_AT = null;
}
