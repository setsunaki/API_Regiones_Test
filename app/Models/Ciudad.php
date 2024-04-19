<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    protected $table = 'CIUDAD';

    public function provincia(){
        return $this->belongsTo('App\Models\Provincia', 'id_provincia');
    }
}
