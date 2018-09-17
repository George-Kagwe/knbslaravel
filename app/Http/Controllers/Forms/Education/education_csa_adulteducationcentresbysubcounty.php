<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_csa_adulteducationcentresbysubcounty_model;
use View;
use Illuminate\Support\Facades\DB;

class education_csa_adulteducationcentresbysubcounty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [

                         'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'centres'=>'required|numeric',
                          'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('education_csa_adulteducationcentresbysubcounty')
               ->join('health_counties', 'education_csa_adulteducationcentresbysubcounty.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'education_csa_adulteducationcentresbysubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('adult_centre_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')
                          
                          ->get();

      
        return view('Forms.Education.county.education_csa_adulteducationcentresbysubcounty', ['post' =>$data,'counties' =>$counties,         'subcounty' =>$subcounty]);
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
                          'subcounty_name'=>'required',
                          'centres'=>'required|numeric',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $centre = new education_csa_adulteducationcentresbysubcounty_model();
            $centre->county_id =$request->county_name;
            $centre->sub_county_id=$request->subcounty_name;
            $centre->centres=$request->centres;         
            $centre->year=$request->year;
            $centre->save();
             return response()->json($centre);
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
      
          $centre = education_csa_adulteducationcentresbysubcounty_model::findOrfail($id);
     
      
         echo json_encode($centre);
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
                          'subcounty_name'=>'required',
                          'centres'=>'required|numeric',
                          'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $centre =education_csa_adulteducationcentresbysubcounty_model::find($request->id);
             $centre->county_id =$request->county_name;
            $centre->sub_county_id=$request->subcounty_name;
            $centre->centres=$request->centres;         
            $centre->year=$request->year;
            $centre->save();          
             return response()->json($centre);
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
