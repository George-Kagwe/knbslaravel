<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_csa_primaryschoolenrollmentbyclasssexandsubcounty_model;
use View;
use Illuminate\Support\Facades\DB;
class education_csa_primaryschoolenrollmentbyclasssexandsubcounty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                          'subcounty_name'=>'required',
                           
                        'class_1'=>'required|numeric',
                        'class_2'=>'required|numeric',
                        'class_3'=>'required|numeric',
                        'class_4'=>'required|numeric',
                        'class_5'=>'required|numeric',
                        'class_6'=>'required|numeric',
                        'class_7'=>'required|numeric',
                        'class_8'=>'required|numeric',
                        'gender'=>'required|alpha',
                        'year'=>'required'

                         ];
    public function index()
    {
        $data = DB::table('education_csa_primaryschoolenrollmentbyclasssexandsubcounty')
               ->join('health_counties', 'education_csa_primaryschoolenrollmentbyclasssexandsubcounty.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'education_csa_primaryschoolenrollmentbyclasssexandsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('primary_enrollment_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')
                          
                          ->get();

      
        return view('Forms.education.county.education_csa_primaryschoolenrollmentbyclasssexandsubcounty', ['post' =>$data,'counties' =>$counties,         'subcounty' =>$subcounty]);
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
                           
                        'class_1'=>'required|numeric',
                        'class_2'=>'required|numeric',
                        'class_3'=>'required|numeric',
                        'class_4'=>'required|numeric',
                        'class_5'=>'required|numeric',
                        'class_6'=>'required|numeric',
                        'class_7'=>'required|numeric',
                        'class_8'=>'required|numeric',
                        'gender'=>'required|alpha',
                        'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $primary = new education_csa_primaryschoolenrollmentbyclasssexandsubcounty_model();
            $primary->county_id =$request->county_name;
            $primary->sub_county_id=$request->subcounty_name;
            $primary->class_1=$request->class_1;
            $primary->class_2=$request->class_2;    
            $primary->class_3=$request->class_3;
            $primary->class_4=$request->class_4;
            $primary->class_5=$request->class_5;
            $primary->class_6=$request->class_6;
            $primary->class_7=$request->class_7;
            $primary->class_8=$request->class_8;
            $primary->gender=$request->gender;       
            $primary->year=$request->year;
            $primary->save();
             return response()->json($primary);
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
      
          $primary = education_csa_primaryschoolenrollmentbyclasssexandsubcounty_model::findOrfail($id);
     
      
         echo json_encode($primary);
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
                           
                        'class_1'=>'required|numeric',
                        'class_2'=>'required|numeric',
                        'class_3'=>'required|numeric',
                        'class_4'=>'required|numeric',
                        'class_5'=>'required|numeric',
                        'class_6'=>'required|numeric',
                        'class_7'=>'required|numeric',
                        'class_8'=>'required|numeric',
                        'gender'=>'required|alpha',
                        'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $primary =education_csa_primaryschoolenrollmentbyclasssexandsubcounty_model::find($request->id);
            $primary->county_id =$request->county_name;
            $primary->sub_county_id=$request->subcounty_name;
            $primary->class_1=$request->class_1;
            $primary->class_2=$request->class_2;    
            $primary->class_3=$request->class_3;
            $primary->class_4=$request->class_4;
            $primary->class_5=$request->class_5;
            $primary->class_6=$request->class_6;
            $primary->class_7=$request->class_7;
            $primary->class_8=$request->class_8;
            $primary->gender=$request->gender;       
            $primary->year=$request->year;
            $primary->save();          
             return response()->json($primary);
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