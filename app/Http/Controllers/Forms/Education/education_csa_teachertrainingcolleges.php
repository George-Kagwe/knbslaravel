<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Education\education_csa_teachertrainingcolleges_model;
use View;
use Illuminate\Support\Facades\DB;

class education_csa_teachertrainingcolleges extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                  
                           'pre_primary'=>'required|numeric',
                           'category'=>'required|alpha',
                           'primary_sc'=>'required|numeric',
                           'secondary'=>'required|numeric',
                           'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('education_csa_teachertrainingcolleges')
               ->join('health_counties', 'education_csa_teachertrainingcolleges.county_id', '=', 'health_counties.county_id')->get();
 

                $counties = DB::table('health_counties')->get();

        
      
        return view('forms.Education.county.education_csa_teachertrainingcolleges',
                 
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
                  
                           'pre_primary'=>'required|numeric',
                           'category'=>'required|alpha',
                           'primary_sc'=>'required|numeric',
                           'secondary'=>'required|numeric',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $college = new education_csa_teachertrainingcolleges_model();
            $college->county_id=$request->county_name;
          
            $college->pre_primary=$request->pre_primary;   
            $college->category=$request->category;  
            $college->primary_sc=$request->primary_sc;  
            $college->secondary=$request->secondary;    
            $college->year=$request->year;
            $college->save();
             return response()->json($college);
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
      
          $college = education_csa_teachertrainingcolleges_model::findOrfail($id);
     
      
         echo json_encode($college);
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
                  
                           'pre_primary'=>'required|numeric',
                           'category'=>'required|alpha',
                           'primary_sc'=>'required|numeric',
                           'secondary'=>'required|numeric',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
            $college =education_csa_teachertrainingcolleges_model::find($request->id);
            $college->county_id=$request->county_name;
          
            $college->pre_primary=$request->pre_primary;   
            $college->category=$request->category;  
            $college->primary_sc=$request->primary_sc;    
            $college->secondary=$request->secondary;   
            $college->year=$request->year;
            $college->save();
             return response()->json($college);
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
