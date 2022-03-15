<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category(){
        // parameter berisi namaModel
        return $this-> belongsTo('App\Category.php','category_id');
    }
}
