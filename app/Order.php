<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'user_id','product_id','quantity','total'
    ];

    public $timestamps = false;

    public  function  products(){
        return $this->hasOne(Product::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
