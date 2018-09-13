<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthRegisteredMedicalPersonnel_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthRegisteredMedicalPersonnel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [ 'county_id'=>'required',
                          'medical_personnel_id'=>'required',
                          'no_of_personnel'=>'required|numeric',
                            'gender'=>'required|alpha',
                          'year'=>'required',

                         ];
    public function index()
    {
        //
         $data = DB::table('health_registeredmedicalpersonnel')
               ->join('health_counties', 'health_registeredmedicalpersonnel.county_id', '=', 'health_counties.county_id')
                ->join('health_registeredmedicalpersonnel_ids', 'health_registeredmedicalpersonnel.medical_personnel_id', '=', 'health_registeredmedicalpersonnel_ids.medical_personnel_id')
                ->orderBy('registered_medical_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

                $medicalpersonnel = DB::table('health_registeredmedicalpersonnel_ids')
                          
                          ->get();

                          return view('Forms.Health.County.healthregisteredmedicalpersonnel',
                 
                   ['post' =>$data,'counties' =>$counties,
                   'medicalpersonnel' =>$medicalpersonnel]);

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
                         'county_id'=>'required',
                          'medical_personnel_id'=>'required',
                          'no_of_personnel'=>'required|numeric',
                            'gender'=>'required|alpha',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $medical = new HealthRegisteredMedicalPersonnel_Model();
            $medical->county_id =$request->county_id;
            $medical->medical_personnel_id=$request->medical_personnel_id;
            $medical->no_of_personnel=$request->no_of_personnel; 
            $medical->gender=$request->gender;         
            $medical->year=$request->year;
            $medical->save();
             return response()->json($medical);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($registered_medical_id)
    {
        //
        $medical = HealthRegisteredMedicalPersonnel_Model::findOrfail($registered_medical_id);
     
      
         echo json_encode($medical);
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
                         'county_id'=>'required',
                          'medical_personnel_id'=>'required',
                          'no_of_personnel'=>'required|numeric',
                            'gender'=>'required|alpha',
                          'year'=>'required',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $medical =HealthRegisteredMedicalPersonnel_Model::find($request->id);
          $medical->county_id =$request->county_id;
            $medical->medical_personnel_id=$request->medical_personnel_id;
            $medical->no_of_personnel=$request->no_of_personnel; 
            $medical->gender=$request->gender;         
            $medical->year=$request->year;
            $medical->save();          
             return response()->json($medical);
           echo json_encode(array("status" => TRUE));

        }  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function get_medicalpersonnel($id)
    {
         $medicalpersonnel = DB::table('health_registeredmedicalpersonnel_ids')
               ->where('county_id',  '=', $id)               
                ->get();

        return  json_encode($medicalpersonnel);
    }
}
