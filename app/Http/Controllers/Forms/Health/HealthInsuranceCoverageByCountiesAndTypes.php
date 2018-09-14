<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthInsuranceCoverageByCountiesAndTypes_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthInsuranceCoverageByCountiesAndTypes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'insured' =>'required|numeric',
                             'nhif' =>'required|numeric',
                                'cbhi' =>'required|numeric',
                                'private' =>'required|numeric',
                                 'others' =>'required|numeric'
                          
    ];
    public function index()
    {
        //
        $data = DB::table('health_insurance_coverage_by_counties_and_types')
               ->join('health_counties', 'health_insurance_coverage_by_counties_and_types.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('insurance_coverage_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthinsurancecoveragebycountiesandtypes',
                 
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
                          'insured' =>'required|numeric',
                             'nhif' =>'required|numeric',
                                'cbhi' =>'required|numeric',
                                'private' =>'required|numeric',
                                 'others' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $insuranceN = new HealthInsuranceCoverageByCountiesAndTypes_Model();
            $insuranceN->county_id =$request->county_id;
            $insuranceN->insured=$request->insured;
            $insuranceN->nhif=$request->nhif;
            $insuranceN->cbhi=$request->cbhi;
              $insuranceN->private=$request->private;
              $insuranceN->others=$request->others;
            $insuranceN->save();
             return response()->json($insuranceN);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($insurance_coverage_id)
    {
        //
        $insuranceN = HealthInsuranceCoverageByCountiesAndTypes_Model::findOrfail($insurance_coverage_id);

  
          echo json_encode($insuranceN);  
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
                          'insured' =>'required|numeric',
                             'nhif' =>'required|numeric',
                                'cbhi' =>'required|numeric',
                                'private' =>'required|numeric',
                                 'others' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $insuranceN =HealthInsuranceCoverageByCountiesAndTypes_Model::find($request->id);
  $insuranceN->county_id =$request->county_id;
            $insuranceN->insured=$request->insured;
            $insuranceN->nhif=$request->nhif;
            $insuranceN->cbhi=$request->cbhi;
              $insuranceN->private=$request->private;
              $insuranceN->others=$request->others;
            $insuranceN->save();
             return response()->json($insuranceN);
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
