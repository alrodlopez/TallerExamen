<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    public function providertypes(){
    return $this->hasOne('App\ProviderTypes','provider_type_id');
}
    public function products(){
        return $this->hasOne('App\Products');
    }
}
