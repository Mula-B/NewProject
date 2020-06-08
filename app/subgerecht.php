<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subgerecht extends Model
{
    public function menuitem(){
        return $this->hasMany("App\menuitem");
    }

    public function gerecht(){
        return $this->belongsTo("App\gerecht");
    }
}
