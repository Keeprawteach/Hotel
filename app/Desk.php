<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
  public function place_orders() {

      return $this->hasMany('App\PlaceOrder');
  }
}
