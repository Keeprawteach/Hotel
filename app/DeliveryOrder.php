<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{

  protected $table = 'delivery_orders';

  public function order() {

    return $this->belongsTo('App\Order');
  }

  public function menu() {
    return $this->belongsTo('App\Menu');
  }


}
