<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function producttypes(){
        return $this->hasOne('App\ProductTypes','product_type_id');
    }
    public function providers(){
        return $this->belongsTo('App\ProviderTypes');
    }
}
