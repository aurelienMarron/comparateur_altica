<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class langue extends Model
{
    use HasFactory;
    protected $table = 'langues';
    protected $primaryKey = "idlang";
    public $timestamps = true;
    const UPDATED_AT = null;
    protected $fillable = ['idlang','langue', 'codelang'];

    /*public function simulations(){
        return $this->belongsToMany(simulation::class);
    }*/
}


