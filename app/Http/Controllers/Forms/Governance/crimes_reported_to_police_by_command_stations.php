<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\crimes_reported_to_police_by_command_stations_model;
use View;
use Illuminate\Support\Facades\DB;


class crimes_reported_to_police_by_command_stations extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'county_id'=>'required|numeric',
      'crimes'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        // $crimes_reported_to_police_by_command_stations =crimes_reported_to_police_by_command_stations_model::all();

           $data= DB::table('governance_crimes_reported_to_police_by_command_stations')->join('health_counties','governance_crimes_reported_to_police_by_command_stations.county_id', '=', 'health_counties.county_id')->get();
   
   
 
        
        return view('forms.governance.national.crimes_reported_to_police_by_command_stations',['post' =>$data]);
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
        
        $validator = \Validator::make($request->all(), [
        'county_id'=>'required|numeric',
        'crimes'=>'required|numeric',
        'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $crimes = new crimes_reported_to_police_by_command_stations_model();
            $crimes->county_id =$request->county_id;
            $crimes->crimes=$request->crimes;
            $crimes->year=$request->year;
            $crimes->save();
             return response()->json($crimes);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($crime_id)
    {
       
         
         $crimes = crimes_reported_to_police_by_command_stations_model::findOrfail($crime_id);

  
          echo json_encode($crimes);     
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
        'county_id'=>'required|numeric',
        'crimes'=>'required|numeric',
        'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $crimes =crimes_reported_to_police_by_command_stations_model::find($request->id);
            $crimes->county_id =$request->county_id;
            $crimes->crimes=$request->crimes;
   
            $crimes->year=$request->year;
            $crimes->save();
             return response()->json($crimes);
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
