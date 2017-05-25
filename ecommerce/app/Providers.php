<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Providers extends Model
{
    public function providers(){
        return $this->hasOne('App\ProviderTypes','provider_type_id');
    }
}
