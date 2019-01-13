<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'quantity'
    ];

    public $timestamps = false;

    public  function  products(){
        return $this->hasOne(Product::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
