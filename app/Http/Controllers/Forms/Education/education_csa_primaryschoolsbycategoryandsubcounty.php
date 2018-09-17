<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Education\education_csa_primaryschoolsbycategoryandsubcounty_model;
use View;
use Illuminate\Support\Facades\DB;
class education_csa_primaryschoolsbycategoryandsubcounty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                          'subcounty_name'=>'required',
                           'no_of_schools'=>'required|numeric',
                            'category'=>'required|alpha',
                          'year'=>'required'

                         ];
    public function index()
    {
        $data = DB::table('education_csa_primaryschoolsbycategoryandsubcounty')
               ->join('health_counties', 'education_csa_primaryschoolsbycategoryandsubcounty.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'education_csa_primaryschoolsbycategoryandsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('primary_schools_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')
                          
                          ->get();

      
        return view('Forms.education.county.education_csa_primaryschoolsbycategoryandsubcounty', ['post' =>$data,'counties' =>$counties,         'subcounty' =>$subcounty]);
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
                           'no_of_schools'=>'required|numeric',
                            'category'=>'required|alpha',
                            'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $category = new education_csa_primaryschoolsbycategoryandsubcounty_model();
            $category->county_id =$request->county_name;
            $category->sub_county_id=$request->subcounty_name;
            $category->no_of_schools=$request->no_of_schools;    
            $category->category=$request->category;       
            $category->year=$request->year;
            $category->save();
             return response()->json($category);
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
      
          $category = education_csa_primaryschoolsbycategoryandsubcounty_model::findOrfail($id);
     
      
         echo json_encode($category);
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
                           'no_of_schools'=>'required|numeric',
                            'category'=>'required|alpha',
                          'year'=>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $category =education_csa_primaryschoolsbycategoryandsubcounty_model::find($request->id);
            $category->county_id =$request->county_name;
            $category->sub_county_id=$request->subcounty_name;
            $category->no_of_schools=$request->no_of_schools;   
            $category->category=$request->category;         
            $category->year=$request->year;
            $category->save();          
             return response()->json($category);
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