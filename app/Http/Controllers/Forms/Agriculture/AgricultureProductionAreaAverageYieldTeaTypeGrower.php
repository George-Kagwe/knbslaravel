<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\AgricultureProductionAreaAverageYieldTeaTypeGrower_Model;
use View;

class AgricultureProductionAreaAverageYieldTeaTypeGrower extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'category'=>'required|alpha_dash',
      'smallholders'=>'required|numeric',
      'estates'=>'required|numeric',
       'unit'=>'required|alpha_dash',
        
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $AgricultureProductionAreaAverageYieldTeaTypeGrower =AgricultureProductionAreaAverageYieldTeaTypeGrower_Model::all();
        
        return view('Forms.Agriculture.National.agricultureproductionareaaverageyieldteatypegrower',['post' =>$AgricultureProductionAreaAverageYieldTeaTypeGrower]);
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
      'smallholders'=>'required|numeric',
      'estates'=>'required|numeric',
       'unit'=>'required|alpha_dash',
        
      'year'=>'required|numeric'
                              
                  
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $unitZ = new AgricultureProductionAreaAverageYieldTeaTypeGrower_Model();
            $unitZ->category =$request->category;
            $unitZ->smallholders=$request->smallholders;
            $unitZ->estates=$request->estates;
             $unitZ->unit=$request->unit;
              
            $unitZ->year=$request->year;
            $unitZ->save();
             return response()->json($unitZ);
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
         $unitZ = AgricultureProductionAreaAverageYieldTeaTypeGrower_Model::findOrfail($category_id);

  
          echo json_encode($unitZ);
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
      'smallholders'=>'required|numeric',
      'estates'=>'required|numeric',
       'unit'=>'required|alpha_dash',
        
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $unitZ=AgricultureProductionAreaAverageYieldTeaTypeGrower_Model::find($request->id);
            $unitZ->category=$request->category;
            $unitZ->smallholders=$request->smallholders;
            $unitZ->estates=$request->estates;
              $unitZ->unit=$request->unit;
                
            $unitZ->year=$request->year;
            $unitZ->save();
             return response()->json($unitZ);
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
