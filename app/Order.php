<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['table_no','size','number','total_price','pizza_id'];


    public static function laratablesCustomAction($order)
    {
        return view('order.action', compact("order"))->render();
    }

    public function pizzas()
    {
        return $this->belongsToMany('App\Pizza');
    }
   
    
}
