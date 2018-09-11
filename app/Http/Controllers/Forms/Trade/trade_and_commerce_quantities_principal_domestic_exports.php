<?php

namespace App\Http\Controllers\Forms\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_quantities_principal_domestic_exports_model;
use View;
 
 //@Charles Ndirangu
class trade_and_commerce_quantities_principal_domestic_exports extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'description'=>'required|max:255',
        'quantity'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $principal_domestic_exports = trade_and_commerce_quantities_principal_domestic_exports_model::all();
        return view('Forms.Trade.national.trade_and_commerce_quantities_principal_domestic_exports',['domestic_exports' =>$principal_domestic_exports]);
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
                'description'=>'required|max:255',
                'quantity'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $principal_domestic_exports = new trade_and_commerce_quantities_principal_domestic_exports_model();
            $principal_domestic_exports->description=$request->description;
            $principal_domestic_exports->quantity=$request->quantity;
            $principal_domestic_exports->year=$request->year;
            $principal_domestic_exports->save();
             return response()->json($principal_domestic_exports);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trade_id)
    {
         $principal_domestic_exports = trade_and_commerce_quantities_principal_domestic_exports_model::findOrfail($trade_id);
        echo json_encode($principal_domestic_exports);
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
                'description'=>'required|max:255',
                'quantity'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $principal_domestic_exports =  trade_and_commerce_quantities_principal_domestic_exports_model::find($request->id);
                $principal_domestic_exports->description=$request->description;
                $principal_domestic_exports->quantity=$request->quantity;
                $principal_domestic_exports->year=$request->year;
                $principal_domestic_exports->save();
                return response()->json($principal_domestic_exports);
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
