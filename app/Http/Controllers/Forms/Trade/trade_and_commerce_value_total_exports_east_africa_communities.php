<?php

namespace App\Http\Controllers\Forms\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_value_total_exports_east_africa_communities_model;
use View;

//@Charles Ndirangu

class trade_and_commerce_value_total_exports_east_africa_communities extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'country'=>'required|max:255',
        'value_in_millions'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $eac_exports = trade_and_commerce_value_total_exports_east_africa_communities_model::all();
        return view('Forms.Trade.national.trade_and_commerce_value_total_exports_east_africa_communities',['eac_exports' =>$eac_exports]);
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
                'country'=>'required|max:255',
                'value_in_millions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $eac_exports = new trade_and_commerce_value_total_exports_east_africa_communities_model();
            $eac_exports->country=$request->country;
            $eac_exports->value_in_millions=$request->value_in_millions;
            $eac_exports->year=$request->year;
            $eac_exports->save();
             return response()->json($eac_exports);
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
         $eac_exports = trade_and_commerce_value_total_exports_east_africa_communities_model::findOrfail($export_id);
        echo json_encode($eac_exports);
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
                'country'=>'required|max:255',
                'value_in_millions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $eac_exports =  trade_and_commerce_value_total_exports_east_africa_communities_model::find($request->id);
                $eac_exports->country=$request->country;
                $eac_exports->value_in_millions=$request->value_in_millions;
                $eac_exports->year=$request->year;
                $eac_exports->save();
                return response()->json($eac_exports);
                echo json_encode(array("status" => TRUE));
        }
    }
    public function destroy($id)
    {
        //
    }
}
