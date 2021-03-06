<?php

namespace App\Http\Controllers\Forms\Building;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Building\BuildingAndConstructionQuarterlyNonResidentialBuildCost_Model;
use View;

class BuildingAndConstructionQuarterlyNonResidentialBuildCost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        protected $rules =
    [
      'category'=>'required|alpha_dash',
      'march'=>'required|numeric',
      'june'=>'required|numeric',
       'sept'=>'required|numeric',
        'december'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $BuildingAndConstructionQuarterlyNonResidentialBuildCost =BuildingAndConstructionQuarterlyNonResidentialBuildCost_Model::all();
        
        return view('Forms.Building.National.buildingandconstructionquarterlynonresidentialbuildcost',['post' =>$BuildingAndConstructionQuarterlyNonResidentialBuildCost]);
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
      'march'=>'required|numeric',
      'june'=>'required|numeric',
       'sept'=>'required|numeric',
        'december'=>'required|numeric',
      'year'=>'required|numeric'
                              
                  
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $costY = new BuildingAndConstructionQuarterlyNonResidentialBuildCost_Model();
            $costY->category =$request->category;
            $costY->march=$request->march;
            $costY->june=$request->june;
             $costY->sept=$request->sept;
              $costY->december=$request->december;
            $costY->year=$request->year;
            $costY->save();
             return response()->json($costY);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cost_index_id)
    {
        //
         $costY = BuildingAndConstructionQuarterlyNonResidentialBuildCost_Model::findOrfail($cost_index_id);

  
          echo json_encode($costY);
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
      'march'=>'required|numeric',
      'june'=>'required|numeric',
       'sept'=>'required|numeric',
        'december'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $costY=BuildingAndConstructionQuarterlyNonResidentialBuildCost_Model::find($request->id);
            $costY->category=$request->category;
            $costY->march=$request->march;
            $costY->june=$request->june;
              $costY->sept=$request->sept;
                $costY->december=$request->december;
            $costY->year=$request->year;
            $costY->save();
             return response()->json($costY);
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
