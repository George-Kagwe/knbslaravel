<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_place_for_washing_hands_near_toilet_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_place_for_washing_hands_near_toilet extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'place'=>'required',
                          'no_place'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_place_for_washing_hands_near_toilet')
               ->join('health_counties', 'housing_conditions_kihibs_place_for_washing_hands_near_toilet.county_id', '=', 'health_counties.county_id')
                ->orderBy('place_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_place_for_washing_hands_near_toilet',
                 
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
                         'place'=>'required',
                          'no_place'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $place = new housing_conditions_kihibs_place_for_washing_hands_near_toilet_model();
           $place->county_id =$request->county_id;
           $place->place=$request->place;
           $place->no_place=$request->no_place;         
           $place->not_stated=$request->not_stated;
           $place->households=$request->households;
    
         
         
            $place->save();
             return response()->json($place);
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
      
          $place = housing_conditions_kihibs_place_for_washing_hands_near_toilet_model::findOrfail($id);
     
      
         echo json_encode($place);
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
                         'place'=>'required',
                          'no_place'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $place =housing_conditions_kihibs_place_for_washing_hands_near_toilet_model::find($request->id);
           $place->county_id =$request->county_id;
           $place->place=$request->place;
           $place->no_place=$request->no_place;         
           $place->not_stated=$request->not_stated;
           $place->households=$request->households;
                                     
        
            $place->save();
             return response()->json($place);
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
