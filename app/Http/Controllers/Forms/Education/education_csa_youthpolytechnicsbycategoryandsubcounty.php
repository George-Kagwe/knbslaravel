<?php

namespace App\Http\Controllers\Forms\Education;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\Education\education_csa_youthpolytechnicsbycategoryandsubcounty_model;
use View;
use Illuminate\Support\Facades\DB;

class education_csa_youthpolytechnicsbycategoryandsubcounty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [ 'county_name'=>'required',
                          'subcounty_name'=>'required',
                          'public'=>'required|alpha',
                     
                           'private'=>'required|numeric',
                       
                           'year'=>'required',

                         ];
    public function index()
    {
        $data = DB::table('education_csa_youthpolytechnicsbycategoryandsubcounty')
               ->join('health_counties', 'education_csa_youthpolytechnicsbycategoryandsubcounty.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'education_csa_youthpolytechnicsbycategoryandsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('youth_poly_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')->get();

      
        return view('forms.Education.county.education_csa_youthpolytechnicsbycategoryandsubcounty',
                 
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
                           'public'=>'required|alpha',
                      
                           'private'=>'required|numeric',
                       
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $poly = new education_csa_youthpolytechnicsbycategoryandsubcounty_model();
            $poly->county_id=$request->county_name;
            $poly->sub_county_id=$request->subcounty_name;
            $poly->public=$request->public;   
           
            $poly->private=$request->private;  
         
            $poly->year=$request->year;
            $poly->save();
             return response()->json($poly);
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
      
          $poly = education_csa_youthpolytechnicsbycategoryandsubcounty_model::findOrfail($id);
     
      
         echo json_encode($poly);
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
                           'public'=>'required|alpha',
                      
                           'private'=>'required|numeric',
                       
                           'year'=>'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
                 $poly =education_csa_youthpolytechnicsbycategoryandsubcounty_model::find($request->id);
            $poly->county_id=$request->county_name;
            $poly->sub_county_id=$request->subcounty_name;
            $poly->public=$request->public;   
           
            $poly->private=$request->private;    
        
            $poly->year=$request->year;
            $poly->save();
             return response()->json($poly);
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
