<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceOrder extends Model
{
  protected $table = 'place_orders';

  public function order() {

    return $this->belongsTo('App\Order');
  }

  public function desk() {

    return $this->belongsTo('App\Desk');
  }

  public function menu() {

    return $this->belongsTo('App\Menu');
  }
}
