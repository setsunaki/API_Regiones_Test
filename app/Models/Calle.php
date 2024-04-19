<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{
    use HasFactory;

    protected $table = 'CALLE';

    public function ciudad(){
        return $this->belongsTo('App\Models\Ciudad', 'id_ciudad');
    }
}
