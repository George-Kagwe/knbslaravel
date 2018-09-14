<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_hholds_by_type_of_housing_unit_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_hholds_by_type_of_housing_unit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'bungalow'=>'required',
                          'flat'=>'required|numeric',
                          'maisonnette'=>'required|numeric',
                          'swahili'=>'required|numeric',
                          'shanty'=>'required|numeric',
                          'manyatta'=>'required|numeric',
                         'landhi'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_hholds_by_type_of_housing_unit')
               ->join('health_counties', 'housing_conditions_kihibs_hholds_by_type_of_housing_unit.county_id', '=', 'health_counties.county_id')
                ->orderBy('unit_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_hholds_by_type_of_housing_unit',
                 
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
                          'bungalow'=>'required',
                          'flat'=>'required|numeric',
                          'maisonnette'=>'required|numeric',
                          'swahili'=>'required|numeric',
                          'shanty'=>'required|numeric',
                          'manyatta'=>'required|numeric',
                         'landhi'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $unit = new housing_conditions_kihibs_hholds_by_type_of_housing_unit_model();
            $unit->county_id =$request->county_id;
            $unit->bungalow=$request->bungalow;
            $unit->flat=$request->flat;         
            $unit->maisonnette=$request->maisonnette;

            $unit->swahili=$request->swahili;
            $unit->shanty=$request->shanty;         
            $unit->manyatta=$request->manyatta;

            $unit->landhi=$request->landhi;
            $unit->other=$request->other;         
            $unit->not_stated=$request->not_stated;

            $unit->households=$request->households;
         
         
            $unit->save();
             return response()->json($unit);
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
      
          $unit = housing_conditions_kihibs_hholds_by_type_of_housing_unit_model::findOrfail($id);
     
      
         echo json_encode($unit);
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
                          'bungalow'=>'required',
                          'flat'=>'required|numeric',
                          'maisonnette'=>'required|numeric',
                          'swahili'=>'required|numeric',
                          'shanty'=>'required|numeric',
                          'manyatta'=>'required|numeric',
                          'landhi'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $unit =housing_conditions_kihibs_hholds_by_type_of_housing_unit_model::find($request->id);
            $unit->county_id =$request->county_id;
            $unit->bungalow=$request->bungalow;
            $unit->flat=$request->flat;         
            $unit->maisonnette=$request->maisonnette;

            $unit->swahili=$request->swahili;
            $unit->shanty=$request->shanty;         
            $unit->manyatta=$request->manyatta;

            $unit->landhi=$request->landhi;
            $unit->other=$request->other;         
            $unit->not_stated=$request->not_stated;

            $unit->households=$request->households;
        
            $unit->save();
             return response()->json($unit);
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
