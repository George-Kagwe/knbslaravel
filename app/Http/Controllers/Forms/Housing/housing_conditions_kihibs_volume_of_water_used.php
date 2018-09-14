<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_volume_of_water_used_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_volume_of_water_used extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'lit_0_1000'=>'required',
                          'lit_1001_2000'=>'required|numeric',
                          'over_3000_lit'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_volume_of_water_used')
               ->join('health_counties', 'housing_conditions_kihibs_volume_of_water_used.county_id', '=', 'health_counties.county_id')
                ->orderBy('volume_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_volume_of_water_used',
                 
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
                         'lit_0_1000'=>'required',
                          'lit_1001_2000'=>'required|numeric',
                          'lit_2001_3000'=>'required|numeric',
                          'over_3000_lit'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
           $volume = new housing_conditions_kihibs_volume_of_water_used_model();
           $volume->county_id =$request->county_id;
           $volume->lit_0_1000=$request->lit_0_1000;
           $volume->lit_1001_2000=$request->lit_1001_2000;  
           $volume->lit_2001_3000=$request->lit_2001_3000;          
           $volume->over_3000_lit=$request->over_3000_lit;
           $volume->not_stated=$request->not_stated;
           $volume->households=$request->households;
    
         
         
            $volume->save();
             return response()->json($volume);
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
      
          $volume = housing_conditions_kihibs_volume_of_water_used_model::findOrfail($id);
     
      
         echo json_encode($volume);
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
                         'lit_0_1000'=>'required',
                          'lit_1001_2000'=>'required|numeric',
                         'lit_2001_3000'=>'required|numeric',
                          'over_3000_lit'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $volume =housing_conditions_kihibs_volume_of_water_used_model::find($request->id);
           $volume->county_id =$request->county_id;
           $volume->lit_0_1000=$request->lit_0_1000;
           $volume->lit_1001_2000=$request->lit_1001_2000;  
          $volume->lit_2001_3000=$request->lit_2001_3000;          
           $volume->over_3000_lit=$request->over_3000_lit;
             $volume->not_stated=$request->not_stated;
           $volume->households=$request->households;
                                     
        
            $volume->save();
             return response()->json($volume);
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
