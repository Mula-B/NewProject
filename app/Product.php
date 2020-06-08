<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['productname', 'productprice', 'is_active'];

    public function orders(){
        return $this->belongsToMany("App/Order");
    }
}
