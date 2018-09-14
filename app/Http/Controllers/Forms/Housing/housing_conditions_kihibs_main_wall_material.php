<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_main_wall_material_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_main_wall_material extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'lime_stone'=>'required',
                          'bricks'=>'required|numeric',
                          'cement_blocks'=>'required|numeric',
                          'cement_finish'=>'required|numeric',
                          'wood'=>'required|numeric',
                          'adobe'=>'required|numeric',
                          'iron_sheets'=>'required|numeric',
                          'bamboo'=>'required|numeric',
                          'stone'=>'required|numeric',
                          'cane'=>'required|numeric',
                          'plywood'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_main_wall_material')
               ->join('health_counties', 'housing_conditions_kihibs_main_wall_material.county_id', '=', 'health_counties.county_id')
                ->orderBy('material_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_main_wall_material',
                 
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
                          'lime_stone'=>'required',
                          'bricks'=>'required|numeric',
                          'cement_blocks'=>'required|numeric',
                          'cement_finish'=>'required|numeric',
                          'wood'=>'required|numeric',
                          'adobe'=>'required|numeric',
                         'iron_sheets'=>'required|numeric',
                          'bamboo'=>'required|numeric',
                          'stone'=>'required|numeric',
                           'cane'=>'required|numeric',
                            'plywood'=>'required|numeric',
                           
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $wall = new housing_conditions_kihibs_main_wall_material_model();
            $wall->county_id =$request->county_id;
            $wall->lime_stone=$request->lime_stone;
            $wall->bricks=$request->bricks;         
            $wall->cement_blocks=$request->cement_blocks;

            $wall->cement_finish=$request->cement_finish;
            $wall->wood=$request->wood;         
            $wall->adobe=$request->adobe;

            $wall->iron_sheets=$request->iron_sheets;
           $wall->bamboo=$request->bamboo;
           $wall->stone=$request->stone;
           $wall->cane=$request->cane;
           $wall->plywood=$request->plywood;
       
            $wall->not_stated=$request->not_stated;
            $wall->households=$request->households;
         
         
            $wall->save();
             return response()->json($wall);
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
      
          $wall = housing_conditions_kihibs_main_wall_material_model::findOrfail($id);
     
      
         echo json_encode($wall);
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
                          'lime_stone'=>'required',
                          'bricks'=>'required|numeric',
                          'cement_blocks'=>'required|numeric',
                          'cement_finish'=>'required|numeric',
                          'wood'=>'required|numeric',
                          'adobe'=>'required|numeric',
                         'iron_sheets'=>'required|numeric',
                                'bamboo'=>'required|numeric',
                          'stone'=>'required|numeric',
                           'cane'=>'required|numeric',
                            'plywood'=>'required|numeric',
                           
                      
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $wall =housing_conditions_kihibs_main_wall_material_model::find($request->id);
           $wall->county_id =$request->county_id;
           $wall->lime_stone=$request->lime_stone;
           $wall->bricks=$request->bricks;         
           $wall->cement_blocks=$request->cement_blocks;

           $wall->cement_finish=$request->cement_finish;
           $wall->wood=$request->wood;         
           $wall->adobe=$request->adobe;

           $wall->iron_sheets=$request->iron_sheets;
           $wall->bamboo=$request->bamboo;
           $wall->stone=$request->stone;
           $wall->cane=$request->cane;
           $wall->plywood=$request->plywood;
    
           $wall->not_stated=$request->not_stated;
           $wall->households=$request->households;                                    
        
            $wall->save();
             return response()->json($wall);
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
