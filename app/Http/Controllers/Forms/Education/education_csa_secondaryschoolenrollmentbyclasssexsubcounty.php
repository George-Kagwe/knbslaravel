<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_csa_secondaryschoolenrollmentbyclasssexsubcounty_model;
use View;
use Illuminate\Support\Facades\DB;
class education_csa_secondaryschoolenrollmentbyclasssexsubcounty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                          'subcounty_name'=>'required',
                           
                        'form_1'=>'required|numeric',
                        'form_2'=>'required|numeric',
                        'form_3'=>'required|numeric',
                        'form_4'=>'required|numeric',
                        'gender'=>'required|alpha',
                        'year'=>'required'

                         ];
    public function index()
    {
        $data = DB::table('education_csa_secondaryschoolenrollmentbyclasssexsubcounty')
               ->join('health_counties', 'education_csa_secondaryschoolenrollmentbyclasssexsubcounty.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'education_csa_secondaryschoolenrollmentbyclasssexsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('enrollment_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')
                          
                          ->get();

      
        return view('Forms.education.county.education_csa_secondaryschoolenrollmentbyclasssexsubcounty', ['post' =>$data,'counties' =>$counties,         'subcounty' =>$subcounty]);
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
                           
                        'form_1'=>'required|numeric',
                        'form_2'=>'required|numeric',
                        'form_3'=>'required|numeric',
                        'form_4'=>'required|numeric',
                        'gender'=>'required|alpha',
                        'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $secondary = new education_csa_secondaryschoolenrollmentbyclasssexsubcounty_model();
            $secondary->county_id =$request->county_name;
            $secondary->sub_county_id=$request->subcounty_name;
            $secondary->form_1=$request->form_1;
            $secondary->form_2=$request->form_2;    
            $secondary->form_3=$request->form_3;
            $secondary->form_4=$request->form_4;
  
            $secondary->gender=$request->gender;       
            $secondary->year=$request->year;
            $secondary->save();
             return response()->json($secondary);
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
      
          $secondary = education_csa_secondaryschoolenrollmentbyclasssexsubcounty_model::findOrfail($id);
     
      
         echo json_encode($secondary);
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
                           
                        'form_1'=>'required|numeric',
                        'form_2'=>'required|numeric',
                        'form_3'=>'required|numeric',
                        'form_4'=>'required|numeric',
                        'gender'=>'required|alpha',
                        'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $secondary =education_csa_secondaryschoolenrollmentbyclasssexsubcounty_model::find($request->id);
            $secondary->county_id =$request->county_name;
            $secondary->sub_county_id=$request->subcounty_name;
            $secondary->form_1=$request->form_1;
            $secondary->form_2=$request->form_2;    
            $secondary->form_3=$request->form_3;
            $secondary->form_4=$request->form_4;
            $secondary->gender=$request->gender;       
            $secondary->year=$request->year;
            $secondary->save();          
             return response()->json($secondary);
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