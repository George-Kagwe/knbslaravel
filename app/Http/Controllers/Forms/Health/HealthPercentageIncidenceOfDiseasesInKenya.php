<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthPercentageIncidenceOfDiseasesInKenya_Model;
use View;

class HealthPercentageIncidenceOfDiseasesInKenya extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      protected $rules =
    [
      'percentage_incidence'=>'required|numeric',
      'disease'=>'required|alpha',
      
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
          $HealthPercentageIncidenceOfDiseasesInKenya =HealthPercentageIncidenceOfDiseasesInKenya_Model::all();
        
        return view('Forms.health.national.healthpercentageincidenceofdiseasesinkenya',['post' =>$HealthPercentageIncidenceOfDiseasesInKenya]);
       
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
        'percentage_incidence'=>'required|numeric',
      'disease'=>'required|alpha',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $incidenceN = new HealthPercentageIncidenceOfDiseasesInKenya_Model();
            $incidenceN->percentage_incidence =$request->percentage_incidence;
            $incidenceN->disease=$request->disease;
            
            $incidenceN->year=$request->year;
            $incidenceN->save();
             return response()->json($incidenceN);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($incidence_id)
    {
        //
         $incidenceN = HealthPercentageIncidenceOfDiseasesInKenya_Model::findOrfail($incidence_id);

  
          echo json_encode($incidenceN);
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
         'percentage_incidence'=>'required|numeric',
      'disease'=>'required|alpha',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $incidenceN=HealthPercentageIncidenceOfDiseasesInKenya_Model::find($request->id);
            $incidenceN->percentage_incidence=$request->percentage_incidence;
            $incidenceN->disease=$request->disease;
            $incidenceN->year=$request->year;
            $incidenceN->save();
             return response()->json($incidenceN);
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
