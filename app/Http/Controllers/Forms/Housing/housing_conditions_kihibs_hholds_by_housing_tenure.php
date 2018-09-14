<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_hholds_by_housing_tenure_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_hholds_by_housing_tenure extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'owner_occupier'=>'required',
                          'pays_rent'=>'required|numeric',
                          'no_rent_consent'=>'required|numeric',
                          'no_rent_squatting'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                     
                          'households'=>'required|numeric'
                       

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_hholds_by_housing_tenure')
               ->join('health_counties', 'housing_conditions_kihibs_hholds_by_housing_tenure.county_id', '=', 'health_counties.county_id')
                ->orderBy('tenure_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_hholds_by_housing_tenure',
                 
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
                          'owner_occupier'=>'required',
                          'pays_rent'=>'required|numeric',
                          'no_rent_consent'=>'required|numeric',
                          'no_rent_squatting'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                     
                          'households'=>'required|numeric'
                 
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $tenure = new housing_conditions_kihibs_hholds_by_housing_tenure_model();
            $tenure->county_id =$request->county_id;
            $tenure->owner_occupier=$request->owner_occupier;
            $tenure->pays_rent=$request->pays_rent;         
            $tenure->no_rent_consent=$request->no_rent_consent;

            $tenure->no_rent_squatting=$request->no_rent_squatting;
            $tenure->not_stated=$request->not_stated;         
      

            $tenure->not_stated=$request->not_stated;
            $tenure->households=$request->households;         
     
         
         
            $tenure->save();
             return response()->json($tenure);
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
      
          $tenure = housing_conditions_kihibs_hholds_by_housing_tenure_model::findOrfail($id);
     
      
         echo json_encode($tenure);
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
                          'owner_occupier'=>'required',
                          'pays_rent'=>'required|numeric',
                          'no_rent_consent'=>'required|numeric',
                          'no_rent_squatting'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                 
                          'households'=>'required|numeric'
                   
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $tenure =housing_conditions_kihibs_hholds_by_housing_tenure_model::find($request->id);
            $tenure->county_id =$request->county_id;
            $tenure->owner_occupier=$request->owner_occupier;
            $tenure->pays_rent=$request->pays_rent;         
            $tenure->no_rent_consent=$request->no_rent_consent;

            $tenure->no_rent_squatting=$request->no_rent_squatting;
            $tenure->not_stated=$request->not_stated;         
      

            $tenure->not_stated=$request->not_stated;
            $tenure->households=$request->households;         
            $tenure->households=$request->households;

          
        
            $tenure->save();
             return response()->json($tenure);
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
