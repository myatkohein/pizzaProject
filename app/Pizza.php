<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    //
    protected $fillable = ['pizza_name','pizza_image','price'];

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }
    

    public static function laratablesCustomAction($pizza)
    {
        return view('pizza.action', compact("pizza"))->render();
    }
}
