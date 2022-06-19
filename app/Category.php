<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // public function products(){
    //     // memanggil method anak ke bapak
    //     return $this ->hasMany('App\Product.php','category_id','id');
    // }

    public function medicines()
    {
        return $this->hasMany('App\Medicine');
    }
}
