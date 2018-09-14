<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower_Model;
use View;


class AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'category'=>'required|alpha_dash',
      'cooperatives'=>'required|numeric',
      'estates'=>'required|numeric',
       'unit'=>'required|alpha_dash',
        
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower =AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower_Model::all();
        
        return view('Forms.Agriculture.National.agricultureproductionareaaverageyieldcoffeetypeofgrower',['post' =>$AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower]);
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
         'category'=>'required|alpha_dash',
      'cooperatives'=>'required|numeric',
      'estates'=>'required|numeric',
       'unit'=>'required|alpha_dash',
        
      'year'=>'required|numeric'
                              
                  
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $cooperative = new AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower_Model();
            $cooperative->category =$request->category;
            $cooperative->cooperatives=$request->cooperatives;
            $cooperative->estates=$request->estates;
             $cooperative->unit=$request->unit;
              
            $cooperative->year=$request->year;
            $cooperative->save();
             return response()->json($cooperative);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        //
         $cooperative = AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower_Model::findOrfail($category_id);

  
          echo json_encode($cooperative);
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
              'category'=>'required|alpha_dash',
      'cooperatives'=>'required|numeric',
      'estates'=>'required|numeric',
       'unit'=>'required|alpha_dash',
        
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $cooperative=AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower_Model::find($request->id);
            $cooperative->category=$request->category;
            $cooperative->cooperatives=$request->cooperatives;
            $cooperative->estates=$request->estates;
              $cooperative->unit=$request->unit;
                
            $cooperative->year=$request->year;
            $cooperative->save();
             return response()->json($cooperative);
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
