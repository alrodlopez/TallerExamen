<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProviderTypes extends Model
{
    public function providers(){
        return $this->belongsTo('App\Providers');
}
}
