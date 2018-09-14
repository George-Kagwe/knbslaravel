<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_main_floor_material_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_main_floor_material extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'tiles'=>'required',
                          'cement'=>'required|numeric',
                          'wood'=>'required|numeric',
                          'cow_dung'=>'required|numeric',
                          'sand'=>'required|numeric',
                          'carpet'=>'required|numeric',
                         'other'=>'required|numeric',
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_main_floor_material')
               ->join('health_counties', 'housing_conditions_kihibs_main_floor_material.county_id', '=', 'health_counties.county_id')
                ->orderBy('material_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_main_floor_material',
                 
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
                          'tiles'=>'required',
                          'cement'=>'required|numeric',
                          'wood'=>'required|numeric',
                          'cow_dung'=>'required|numeric',
                          'sand'=>'required|numeric',
                          'carpet'=>'required|numeric',
                         'other'=>'required|numeric',
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $floor = new housing_conditions_kihibs_main_floor_material_model();
            $floor->county_id =$request->county_id;
            $floor->tiles=$request->tiles;
            $floor->cement=$request->cement;         
            $floor->wood=$request->wood;

            $floor->cow_dung=$request->cow_dung;
            $floor->sand=$request->sand;         
            $floor->carpet=$request->carpet;

            $floor->other=$request->other;
            
            $floor->not_stated=$request->not_stated;

            $floor->households=$request->households;
         
         
            $floor->save();
             return response()->json($floor);
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
      
          $rooms = housing_conditions_kihibs_main_floor_material_model::findOrfail($id);
     
      
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
                          'tiles'=>'required',
                          'cement'=>'required|numeric',
                          'wood'=>'required|numeric',
                          'cow_dung'=>'required|numeric',
                          'sand'=>'required|numeric',
                          'carpet'=>'required|numeric',
                          'other'=>'required|numeric',
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $floor =housing_conditions_kihibs_main_floor_material_model::find($request->id);
            $floor->county_id =$request->county_id;
            $floor->tiles=$request->tiles;
            $floor->cement=$request->cement;         
            $floor->wood=$request->wood;

            $floor->cow_dung=$request->cow_dung;
            $floor->sand=$request->sand;         
            $floor->carpet=$request->carpet;

            $floor->other=$request->other;
            
            $floor->not_stated=$request->not_stated;

            $floor->households=$request->households;
        
            $floor->save();
             return response()->json($floor);
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
