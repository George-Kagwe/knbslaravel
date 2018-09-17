<?php

namespace App\Http\Controllers\Forms\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_trading_centres_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households owned ict equipments


class trade_and_commerce_trading_centres extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'trading_centre_id'=>'required|numeric',
        'number'=>'required|numeric',
        'year'=>'required|numeric',

    ];
    public function index()
    {
        $trading_centers = DB::table('trade_and_commerce_trading_centres')
               ->join('health_counties', 'trade_and_commerce_trading_centres.county_id', '=', 'health_counties.county_id') 
                ->join('trade_and_commerce_trading_centres_ids', 'trade_and_commerce_trading_centres.trading_centre_id', '=', 'trade_and_commerce_trading_centres_ids.trading_centre_id')->orderBy('tradeandcommerce_centre_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();
        $trading_ctr = DB::table('trade_and_commerce_trading_centres_ids')->get();
        return view('Forms.Trade.county.trade_and_commerce_trading_centres', ['trading_centers' =>$trading_centers,'counties' =>$counties,'trading_ctr' =>$trading_ctr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
                            'county_name'=>'required',
                            'trading_centre'=>'required|numeric',
                            'number'=>'required|numeric',
                            'year'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $trading_centers = new trade_and_commerce_trading_centres_model();
            $trading_centers->county_id =$request->county_name;
            $trading_centers->trading_centre_id=$request->trading_centre;
            $trading_centers->number=$request->number;         
            $trading_centers->year=$request->year;
            $trading_centers->save();
             return response()->json($trading_centers);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tradeandcommerce_centre_id)
    {
        
          $trading_center = trade_and_commerce_trading_centres_model::findOrfail($tradeandcommerce_centre_id);
     
      
         echo json_encode($trading_center);
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
    public function update(Request $request)
    {
         $validator = \Validator::make($request->all(), [
                          'county_name'=>'required',
                          'trading_centre'=>'required|numeric',
                          'number'=>'required|numeric',
                          'year'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $trading_ctr =trade_and_commerce_trading_centres_model::find($request->id);
            $trading_ctr->county_id =$request->county_name;
            $trading_ctr->trading_centre_id=$request->trading_centre;
            $trading_ctr->number=$request->number;         
            $trading_ctr->year=$request->year;
            $trading_ctr->save();
             return response()->json($trading_ctr);
           echo json_encode(array("status" => TRUE));
        }
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
    }
}
