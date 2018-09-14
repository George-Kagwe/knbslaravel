<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_main_source_of_cooking_fuel_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_main_source_of_cooking_fuel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'firewood'=>'required',
                          'electricity'=>'required|numeric',
                          'lpg'=>'required|numeric',
                          'biogas'=>'required|numeric',
                          'kerosene'=>'required|numeric',
                          'charcoal'=>'required|numeric',
                         'shrubs'=>'required|numeric',
                      
                          'animal_dung'=>'required|numeric',
                          'crop_residue'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric',                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_main_source_of_cooking_fuel')
               ->join('health_counties', 'housing_conditions_kihibs_main_source_of_cooking_fuel.county_id', '=', 'health_counties.county_id')
                ->orderBy('source_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_main_source_of_cooking_fuel',
                 
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
                          'firewood'=>'required',
                          'electricity'=>'required|numeric',
                          'lpg'=>'required|numeric',
                          'biogas'=>'required|numeric',
                          'kerosene'=>'required|numeric',
                          'charcoal'=>'required|numeric',
                         'shrubs'=>'required|numeric',
                      
                          'animal_dung'=>'required|numeric',
                          'crop_residue'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric',                    


        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $fuel = new housing_conditions_kihibs_main_source_of_cooking_fuel_model();
            $fuel->county_id =$request->county_id;
            $fuel->firewood=$request->firewood;
            $fuel->electricity=$request->electricity;         
            $fuel->lpg=$request->lpg;

            $fuel->biogas=$request->biogas;
            $fuel->kerosene=$request->kerosene;         
            $fuel->charcoal=$request->charcoal;

            $fuel->shrubs=$request->shrubs;
            
            $fuel->animal_dung=$request->animal_dung;

            $fuel->crop_residue=$request->crop_residue;
            $fuel->other=$request->other;
            $fuel->households=$request->households;
         
            $fuel->save();
             return response()->json($fuel);
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
      
          $rooms = housing_conditions_kihibs_main_source_of_cooking_fuel_model::findOrfail($id);
     
      
         echo json_encode($rooms);
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
                          'firewood'=>'required',
                          'electricity'=>'required|numeric',
                          'lpg'=>'required|numeric',
                          'biogas'=>'required|numeric',
                          'kerosene'=>'required|numeric',
                          'charcoal'=>'required|numeric',
                         'shrubs'=>'required|numeric',
                      
                          'animal_dung'=>'required|numeric',
                          'crop_residue'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric', 
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $fuel =housing_conditions_kihibs_main_source_of_cooking_fuel_model::find($request->id);
            $fuel->county_id =$request->county_id;
            $fuel->firewood=$request->firewood;
            $fuel->electricity=$request->electricity;         
            $fuel->lpg=$request->lpg;

            $fuel->biogas=$request->biogas;
            $fuel->kerosene=$request->kerosene;         
            $fuel->charcoal=$request->charcoal;

            $fuel->shrubs=$request->shrubs;
            
            $fuel->animal_dung=$request->animal_dung;

            $fuel->crop_residue=$request->crop_residue;

            $fuel->other=$request->other;
            $fuel->households=$request->households;
        
            $fuel->save();
             return response()->json($fuel);
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
