<?php

namespace App\Http\Controllers;
use App\Order;
use App\Pizza;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
class OrderController extends Controller
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
        return view('order.index');
    }

    public function getOrders(){
        return Laratables::recordsOf(Order::class);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        // 
        $pizza = Pizza::findOrfail($req['id']);
        return view('order.create')->with('pizza',$pizza);
        // dd($req['id']);
        // dd($pizza);
        
        //$pizza = Pizza::pluck('id','pizza_name','pizza_image','price');
        //$pizza = Pizza::find($id);
          // return view('rent.createrent',compact('product'));
        //->with('pizza',$pizza);
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
            'table_no' => 'required',
            'size' => 'required',
            'number' => 'required|max:5',
            'total_price' => 'required',
            'pizza_id' => 'required'

        ]);
        
        $order = Order::create($vData);
         //$this->total_price($pizza['price'],$order);
        
        return redirect()->route('orders.index');
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
        $order = Order::findOrfail($id);
        $order->delete();
        return redirect()->route('orders.index');
    }

    // public function total_price($pizza->price,$order->number){
        
    //         $total = $pizza->price * $order->number;
    //         $total->save();
        
    // }

    
}
