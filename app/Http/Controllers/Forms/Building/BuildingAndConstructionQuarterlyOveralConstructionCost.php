<?php

namespace App\Http\Controllers\Forms\Building;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Building\BuildingAndConstructionQuarterlyOveralConstructionCost_Model;
use View;

class BuildingAndConstructionQuarterlyOveralConstructionCost extends Controller
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
         $BuildingAndConstructionQuarterlyOveralConstructionCost =BuildingAndConstructionQuarterlyOveralConstructionCost_Model::all();
        
        return view('Forms.Building.National.buildingandconstructionquarterlyoveralconstructioncost',['post' =>$BuildingAndConstructionQuarterlyOveralConstructionCost]);
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
            $categoryY = new BuildingAndConstructionQuarterlyOveralConstructionCost_Model();
            $categoryY->category =$request->category;
            $categoryY->march=$request->march;
            $categoryY->june=$request->june;
             $categoryY->sept=$request->sept;
              $categoryY->december=$request->december;
            $categoryY->year=$request->year;
            $categoryY->save();
             return response()->json($categoryY);
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
         $categoryY = BuildingAndConstructionQuarterlyOveralConstructionCost_Model::findOrfail($category_id);

  
          echo json_encode($categoryY);
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
         
            $categoryY=BuildingAndConstructionQuarterlyOveralConstructionCost_Model::find($request->id);
            $categoryY->category=$request->category;
            $categoryY->march=$request->march;
            $categoryY->june=$request->june;
              $categoryY->sept=$request->sept;
                $categoryY->december=$request->december;
            $categoryY->year=$request->year;
            $categoryY->save();
             return response()->json($categoryY);
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
