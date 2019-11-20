<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function place_orders() {

        return $this->hasMany('App\PlaceOrders');
    }

    public function delivery_orders() {

        return $this->hasMany('App\DeliveryOrders');
    }

    public function customer() {

      return $this->belongsTo('App\Customer');
    }

}
