<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Environment\land_and_climate_topography_altitude_model;
use View;
use Illuminate\Support\Facades\DB;

class land_and_climate_topography_altitude extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'geography_type'=>'required',
                          'altitude_in_metres'=>'required|numeric',
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('land_and_climate_topography_altitude')
               ->join('health_counties', 'land_and_climate_topography_altitude.county_id', '=', 'health_counties.county_id')
                            ->orderBy('altitude_topography_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

              

      
        return view('forms.environment.county.land_and_climate_topography_altitude',
                 
                   ['post' =>$data,'counties' =>$counties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       

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
                          'county_id'=>'required',
                          'geography_type'=>'required',
                          'altitude_in_metres'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $topography = new land_and_climate_topography_altitude_model();
            $topography->county_id =$request->county_id;
            $topography->geography_type=$request->geography_type;
            $topography->altitude_in_metres=$request->altitude_in_metres;         
            $topography->year=$request->year;
            $topography->save();
             return response()->json($topography);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
          $topography = land_and_climate_topography_altitude_model::findOrfail($id);
     
      
         echo json_encode($topography);
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
                          'county_id'=>'required',
                          'geography_type'=>'required',
                          'altitude_in_metres'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $topography =land_and_climate_topography_altitude_model::find($request->id);
            $topography->county_id =$request->county_id;
            $topography->geography_type=$request->geography_type;
            $topography->altitude_in_metres=$request->altitude_in_metres;         
            $topography->year=$request->year;
            $topography->save();
             return response()->json($topography);
           echo json_encode(array("status" => TRUE));

        }  



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
