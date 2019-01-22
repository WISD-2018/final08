<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $fillable = [
        'quantity','users_id','total','products_id',
    ];

    public $timestamps = false;

    public  function  products(){
        return $this->hasOne(Product::class);

    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
