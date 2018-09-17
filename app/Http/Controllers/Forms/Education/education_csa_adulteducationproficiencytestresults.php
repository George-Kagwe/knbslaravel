<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Education\education_csa_adulteducationproficiencytestresults_model;
use View;
use Illuminate\Support\Facades\DB;

class education_csa_adulteducationproficiencytestresults extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'no_sat'=>'required|numeric',
                          'no_passed'=>'required|numeric',
                           'gender'=>'required|alpha',
                           'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('education_csa_adulteducationproficiencytestresults')
               ->join('health_counties', 'education_csa_adulteducationproficiencytestresults.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'education_csa_adulteducationproficiencytestresults.sub_county_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('adult_proficiency_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')->get();

      
        return view('forms.Education.county.education_csa_adulteducationproficiencytestresults',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'subcounty' =>$subcounty]);
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
                          'no_sat'=>'required|numeric',
                          'no_passed'=>'required|numeric',
                           'gender'=>'required|alpha',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $proficiency = new education_csa_adulteducationproficiencytestresults_model();
            $proficiency->county_id=$request->county_name;
            $proficiency->sub_county_id=$request->subcounty_name;
            $proficiency->no_sat=$request->no_sat;   
            $proficiency->no_passed=$request->no_passed;  
            $proficiency->gender=$request->gender;     
            $proficiency->year=$request->year;
            $proficiency->save();
             return response()->json($proficiency);
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
      
          $proficiency = education_csa_adulteducationproficiencytestresults_model::findOrfail($id);
     
      
         echo json_encode($proficiency);
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
                          'sub_county_id'=>'required',
                          'no_sat'=>'required|numeric',
                          'no_passed'=>'required|numeric',
                           'gender'=>'required|alpha',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
                 $proficiency =education_csa_adulteducationproficiencytestresults_model::find($request->id);
           $proficiency->county_id=$request->county_id;
            $proficiency->sub_county_id=$request->sub_county_id;
            $proficiency->no_sat=$request->no_sat;   
            $proficiency->no_passed=$request->no_passed;  
            $proficiency->gender=$request->gender;     
            $proficiency->year=$request->year;
            $proficiency->save();
             return response()->json($proficiency);
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
