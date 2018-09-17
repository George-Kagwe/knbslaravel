<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Education\education_edstat_ecde_enrollment_and_enrollment_rates_by_county_model;
use View;
use Illuminate\Support\Facades\DB;

class education_edstat_ecde_enrollment_and_enrollment_rates_by_county extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                  
                           'ecde_enrollment'=>'required|numeric',
                           'gross_enrollment_rate'=>'required|numeric',
                           'net_enrollment_rate'=>'required|numeric',
                           'gender'=>'required|alpha',
                           'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('education_edstat_ecde_enrollment_and_enrollment_rates_by_county')
               ->join('health_counties', 'education_edstat_ecde_enrollment_and_enrollment_rates_by_county.county_id', '=', 'health_counties.county_id')->get();
 

                $counties = DB::table('health_counties')->get();

        
      
        return view('forms.Education.county.education_edstat_ecde_enrollment_and_enrollment_rates_by_county',
                 
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
                           'county_name'=>'required',
                  
                           'ecde_enrollment'=>'required|numeric',
                           'gross_enrollment_rate'=>'required|numeric',
                           'net_enrollment_rate'=>'required|numeric',
                           'gender'=>'required|alpha',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $ecde = new education_edstat_ecde_enrollment_and_enrollment_rates_by_county_model();
            $ecde->county_id=$request->county_name;
          
            $ecde->ecde_enrollment=$request->ecde_enrollment;   
            $ecde->gross_enrollment_rate=$request->gross_enrollment_rate;  
            $ecde->net_enrollment_rate=$request->net_enrollment_rate;  
            $ecde->gender=$request->gender;    
            $ecde->year=$request->year;
            $ecde->save();
             return response()->json($ecde);
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
      
          $ecde = education_edstat_ecde_enrollment_and_enrollment_rates_by_county_model::findOrfail($id);
     
      
         echo json_encode($ecde);
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
                            'county_name'=>'required',
                  
                           'ecde_enrollment'=>'required|numeric',
                           'gross_enrollment_rate'=>'required|numeric',
                           'net_enrollment_rate'=>'required|numeric',
                           'gender'=>'required|alpha',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
            $ecde =education_edstat_ecde_enrollment_and_enrollment_rates_by_county_model::find($request->id);
            $ecde->county_id=$request->county_name;
          
            $ecde->ecde_enrollment=$request->ecde_enrollment;   
            $ecde->gross_enrollment_rate=$request->gross_enrollment_rate;  
            $ecde->net_enrollment_rate=$request->net_enrollment_rate;    
            $ecde->gender=$request->gender;   
            $ecde->year=$request->year;
            $ecde->save();
             return response()->json($ecde);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_subcounties($id)
    {
         $subcounties = DB::table('health_subcounty')
               ->where('county_id',  '=', $id)               
                ->get();

        return  json_encode($subcounties);
    }
}
