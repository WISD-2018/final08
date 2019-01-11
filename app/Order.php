<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'users_id','products_id','quantity','total'
    ];

    public $timestamps = false;

    public  function  products(){
        return $this->hasOne(Product::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
