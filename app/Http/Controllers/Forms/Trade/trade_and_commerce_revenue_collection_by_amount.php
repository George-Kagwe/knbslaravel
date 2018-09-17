<?php

namespace App\Http\Controllers\Forms\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_revenue_collection_by_amount_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//trade and commerce revenue collection by amount dataset


class trade_and_commerce_revenue_collection_by_amount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'revenuecollection_id'=>'required|numeric',
        'amount'=>'required|numeric',
        'year'=>'required|numeric',

    ];
    public function index()
    {
        $revenue = DB::table('trade_and_commerce_revenue_collection_by_amount')
               ->join('health_counties', 'trade_and_commerce_revenue_collection_by_amount.county_id', '=', 'health_counties.county_id')
                ->join('trade_and_commerce_revenue_collection_by_id', 'trade_and_commerce_revenue_collection_by_amount.revenuecollection_id', '=', 'trade_and_commerce_revenue_collection_by_id.revenuecollection_id')->get();

        
        $counties = DB::table('health_counties')->get();
        $rev = DB::table('trade_and_commerce_revenue_collection_by_id')->get();
        
        return view('Forms.Trade.county.trade_and_commerce_revenue_collection_by_amount', ['revenue' =>$revenue,'counties' =>$counties, 'rev'=>$rev]);
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
                            'revenuecollection_title'=>'required',
                            'amount'=>'required|numeric',
                            'year'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $revenue = new trade_and_commerce_revenue_collection_by_amount_model();
            $revenue->county_id =$request->county_name;
            $revenue->revenuecollection_id=$request->revenuecollection_title;
            $revenue->amount=$request->amount;         
            $revenue->year=$request->year;
            $revenue->save();
             return response()->json($revenue);
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
        
          $trading_center = trade_and_commerce_revenue_collection_by_amount_model::findOrfail($tradeandcommerce_centre_id);
     
      
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
                          'revenuecollection_title'=>'required',
                          'amount'=>'required|numeric',
                          'year'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $revenue =trade_and_commerce_revenue_collection_by_amount_model::find($request->id);
            $revenue->county_id =$request->county_name;
            $revenue->revenuecollection_id=$request->revenuecollection_title;
            $revenue->amount=$request->amount;         
            $revenue->year=$request->year;
            $revenue->save();
             return response()->json($revenue);
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
