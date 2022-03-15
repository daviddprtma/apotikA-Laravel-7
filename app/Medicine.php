<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //
    public function category(){
        // memanggil method bapak ke anak
        return $this -> belongsTo('App\Category');
    }
}
