<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Education\education_csa_studentenrolmentinyouthpolytechnics_model;
use View;
use Illuminate\Support\Facades\DB;

class education_csa_studentenrolmentinyouthpolytechnics extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'institution_name'=>'required|alpha',
                          'category'=>'required|alpha',
                           'male'=>'required|numeric',
                           'female'=>'required|numeric',
                           'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('education_csa_studentenrolmentinyouthpolytechnics')
               ->join('health_counties', 'education_csa_studentenrolmentinyouthpolytechnics.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'education_csa_studentenrolmentinyouthpolytechnics.sub_county_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('youth_poly_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')->get();

      
        return view('forms.Education.county.education_csa_studentenrolmentinyouthpolytechnics',
                 
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
                           'institution_name'=>'required|alpha',
                           'category'=>'required|alpha',
                           'male'=>'required|numeric',
                           'female'=>'required|numeric',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $youth = new education_csa_studentenrolmentinyouthpolytechnics_model();
            $youth->county_id=$request->county_name;
            $youth->sub_county_id=$request->subcounty_name;
            $youth->institution_name=$request->institution_name;   
            $youth->category=$request->category;  
            $youth->male=$request->male;  
            $youth->female=$request->female;    
            $youth->year=$request->year;
            $youth->save();
             return response()->json($youth);
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
      
          $youth = education_csa_studentenrolmentinyouthpolytechnics_model::findOrfail($id);
     
      
         echo json_encode($youth);
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
                           'institution_name'=>'required|alpha',
                           'category'=>'required|alpha',
                           'male'=>'required|numeric',
                           'female'=>'required|numeric',
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
                 $youth =education_csa_studentenrolmentinyouthpolytechnics_model::find($request->id);
            $youth->county_id=$request->county_name;
            $youth->sub_county_id=$request->subcounty_name;
            $youth->institution_name=$request->institution_name;   
            $youth->category=$request->category;  
            $youth->male=$request->male;    
            $youth->female=$request->female;   
            $youth->year=$request->year;
            $youth->save();
             return response()->json($youth);
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
