<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_main_source_of_drinking_water_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_main_source_of_drinking_water extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'piped_dwelling'=>'required',
                          'piped_yard'=>'required|numeric',
                          'piped_tap'=>'required|numeric',
                          'tubewell'=>'required|numeric',
                          'protected_well'=>'required|numeric',
                          'protected_spring'=>'required|numeric',
                         'rain_water'=>'required|numeric',
                          'bottled_water'=>'required|numeric',
                          'unprotected_well'=>'required|numeric',
                           'unprotected_spring'=>'required|numeric',
                            'vendor_truck'=>'required|numeric',
                             'vendor_drum'=>'required|numeric',
                              'vendor_bicycles'=>'required|numeric',
                               'surface_water'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_main_source_of_drinking_water')
               ->join('health_counties', 'housing_conditions_kihibs_main_source_of_drinking_water.county_id', '=', 'health_counties.county_id')
                ->orderBy('source_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_main_source_of_drinking_water',
                 
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
                          'piped_dwelling'=>'required',
                          'piped_yard'=>'required|numeric',
                          'piped_tap'=>'required|numeric',
                          'tubewell'=>'required|numeric',
                          'protected_well'=>'required|numeric',
                          'protected_spring'=>'required|numeric',
                         'rain_water'=>'required|numeric',
                          'bottled_water'=>'required|numeric',
                          'unprotected_well'=>'required|numeric',
                           'unprotected_spring'=>'required|numeric',
                            'vendor_truck'=>'required|numeric',
                             'vendor_drum'=>'required|numeric',
                              'vendor_bicycles'=>'required|numeric',
                               'surface_water'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $water = new housing_conditions_kihibs_main_source_of_drinking_water_model();
            $water->county_id =$request->county_id;
            $water->piped_dwelling=$request->piped_dwelling;
            $water->piped_yard=$request->piped_yard;         
            $water->piped_tap=$request->piped_tap;

            $water->tubewell=$request->tubewell;
            $water->protected_well=$request->protected_well;         
            $water->protected_spring=$request->protected_spring;

            $water->rain_water=$request->rain_water;
           $water->bottled_water=$request->bottled_water;
           $water->unprotected_well=$request->unprotected_well;
           $water->unprotected_spring=$request->unprotected_spring;
           $water->vendor_truck=$request->vendor_truck;
            $water->vendor_drum=$request->vendor_drum;
            $water->vendor_bicycles=$request->vendor_bicycles;
            $water->surface_water=$request->surface_water;
            $water->other=$request->other;         
            $water->not_stated=$request->not_stated;

            $water->households=$request->households;
         
         
            $water->save();
             return response()->json($water);
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
      
          $water = housing_conditions_kihibs_main_source_of_drinking_water_model::findOrfail($id);
     
      
         echo json_encode($water);
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
                          'piped_dwelling'=>'required',
                          'piped_yard'=>'required|numeric',
                          'piped_tap'=>'required|numeric',
                          'tubewell'=>'required|numeric',
                          'protected_well'=>'required|numeric',
                          'protected_spring'=>'required|numeric',
                         'rain_water'=>'required|numeric',
                                'bottled_water'=>'required|numeric',
                          'unprotected_well'=>'required|numeric',
                           'unprotected_spring'=>'required|numeric',
                            'vendor_truck'=>'required|numeric',
                             'vendor_drum'=>'required|numeric',
                              'vendor_bicycles'=>'required|numeric',
                               'surface_water'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $water =housing_conditions_kihibs_main_source_of_drinking_water_model::find($request->id);
          $water->county_id =$request->county_id;
            $water->piped_dwelling=$request->piped_dwelling;
            $water->piped_yard=$request->piped_yard;         
            $water->piped_tap=$request->piped_tap;

            $water->tubewell=$request->tubewell;
            $water->protected_well=$request->protected_well;         
            $water->protected_spring=$request->protected_spring;

            $water->rain_water=$request->rain_water;
           $water->bottled_water=$request->bottled_water;
           $water->unprotected_well=$request->unprotected_well;
           $water->unprotected_spring=$request->unprotected_spring;
           $water->vendor_truck=$request->vendor_truck;
            $water->vendor_drum=$request->vendor_drum;
            $water->vendor_bicycles=$request->vendor_bicycles;
            $water->surface_water=$request->surface_water;
            $water->other=$request->other;         
            $water->not_stated=$request->not_stated;

            $water->households=$request->households;                                    
        
            $water->save();
             return response()->json($water);
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
