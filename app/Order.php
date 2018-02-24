<?php

namespace Nyabingi;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user(){
        return $this->belongsTo('Nyabingi\User');
    }
}
