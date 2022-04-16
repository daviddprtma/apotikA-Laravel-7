<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    public function user(){
        return $this-> belongsTo('App\User','user_id');
    }

    public function buyer(){
        return $this -> belongsTo('App\Buyer','buyer_id');
    }

    public function medicines(){
        return $this->belongsToMany('App\Medicine','medicine_transaction','transaction_id',
        'medicine_id') -> withPivot('quantity','price');
    }
}
