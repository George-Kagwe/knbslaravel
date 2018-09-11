<?php

namespace App\Http\Controllers\Forms\CPI;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\CPI\CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya_Model;
use View;

class CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'item'=>'required|alpha_dash',
      'unit'=>'required|alpha_dash',
      'ksh_per_unit'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
 $CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya =CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya_Model::all();
        
        return view('Forms.CPI.National.cpiannualavgretailpricesofcertainconsumergoodsinkenya',['post' =>$CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya]);
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
        //
              $validator = \Validator::make($request->all(), [
        'item'=>'required|alpha_dash',
      'unit'=>'required|alpha_dash',
        'ksh_per_unit'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $retail = new CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya_Model();
            $retail->item =$request->item;
            $retail->unit=$request->unit;
            $retail->ksh_per_unit=$request->ksh_per_unit;
            $retail->year=$request->year;
            $retail->save();
             return response()->json($retail);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($avg_retail_price_id)
    {
        //
         $retail = CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya_Model::findOrfail($avg_retail_price_id);

  
          echo json_encode($retail);
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
        //
         $validator = \Validator::make($request->all(), [
         'item'=>'required|alpha_dash',
      'unit'=>'required|alpha_dash',
       'ksh_per_unit'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $retail=CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya_Model::find($request->id);
            $retail->item=$request->item;
            $retail->unit=$request->unit;
            $retail->ksh_per_unit=$request->ksh_per_unit;
            $retail->year=$request->year;
            $retail->save();
             return response()->json($retail);
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
