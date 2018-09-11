<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\AgricultureTotalShareCapital_Model;
use View;

class AgricultureTotalShareCapital extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'coffee'=>'required|numeric',
      'cotton'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
       'sugar'=>'required|numeric',
        
      'dairy'=>'required|numeric',
       'multi_purpose'=>'required|numeric',
      'farm_purchase'=>'required|numeric',
      'fisheries'=>'required|numeric',
       'other_agricultural'=>'required|numeric',
        
      'total_agriculture'=>'required|numeric',
       'saccos'=>'required|numeric',
      'consumer'=>'required|numeric',
      'housing'=>'required|numeric',
       'craftsmen'=>'required|numeric',
        
      'transport'=>'required|numeric',
       'other_non_agricultural'=>'required|numeric',
      'total_non_agricultural'=>'required|numeric',
      'unions'=>'required|numeric',
       
        
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
        $AgricultureTotalShareCapital =AgricultureTotalShareCapital_Model::all();
        
        return view('Forms.Agriculture.National.agriculturetotalsharecapital',['post' =>$AgricultureTotalShareCapital]);
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
   'coffee'=>'required|numeric',
      'cotton'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
       'sugar'=>'required|numeric',
        
      'dairy'=>'required|numeric',
       'multi_purpose'=>'required|numeric',
      'farm_purchase'=>'required|numeric',
      'fisheries'=>'required|numeric',
       'other_agricultural'=>'required|numeric',
        
      'total_agriculture'=>'required|numeric',
       'saccos'=>'required|numeric',
      'consumer'=>'required|numeric',
      'housing'=>'required|numeric',
       'craftsmen'=>'required|numeric',
        
      'transport'=>'required|numeric',
       'other_non_agricultural'=>'required|numeric',
      'total_non_agricultural'=>'required|numeric',
      'unions'=>'required|numeric',
       
        
      'year'=>'required|numeric'
                              
                  
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $share = new AgricultureTotalShareCapital_Model();
            $share->coffee =$request->coffee;
            $share->cotton=$request->cotton;
            $share->pyrethrum=$request->pyrethrum;
             $share->sugar=$request->sugar;
              $share->dairy =$request->dairy;
            $share->multi_purpose=$request->multi_purpose;
            $share->farm_purchase=$request->farm_purchase;
             $share->fisheries=$request->fisheries;
              $share->other_agricultural =$request->other_agricultural;
            $share->total_agriculture=$request->total_agriculture;
            $share->saccos=$request->saccos;
             $share->consumer=$request->consumer;
              $share->housing =$request->housing;
            $share->craftsmen=$request->craftsmen;
            $share->transport=$request->transport;
             $share->other_non_agricultural=$request->other_non_agricultural;
              $share->total_non_agricultural =$request->total_non_agricultural;
            $share->unions=$request->unions;
          
              
            $share->year=$request->year;
            $share->save();
             return response()->json($share);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($total_share_capital_id)
    {
        //
         $share = AgricultureTotalShareCapital_Model::findOrfail($total_share_capital_id);

  
          echo json_encode($share);
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
         'coffee'=>'required|numeric',
      'cotton'=>'required|numeric',
      'pyrethrum'=>'required|numeric',
       'sugar'=>'required|numeric',
        
      'dairy'=>'required|numeric',
       'multi_purpose'=>'required|numeric',
      'farm_purchase'=>'required|numeric',
      'fisheries'=>'required|numeric',
       'other_agricultural'=>'required|numeric',
        
      'total_agriculture'=>'required|numeric',
       'saccos'=>'required|numeric',
      'consumer'=>'required|numeric',
      'housing'=>'required|numeric',
       'craftsmen'=>'required|numeric',
        
      'transport'=>'required|numeric',
       'other_non_agricultural'=>'required|numeric',
      'total_non_agricultural'=>'required|numeric',
      'unions'=>'required|numeric',
       
        
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $share=AgricultureTotalShareCapital_Model::find($request->id);
               $share->coffee =$request->coffee;
            $share->cotton=$request->cotton;
            $share->pyrethrum=$request->pyrethrum;
             $share->sugar=$request->sugar;
              $share->dairy =$request->dairy;
            $share->multi_purpose=$request->multi_purpose;
            $share->farm_purchase=$request->farm_purchase;
             $share->fisheries=$request->fisheries;
              $share->other_agricultural =$request->other_agricultural;
            $share->total_agriculture=$request->total_agriculture;
            $share->saccos=$request->saccos;
             $share->consumer=$request->consumer;
              $share->housing =$request->housing;
            $share->craftsmen=$request->craftsmen;
            $share->transport=$request->transport;
             $share->other_non_agricultural=$request->other_non_agricultural;
              $share->total_non_agricultural =$request->total_non_agricultural;
            $share->unions=$request->unions;
          
              
            $share->year=$request->year;
            $share->save();
             return response()->json($share);
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
