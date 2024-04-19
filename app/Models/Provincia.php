<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'PROVINCIA';

    public function region(){
        return $this->belongsTo('App\Models\Region', 'id_region');
    }
    

}
