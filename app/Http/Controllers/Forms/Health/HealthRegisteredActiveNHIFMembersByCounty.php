<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthRegisteredActiveNHIFMembersByCounty_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthRegisteredActiveNHIFMembersByCounty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'formal' =>'required|numeric',
                          'informal' =>'required|numeric',
                          'year' =>'required|numeric'

                      ];
    public function index()
    {
        //
        $data = DB::table('health_registered_active_nhif_members_by_county')
               ->join('health_counties', 'health_registered_active_nhif_members_by_county.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('member_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               
                          
                          

      
        return view('forms.health.county.healthregisteredactivenhifmembersbycounty',
                 
                   ['post' =>$data,'counties' =>$counties
                   ]);
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
       'county_id'=>'required|numeric',
                          'formal' =>'required|numeric',
                          'informal' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $memberN = new HealthRegisteredActiveNHIFMembersByCounty_Model();
            $memberN->county_id =$request->county_id;
            $memberN->formal=$request->formal;
            $memberN->informal=$request->informal;
        
         
            $memberN->year=$request->year;
            $memberN->save();
             return response()->json($memberN);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($member_id)
    {
        //
         $memberN = HealthRegisteredActiveNHIFMembersByCounty_Model::findOrfail($member_id);

  
          echo json_encode($memberN);    
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
     
                           'county_id'=>'required|numeric',
                          'formal' =>'required|numeric',
                          'informal' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $memberN =HealthRegisteredActiveNHIFMembersByCounty_Model::find($request->id);
      $memberN->county_id =$request->county_id;
            $memberN->formal=$request->formal;
            $memberN->informal=$request->informal;
        
         
            $memberN->year=$request->year;
            $memberN->save();
             return response()->json($memberN);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
