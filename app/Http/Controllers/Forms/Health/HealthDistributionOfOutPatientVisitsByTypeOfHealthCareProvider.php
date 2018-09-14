<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
              protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'public' =>'required|numeric',
                             'private' =>'required|numeric',
                                'faith_based' =>'required|numeric',
                                'others' =>'required|numeric'
                          
    ];
    public function index()
    {
        //


     $data = DB::table('health_distributionofoutpatientvisitsbytypeofhealthcareprovider')
               ->join('health_counties', 'health_distributionofoutpatientvisitsbytypeofhealthcareprovider.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('health_facility_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthdistributionofoutpatientvisitsbytypeofhealthcareprovider',
                 
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
                          'public' =>'required|numeric',
                             'private' =>'required|numeric',
                                'faith_based' =>'required|numeric',
                                'others' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $privateN = new HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider_Model();
            $privateN->county_id =$request->county_id;
            $privateN->public=$request->public;
            $privateN->private=$request->private;
            $privateN->faith_based=$request->faith_based;
              $privateN->others=$request->others;
            $privateN->save();
             return response()->json($privateN);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($health_facility_id)
    {
        //
         $privateN = HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider_Model::findOrfail($health_facility_id);

  
          echo json_encode($privateN);  
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
                          'public' =>'required|numeric',
                             'private' =>'required|numeric',
                                'faith_based' =>'required|numeric',
                                'others' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $privateN =HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider_Model::find($request->id);
   $privateN->county_id =$request->county_id;
            $privateN->public=$request->public;
            $privateN->private=$request->private;
            $privateN->faith_based=$request->faith_based;
              $privateN->others=$request->others;
            $privateN->save();
             return response()->json($privateN);
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
