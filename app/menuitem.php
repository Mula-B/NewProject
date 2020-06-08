<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menuitem extends Model
{
    public function subgerecht(){
        return $this->belongsTo("App\subgerecht");
    }
}
