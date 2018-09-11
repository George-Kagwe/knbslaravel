<?php

namespace App\Http\Controllers\Forms\Trade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_import_trade_africa_countries_model;
use View;

class trade_and_commerce_import_trade_africa_countries extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $rules = [
        'zones'=>'required|max:255',
        'country'=>'required|max:255',
        'values'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $import_trade = trade_and_commerce_import_trade_africa_countries_model::all();
        return view('Forms.Trade.national.trade_and_commerce_import_trade_africa_countries',['imports' =>$import_trade]);
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
                'zones'=>'required|max:255',
                'country'=>'required|max:255',
                'values'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $import_trade = new trade_and_commerce_import_trade_africa_countries_model();
            $import_trade->zones=$request->zones;
            $import_trade->country=$request->country;
            $import_trade->values=$request->values;
            $import_trade->year=$request->year;
            $import_trade->save();
             return response()->json($import_trade);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($import_id)
    {
        $import_trade = trade_and_commerce_import_trade_africa_countries_model::findOrfail($import_id);
        echo json_encode($import_trade);
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
                'zones'=>'required|max:255',
                'country'=>'required|max:255',
                'values'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $import_trade =  trade_and_commerce_import_trade_africa_countries_model::find($request->id);
            $import_trade->zones=$request->zones;
            $import_trade->country=$request->country;
            $import_trade->values=$request->values;
            $import_trade->year=$request->year;
            $import_trade->save();
             return response()->json($import_trade);
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
