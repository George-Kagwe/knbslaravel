<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_methods_used_to_make_water_safer_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_methods_used_to_make_water_safer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                           'boil'=>'required',
                           'add_bleach'=>'required|numeric',
                           'water_filter'=>'required|numeric',
                           'solar'=>'required|numeric',
                           'sieve_cloth'=>'required|numeric',
                           'stand_settle'=>'required|numeric',
                           'other'=>'required|numeric',
                           'households'=>'required|numeric',
                           'nothing'=>'required|numeric',

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_methods_used_to_make_water_safer')
               ->join('health_counties', 'housing_conditions_kihibs_methods_used_to_make_water_safer.county_id', '=', 'health_counties.county_id')
                ->orderBy('method_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_methods_used_to_make_water_safer',
                 
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
                          'boil'=>'required',
                          'add_bleach'=>'required|numeric',
                          'water_filter'=>'required|numeric',
                          'solar'=>'required|numeric',
                          'sieve_cloth'=>'required|numeric',
                          'stand_settle'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric',
                          'nothing'=>'required|numeric',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $safe = new housing_conditions_kihibs_methods_used_to_make_water_safer_model();
            $safe->county_id =$request->county_id;
            $safe->boil=$request->boil;
            $safe->add_bleach=$request->add_bleach;         
            $safe->water_filter=$request->water_filter;
            $safe->solar=$request->solar;
            $safe->sieve_cloth=$request->sieve_cloth;
            $safe->stand_settle=$request->stand_settle;
            $safe->other=$request->other;       
            $safe->households=$request->households;
            $safe->nothing=$request->nothing;  
            $safe->save();
             return response()->json($safe);
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
      
          $safe = housing_conditions_kihibs_methods_used_to_make_water_safer_model::findOrfail($id);
     
      
         echo json_encode($safe);
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
                          'boil'=>'required',
                          'add_bleach'=>'required|numeric',
                          'water_filter'=>'required|numeric',
                          'solar'=>'required|numeric',
                          'sieve_cloth'=>'required|numeric',
                          'stand_settle'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric',
                          'nothing'=>'required|numeric',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $safe =housing_conditions_kihibs_methods_used_to_make_water_safer_model::find($request->id);
           $safe->county_id =$request->county_id;
           $safe->boil=$request->boil;
           $safe->add_bleach=$request->add_bleach;         
           $safe->water_filter=$request->water_filter;
           $safe->solar=$request->solar;
           $safe->sieve_cloth=$request->sieve_cloth;
           $safe->stand_settle=$request->stand_settle;
           $safe->other=$request->other;   
           $safe->households=$request->households;                                    
           $safe->nothing=$request->nothing;   
           $safe->save();
             return response()->json($safe);
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
