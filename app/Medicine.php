<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //
    public function category(){
        // memanggil method bapak ke anak
        return $this -> belongsTo('App\Category','category_id');
    }

    public function transactions(){
        return $this->belongsToMany('App\Transaction','medicine_transaction','medicine_id',
        'transaction_id') -> withPivot('quantity','price');
    }
}
