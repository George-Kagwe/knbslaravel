<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_main_toilet_facility_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_main_toilet_facility extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'piped_sewer'=>'required',
                          'septic_tank'=>'required|numeric',
                          'latrine'=>'required|numeric',
                          'vip'=>'required|numeric',
                          'latrine_slab'=>'required|numeric',
                          'composting_toilet'=>'required|numeric',
                         'somewhere_else'=>'required|numeric',
                          'unknown_place'=>'required|numeric',
                          'without_slab'=>'required|numeric',
                           'bucket_toilet'=>'required|numeric',
                            'hanging_toilet'=>'required|numeric',
                           
                          'bush'=>'required|numeric',
                           'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_main_toilet_facility')
               ->join('health_counties', 'housing_conditions_kihibs_main_toilet_facility.county_id', '=', 'health_counties.county_id')
                ->orderBy('facility_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_main_toilet_facility',
                 
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
                          'piped_sewer'=>'required',
                          'septic_tank'=>'required|numeric',
                          'latrine'=>'required|numeric',
                          'vip'=>'required|numeric',
                          'latrine_slab'=>'required|numeric',
                          'composting_toilet'=>'required|numeric',
                         'somewhere_else'=>'required|numeric',
                          'unknown_place'=>'required|numeric',
                          'without_slab'=>'required|numeric',
                           'bucket_toilet'=>'required|numeric',
                            'hanging_toilet'=>'required|numeric',
                           
                          'bush'=>'required|numeric',
                           'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $toilet = new housing_conditions_kihibs_main_toilet_facility_model();
            $toilet->county_id =$request->county_id;
            $toilet->piped_sewer=$request->piped_sewer;
            $toilet->septic_tank=$request->septic_tank;         
            $toilet->latrine=$request->latrine;

            $toilet->vip=$request->vip;
            $toilet->latrine_slab=$request->latrine_slab;         
            $toilet->composting_toilet=$request->composting_toilet;

            $toilet->somewhere_else=$request->somewhere_else;
           $toilet->unknown_place=$request->unknown_place;
           $toilet->without_slab=$request->without_slab;
           $toilet->bucket_toilet=$request->bucket_toilet;
           $toilet->hanging_toilet=$request->hanging_toilet;
            $toilet->bush=$request->bush;     
            $toilet->other=$request->other;       
            $toilet->not_stated=$request->not_stated;
            $toilet->households=$request->households;
         
         
            $toilet->save();
             return response()->json($toilet);
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
      
          $toilet = housing_conditions_kihibs_main_toilet_facility_model::findOrfail($id);
     
      
         echo json_encode($toilet);
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
                          'piped_sewer'=>'required',
                          'septic_tank'=>'required|numeric',
                          'latrine'=>'required|numeric',
                          'vip'=>'required|numeric',
                          'latrine_slab'=>'required|numeric',
                          'composting_toilet'=>'required|numeric',
                         'somewhere_else'=>'required|numeric',
                                'unknown_place'=>'required|numeric',
                          'without_slab'=>'required|numeric',
                           'bucket_toilet'=>'required|numeric',
                            'hanging_toilet'=>'required|numeric',
                           
                          'bush'=>'required|numeric',
                           'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $toilet =housing_conditions_kihibs_main_toilet_facility_model::find($request->id);
           $toilet->county_id =$request->county_id;
           $toilet->piped_sewer=$request->piped_sewer;
           $toilet->septic_tank=$request->septic_tank;         
           $toilet->latrine=$request->latrine;

           $toilet->vip=$request->vip;
           $toilet->latrine_slab=$request->latrine_slab;         
           $toilet->composting_toilet=$request->composting_toilet;

           $toilet->somewhere_else=$request->somewhere_else;
           $toilet->unknown_place=$request->unknown_place;
           $toilet->without_slab=$request->without_slab;
           $toilet->bucket_toilet=$request->bucket_toilet;
           $toilet->hanging_toilet=$request->hanging_toilet;
           $toilet->bush=$request->bush;         
           $toilet->other=$request->other;   
           $toilet->not_stated=$request->not_stated;
           $toilet->households=$request->households;                                    
        
            $toilet->save();
             return response()->json($toilet);
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
