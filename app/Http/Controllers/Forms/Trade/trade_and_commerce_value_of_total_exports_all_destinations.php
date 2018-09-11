<?php

namespace App\Http\Controllers\Forms\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_value_of_total_exports_all_destinations_model;
use View;

//@Charles Ndirangu
 
class trade_and_commerce_value_of_total_exports_all_destinations extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'region'=>'required|max:255',
        'country'=>'required|max:255',
        'value_in_millions'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $total_exports_all_destinations = trade_and_commerce_value_of_total_exports_all_destinations_model::all();
        return view('Forms.Trade.national.trade_and_commerce_value_of_total_exports_all_destinations',['total_exports_destinations' =>$total_exports_all_destinations]);
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
        
        $validator = \Validator::make($request->all(),
            [
                'region'=>'required|max:255',
                'country'=>'required|max:255',
                'value_in_millions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $total_exports_all_destinations = new trade_and_commerce_value_of_total_exports_all_destinations_model();
            $total_exports_all_destinations->region=$request->region;
            $total_exports_all_destinations->country=$request->country;
            $total_exports_all_destinations->value_in_millions=$request->value_in_millions;
            $total_exports_all_destinations->year=$request->year;
            $total_exports_all_destinations->save();
             return response()->json($total_exports_all_destinations);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($export_id)
    {
        $total_exports_all_destinations = trade_and_commerce_value_of_total_exports_all_destinations_model::findOrfail($export_id);
        echo json_encode($total_exports_all_destinations);
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

        $validator = \Validator::make($request->all(),
            [
                'region'=>'required|max:255',
                'country'=>'required|max:255',
                'value_in_millions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $total_exports_all_destinations =  trade_and_commerce_value_of_total_exports_all_destinations_model::find($request->id);
            $total_exports_all_destinations->region=$request->region;
            $total_exports_all_destinations->country=$request->country;
            $total_exports_all_destinations->value_in_millions=$request->value_in_millions;
            $total_exports_all_destinations->year=$request->year;
            $total_exports_all_destinations->save();
             return response()->json($total_exports_all_destinations);
           echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
