<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\governance_offence_by_sex_and_command_stations_model;
use View;
use Illuminate\Support\Facades\DB;

class governance_offence_by_sex_and_command_stations extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [

      'county_id'=>'required|numeric',
  
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      
      'year'=>'required|numeric'
  ];
    public function index()
    {
        //
         $data = DB::table('governance_offence_by_sex_and_command_stations')
               ->join('health_counties', 'governance_offence_by_sex_and_command_stations.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('offence_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.Governance.county.governanceoffencebysexandcommandstations',
                 
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
  
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      
      'year'=>'required|numeric'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $offenceN = new governance_offence_by_sex_and_command_stations_model();
            $offenceN->county_id =$request->county_id;
            $offenceN->male=$request->male;
             $offenceN->female=$request->female;
              
               $offenceN->year=$request->year;
            $offenceN->save();
             return response()->json($offenceN);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($offence_id)
    {
        //
        $offenceN = governance_offence_by_sex_and_command_stations_model::findOrfail($offence_id);

  
          echo json_encode($offenceN);  
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
  
      'male'=>'required|numeric',
      'female'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $offenceN =governance_offence_by_sex_and_command_stations_model::find($request->id);
    $offenceN->county_id =$request->county_id;
            $offenceN->male=$request->male;
             $offenceN->female=$request->female;
              
               $offenceN->year=$request->year;
            $offenceN->save();
             return response()->json($offenceN);
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
