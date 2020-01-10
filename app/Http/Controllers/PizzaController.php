<?php

namespace App\Http\Controllers;

use App\Pizza;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use Intervention\Image\Facades\Image;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        //
        return view('pizza.index');
    }
    public function getPizzas(){
        return Laratables::recordsOf(Pizza::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('pizza.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $vData = $request->validate([
            "pizza_name" => 'required|min:1|unique:pizzas',
            'pizza_image' => 'required|mimes:jpg,jpeg,png,gif',
            "price"    => 'required'
            
        ]);
        $pizza = Pizza::create($vData);
        $this->storeImage($pizza);
        return redirect()->route("pizzas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pizza = Pizza::find($id);
        
        return view('pizza.view')->with("pizza",$pizza);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pizza = Pizza::find($id);
        
        return view('pizza.edit')->with("pizza",$pizza);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $vData = $request->validate([
            "pizza_name" => 'required|min:1',
            'pizza_image' => 'required|mimes:jpg,jpeg,png,gif',
            "price"    => 'required'
        ]);
        $pizza = Pizza::find($id);
        $pizza->pizza_name = $vData['pizza_name'];
        $pizza->pizza_image = $vData['pizza_image'];
        $pizza->price = $vData['price'];
        
        $this->storeImage($pizza);
        $pizza->save();
        return redirect()->route("pizzas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect()->route("pizzas.index");
    }


    public function storeImage($pizzas){
        if(request()->has('pizza_image')){
            $pizzas->update([
                'pizza_image' => request()->pizza_image->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'.$pizzas->pizza_image))->fit(300,300,null,'top-left');
            $image->save();
        }
    }
}
