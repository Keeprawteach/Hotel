<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';

    public function menu() {

        return $this->belongsTo('App\Menu');
    }
}
