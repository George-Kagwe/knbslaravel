<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_time_taken_to_fetch_drinking_water_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_time_taken_to_fetch_drinking_water extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'zero'=>'required',
                          'less_thirty_min'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_time_taken_to_fetch_drinking_water')
               ->join('health_counties', 'housing_conditions_kihibs_time_taken_to_fetch_drinking_water.county_id', '=', 'health_counties.county_id')
                ->orderBy('time_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_time_taken_to_fetch_drinking_water',
                 
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
                         'zero'=>'required',
                          'less_thirty_min'=>'required|numeric',
                          'over_thirty_min'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
           $time = new housing_conditions_kihibs_time_taken_to_fetch_drinking_water_model();
           $time->county_id =$request->county_id;
           $time->zero=$request->zero;
           $time->less_thirty_min=$request->less_thirty_min;  
           $time->over_thirty_min=$request->over_thirty_min;          
           $time->not_stated=$request->not_stated;
           $time->households=$request->households;
    
         
         
            $time->save();
             return response()->json($time);
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
      
          $time = housing_conditions_kihibs_time_taken_to_fetch_drinking_water_model::findOrfail($id);
     
      
         echo json_encode($time);
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
                         'zero'=>'required',
                          'less_thirty_min'=>'required|numeric',
                         'over_thirty_min'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $time =housing_conditions_kihibs_time_taken_to_fetch_drinking_water_model::find($request->id);
           $time->county_id =$request->county_id;
           $time->zero=$request->zero;
           $time->less_thirty_min=$request->less_thirty_min;  
          $time->over_thirty_min=$request->over_thirty_min;          
           $time->not_stated=$request->not_stated;
           $time->households=$request->households;
                                     
        
            $time->save();
             return response()->json($time);
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
