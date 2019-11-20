<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public function category() {

        return $this->belongsTo('App\Category');
    }

    public function promotion() {

        return $this->hasMany('App\Promotion');
    }

    public function place_order() {

        return $this->hasMany('App\PlaceOrder');
    }

    public function delivery_order() {

        return $this->hasMany('App\DeliveryOrder');
    }
}
