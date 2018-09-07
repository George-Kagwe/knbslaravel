<?php

namespace App\Http\Controllers\Forms\Agriculture;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Sugar_Harvested;
use View;


class Agriculture_Sugar extends Controller
{
    
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $rules =
    [
      'area_under_cane_ha'=>'required|numeric',
      'area_harvested_ha'=>'required|numeric',
      'production_tonnes'=>'required|numeric',
      'average_yield_tonnes_per_ha'=>'required|numeric',
      'year'=>'required|numeric'
    ];
    public function index()
    {
        //fetch all records

        $Sugar_Harvested =Sugar_Harvested::all();
        
        return view('agriculture.national.sugarcane_yield',['post' =>$Sugar_Harvested]);

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
        
       

        $validator = \Validator::make($request->all(), [
          'area_under_cane_ha'=>'required|numeric',
          'area_harvested_ha'=>'required|numeric',
          'production_tonnes'=>'required|numeric',
          'average_yield_tonnes_per_ha'=>'required|numeric',
          'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $sugar = new Sugar_Harvested();
            $sugar->area_under_cane_ha =$request->area_under_cane_ha;
            $sugar->area_harvested_ha=$request->area_harvested_ha;
            $sugar->production_tonnes=$request->production_tonnes;
            $sugar->average_yield_tonnes_per_ha=$request->average_yield_tonnes_per_ha;
            $sugar->year=$request->year;
            $sugar->save();
             return response()->json($sugar);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($area_id)
    {
     
         // $Sugar_Harvested = Sugar_Harvested::where("area_id",$area_id)->first();
         $Sugar_Harvested = Sugar_Harvested::findOrfail($area_id);

  
          echo json_encode($Sugar_Harvested);        
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
        
       

        $validator = \Validator::make($request->all(), [
          'area_under_cane_ha'=>'required|numeric',
          'area_harvested_ha'=>'required|numeric',
          'production_tonnes'=>'required|numeric',
          'average_yield_tonnes_per_ha'=>'required|numeric',
          'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $sugar =Sugar_Harvested::find($request->id);
            
            $sugar->area_under_cane_ha =$request->area_under_cane_ha;
            $sugar->area_harvested_ha=$request->area_harvested_ha;
            $sugar->production_tonnes=$request->production_tonnes;
            $sugar->average_yield_tonnes_per_ha=$request->average_yield_tonnes_per_ha;
            $sugar->year=$request->year;
            $sugar->save();
             return response()->json($sugar);
           echo json_encode(array("status" => TRUE));

        }    }

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
