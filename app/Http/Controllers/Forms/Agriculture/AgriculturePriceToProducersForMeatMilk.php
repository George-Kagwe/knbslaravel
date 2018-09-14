<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\AgriculturePriceToProducersForMeatMilk_Model;
use View;


class AgriculturePriceToProducersForMeatMilk extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'beef_third_grade_per_kg'=>'required|numeric',
      'pig_meat_per_kg'=>'required|numeric',
      'whole_milk_per_litre'=>'required|numeric',
       
        
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
        $AgriculturePriceToProducersForMeatMilk =AgriculturePriceToProducersForMeatMilk_Model::all();
        
        return view('Forms.Agriculture.National.agriculturepricetoproducersformeatmilk',['post' =>$AgriculturePriceToProducersForMeatMilk]);
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
         'beef_third_grade_per_kg'=>'required|numeric',
      'pig_meat_per_kg'=>'required|numeric',
      'whole_milk_per_litre'=>'required|numeric',
       
        
      'year'=>'required|numeric'
                              
                  
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $pig = new AgriculturePriceToProducersForMeatMilk_Model();
            $pig->beef_third_grade_per_kg =$request->beef_third_grade_per_kg;
            $pig->pig_meat_per_kg=$request->pig_meat_per_kg;
            $pig->whole_milk_per_litre=$request->whole_milk_per_litre;
             
              
            $pig->year=$request->year;
            $pig->save();
             return response()->json($pig);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($price_to_producers_for_meat_milk_id)
    {
        //
        $pig = AgriculturePriceToProducersForMeatMilk_Model::findOrfail($price_to_producers_for_meat_milk_id);

  
          echo json_encode($pig);
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
              'beef_third_grade_per_kg'=>'required|numeric',
      'pig_meat_per_kg'=>'required|numeric',
      'whole_milk_per_litre'=>'required|numeric',
       
        
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $pig=AgriculturePriceToProducersForMeatMilk_Model::find($request->id);
         $pig->beef_third_grade_per_kg =$request->beef_third_grade_per_kg;
            $pig->pig_meat_per_kg=$request->pig_meat_per_kg;
            $pig->whole_milk_per_litre=$request->whole_milk_per_litre;
             
              
            $pig->year=$request->year;
            $pig->save();
             return response()->json($pig);
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
