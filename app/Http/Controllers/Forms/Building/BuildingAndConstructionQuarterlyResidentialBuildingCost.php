<?php

namespace App\Http\Controllers\Forms\Building;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Building\BuildingAndConstructionQuarterlyResidentialBuildingCost_Model;
use View;

class BuildingAndConstructionQuarterlyResidentialBuildingCost extends Controller
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
       'september'=>'required|numeric',
        'december'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $BuildingAndConstructionQuarterlyResidentialBuildingCost =BuildingAndConstructionQuarterlyResidentialBuildingCost_Model::all();
        
        return view('Forms.Building.National.buildingandconstructionquarterlyresidentialbuldingcost',['post' =>$BuildingAndConstructionQuarterlyResidentialBuildingCost]);
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
       'september'=>'required|numeric',
        'december'=>'required|numeric',
      'year'=>'required|numeric'
                              
                  
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $building = new BuildingAndConstructionQuarterlyResidentialBuildingCost_Model();
            $building->category =$request->category;
            $building->march=$request->march;
            $building->june=$request->june;
             $building->september=$request->september;
              $building->december=$request->december;
            $building->year=$request->year;
            $building->save();
             return response()->json($building);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($building_construction_id)
    {
        //
         $building = BuildingAndConstructionQuarterlyResidentialBuildingCost_Model::findOrfail($building_construction_id);

  
          echo json_encode($building);
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
       'september'=>'required|numeric',
        'december'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $building=BuildingAndConstructionQuarterlyResidentialBuildingCost_Model::find($request->id);
            $building->category=$request->category;
            $building->march=$request->march;
            $building->june=$request->june;
              $building->september=$request->september;
                $building->december=$request->december;
            $building->year=$request->year;
            $building->save();
             return response()->json($building);
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
