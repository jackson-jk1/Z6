<?php

namespace App\Http\Controllers;

use App\Models\Products;
use http\Env\Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
      * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $elos = Products::ELOS;
        $divisions = Products::DIVISION;
        $products = Products::all();
        if (!$request->ajax()){
        return view('home', compact('products'));
        }else{
            return response()->json([$elos,$divisions]);
        }



    }

    public function sum(Request $request){
        $to = Products::select('id','name')->where('rank', $request->ELO1)->where('division',$request->DV1)->first();
        $from = Products::select('id','name')->where('rank', $request->ELO2)->where('division',$request->DV2)->first();
        if ($to->id >$from->id){
            return 0;
        }
        $sum = Products::whereBetween('id',[$to->id,($from->id - 1)])->sum('value');
        return response()->json([
            'sum' => $sum,
            'image_to' => $to->name,
            'image_from' => $from->name
        ]);
    }

    public function store()
    {

        return view('home');
    }
}
