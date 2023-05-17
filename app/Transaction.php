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

    public function insertProduct($cart,$user){
        $total=0;
        foreach($cart as $id=>$detail){
            $total += $detail['price'] * $detail['quantity'];
<<<<<<< HEAD
            $this->medicines()->attach($id,['quantity' => $detail['quantity'], 'subtotal' => $detail['price']]);
=======
            $this->medicines()->attach($id,['quantity' => $detail['quantity'], 'price' => $detail['price'], 'subtotal'=>($detail['price'] * $detail['quantity'])]);
>>>>>>> f7a2feb6ed956033dc000ae28e8a7a221ef27032
        }
        return $total;
    }
}
