<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    
    protected $guarded = [];
    
    protected $table = 'pesanan';
     
    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
