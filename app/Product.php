<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Order;
use app\User;
class Product extends Model
{
    //
    protected $table = 'products';

    protected $fillable = [
        'name','price','class','project','image','word'
    ];

    public $timestamps = false;

    public  function  orders(){
        return $this->belongsTo(Order::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
