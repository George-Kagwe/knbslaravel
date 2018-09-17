<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\governance_registered_voters_by_county_and_by_sex_model;
use View;
use Illuminate\Support\Facades\DB;

class governance_registered_voters_by_county_and_by_sex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 'county_name'=>'required|numeric',
                          'subcounty_name'=>'required|numeric',
                          'reg_voters'=>'required|numeric',
                          'gender'=>'required|alpha'

                         ];
    public function index()
    {
        //
       $data = DB::table('governance_registered_voters_by_county_and_by_sex')
               ->join('health_counties', 'governance_registered_voters_by_county_and_by_sex.county_id', '=', 'health_counties.county_id')
                ->join('health_subcounty', 'governance_registered_voters_by_county_and_by_sex.subcounty_id', '=', 'health_subcounty.subcounty_id')
                ->orderBy('voters_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $subcounty = DB::table('health_subcounty')
                          
                          ->get();

      
        return view('Forms.Governance.county.governanceregisteredvotersbycountyandbysex', ['post' =>$data,'counties' =>$counties,         'subcounty' =>$subcounty]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $validator = \Validator::make($request->all(), [
                          'county_name'=>'required|numeric',
                          'subcounty_name'=>'required|numeric',
                          'reg_voters'=>'required|numeric',
                          'gender'=>'required|alpha'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $votersN = new governance_registered_voters_by_county_and_by_sex_model();
            $votersN->county_id =$request->county_name;
            $votersN->subcounty_id=$request->subcounty_name;
            $votersN->reg_voters=$request->reg_voters;         
            $votersN->gender=$request->gender;
            $votersN->save();
             return response()->json($votersN);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($voters_id)
    {
        //
        $votersN = governance_registered_voters_by_county_and_by_sex_model::findOrfail($voters_id);
     
      
         echo json_encode($votersN);
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
        //
         $validator = \Validator::make($request->all(), [
                          'county_name'=>'required|numeric',
                          'subcounty_name'=>'required|numeric',
                          'reg_voters'=>'required|numeric',
                          'gender'=>'required|alpha'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $votersN =governance_registered_voters_by_county_and_by_sex_model::find($request->id);
             $votersN->county_id =$request->county_name;
            $votersN->subcounty_id=$request->subcounty_name;
            $votersN->reg_voters=$request->reg_voters;         
            $votersN->gender=$request->gender;
            $votersN->save();          
             return response()->json($votersN);
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
