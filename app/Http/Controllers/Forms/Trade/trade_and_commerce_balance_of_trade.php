<?php
 
namespace App\Http\Controllers\Forms\Trade;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_balance_of_trade_model;
use View;

//@Charles Ndirangu
//Trade Conference
class trade_and_commerce_balance_of_trade extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [
        'description'=>'required|max:255',
        'amount_in_millions'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $balance_of_trade = trade_and_commerce_balance_of_trade_model::all();
        return view('Forms.Trade.national.trade_and_commerce_balance_of_trade',['balance_of_trade' =>$balance_of_trade]);
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
                'amount_in_millions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $balance_of_trade = new trade_and_commerce_balance_of_trade_model();
            $balance_of_trade->description=$request->description;
            $balance_of_trade->amount_in_millions=$request->amount_in_millions;
            $balance_of_trade->year=$request->year;
            $balance_of_trade->save();
             return response()->json($balance_of_trade);
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
        $balance_of_trade = trade_and_commerce_balance_of_trade_model::findOrfail($trade_id);
        echo json_encode($balance_of_trade);
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
                'amount_in_millions'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $balance_of_trade =  trade_and_commerce_balance_of_trade_model::find($request->id);
            $balance_of_trade->description=$request->description;
            $balance_of_trade->amount_in_millions=$request->amount_in_millions;
            $balance_of_trade->year=$request->year;
            $balance_of_trade->save();
             return response()->json($balance_of_trade);
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
