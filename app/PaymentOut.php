<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentOut extends Model
{
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function branch(){
        return $this->belongsTo(RestaurantBranch::class);
    }
}
