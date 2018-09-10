<?php

namespace App\Http\Controllers\Forms\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_value_of_total_exports_european_union_model;
use View;

//@Charles Ndirangu
class trade_and_commerce_value_of_total_exports_european_union extends Controller
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
         $eu_exports = trade_and_commerce_value_of_total_exports_european_union_model::all();
        return view('Forms.Trade.national.trade_and_commerce_value_of_total_exports_european_union',['eu_exports' =>$eu_exports]);
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
            $eu_exports = new trade_and_commerce_value_of_total_exports_european_union_model();
            $eu_exports->country=$request->country;
            $eu_exports->value_in_millions=$request->value_in_millions;
            $eu_exports->year=$request->year;
            $eu_exports->save();
             return response()->json($eu_exports);
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
         $eu_exports = trade_and_commerce_value_of_total_exports_european_union_model::findOrfail($export_id);
        echo json_encode($eu_exports);
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
            $eu_exports =  trade_and_commerce_value_of_total_exports_european_union_model::find($request->id);
                $eu_exports->country=$request->country;
                $eu_exports->value_in_millions=$request->value_in_millions;
                $eu_exports->year=$request->year;
                $eu_exports->save();
                return response()->json($eu_exports);
                echo json_encode(array("status" => TRUE));
        }
    }

    public function destroy($id)
    {
        //
    }
}
