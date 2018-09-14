<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_hholds_in_rented_dwellings_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_hholds_in_rented_dwellings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_id'=>'required',
                          'govt_national'=>'required',
                          'govt_county'=>'required|numeric',
                          'parastatal'=>'required|numeric',
                          'company_directly'=>'required|numeric',
                          'company_agent'=>'required|numeric',
                          'individual_directly'=>'required|numeric',
                         'individual_agent'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_hholds_in_rented_dwellings')
               ->join('health_counties', 'housing_conditions_kihibs_hholds_in_rented_dwellings.county_id', '=', 'health_counties.county_id')
                ->orderBy('dwelling_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_hholds_in_rented_dwellings',
                 
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
                          'govt_national'=>'required',
                          'govt_county'=>'required|numeric',
                          'parastatal'=>'required|numeric',
                          'company_directly'=>'required|numeric',
                          'company_agent'=>'required|numeric',
                          'individual_directly'=>'required|numeric',
                         'individual_agent'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $dwelling = new housing_conditions_kihibs_hholds_in_rented_dwellings_model();
            $dwelling->county_id =$request->county_id;
            $dwelling->govt_national=$request->govt_national;
            $dwelling->govt_county=$request->govt_county;         
            $dwelling->parastatal=$request->parastatal;

            $dwelling->company_directly=$request->company_directly;
            $dwelling->company_agent=$request->company_agent;         
            $dwelling->individual_directly=$request->individual_directly;

            $dwelling->individual_agent=$request->individual_agent;
            $dwelling->other=$request->other;         
            $dwelling->not_stated=$request->not_stated;

            $dwelling->households=$request->households;
         
         
            $dwelling->save();
             return response()->json($dwelling);
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
      
          $dwelling = housing_conditions_kihibs_hholds_in_rented_dwellings_model::findOrfail($id);
     
      
         echo json_encode($dwelling);
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
                          'govt_national'=>'required',
                          'govt_county'=>'required|numeric',
                          'parastatal'=>'required|numeric',
                          'company_directly'=>'required|numeric',
                          'company_agent'=>'required|numeric',
                          'individual_directly'=>'required|numeric',
                          'individual_agent'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
               $dwelling =housing_conditions_kihibs_hholds_in_rented_dwellings_model::find($request->id);
            $dwelling->county_id =$request->county_id;
            $dwelling->govt_national=$request->govt_national;
            $dwelling->govt_county=$request->govt_county;         
            $dwelling->parastatal=$request->parastatal;

            $dwelling->company_directly=$request->company_directly;
            $dwelling->company_agent=$request->company_agent;         
            $dwelling->individual_directly=$request->individual_directly;

            $dwelling->individual_agent=$request->individual_agent;
            $dwelling->other=$request->other;         
            $dwelling->not_stated=$request->not_stated;

            $dwelling->households=$request->households;
        
            $dwelling->save();
             return response()->json($dwelling);
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
