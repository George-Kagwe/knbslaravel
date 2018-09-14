<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_main_roofing_material_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_main_roofing_material extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'grass'=>'required',
                          'mud'=>'required|numeric',
                          'iron_sheets'=>'required|numeric',
                          'tin_cans'=>'required|numeric',
                          'sheet'=>'required|numeric',
                          'concrete'=>'required|numeric',
                         'tiles'=>'required|numeric',
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_main_roofing_material')
               ->join('health_counties', 'housing_conditions_kihibs_main_roofing_material.county_id', '=', 'health_counties.county_id')
                ->orderBy('material_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_main_roofing_material',
                 
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
                          'grass'=>'required',
                          'mud'=>'required|numeric',
                          'iron_sheets'=>'required|numeric',
                          'tin_cans'=>'required|numeric',
                          'sheet'=>'required|numeric',
                          'concrete'=>'required|numeric',
                         'tiles'=>'required|numeric',
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $roof = new housing_conditions_kihibs_main_roofing_material_model();
            $roof->county_id =$request->county_id;
            $roof->grass=$request->grass;
            $roof->mud=$request->mud;         
            $roof->iron_sheets=$request->iron_sheets;

            $roof->tin_cans=$request->tin_cans;
            $roof->sheet=$request->sheet;         
            $roof->concrete=$request->concrete;

            $roof->tiles=$request->tiles;
            
            $roof->not_stated=$request->not_stated;

            $roof->households=$request->households;
         
         
            $roof->save();
             return response()->json($roof);
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
      
          $rooms = housing_conditions_kihibs_main_roofing_material_model::findOrfail($id);
     
      
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
                          'grass'=>'required',
                          'mud'=>'required|numeric',
                          'iron_sheets'=>'required|numeric',
                          'tin_cans'=>'required|numeric',
                          'sheet'=>'required|numeric',
                          'concrete'=>'required|numeric',
                          'tiles'=>'required|numeric',
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $roof =housing_conditions_kihibs_main_roofing_material_model::find($request->id);
            $roof->county_id =$request->county_id;
            $roof->grass=$request->grass;
            $roof->mud=$request->mud;         
            $roof->iron_sheets=$request->iron_sheets;

            $roof->tin_cans=$request->tin_cans;
            $roof->sheet=$request->sheet;         
            $roof->concrete=$request->concrete;

            $roof->tiles=$request->tiles;
            
            $roof->not_stated=$request->not_stated;

            $roof->households=$request->households;
        
            $roof->save();
             return response()->json($roof);
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
