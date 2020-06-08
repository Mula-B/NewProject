<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gerecht extends Model
{
    public function subgerecht(){
        return $this->hasMany("App\subgerecht");
    }
}
