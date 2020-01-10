<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GoogleChartController extends Controller
{
    
    public function index()
    {
        // size
        $data = DB::table('orders')
                ->select(
                    DB::raw('size as size'),
                    DB::raw('count(*) as number'))
                ->groupBy('size')
                ->get();

        $array[] = ['Size','Number'];
        foreach($data as $key => $value){
            $array[++$key] = [$value->size,$value->number];
        }


        //price
        $total = DB::table('orders')

                ->select(

                    DB::raw("day(created_at) as day"),
                    DB::raw("SUM(total_price) as total_price"))

                            //->orderBy("created_at")

                            ->groupBy(DB::raw("day(created_at)"))

                            ->get();


        $result[] = ['Day','Price'];

        foreach ($total as $key => $value) {

        $result[++$key] = [$value->day, (int)$value->total_price];

        }


        return view ('admin.dashboard')->with('size',json_encode($array))
                                        ->with('total',json_encode($result));

                
    }
}
