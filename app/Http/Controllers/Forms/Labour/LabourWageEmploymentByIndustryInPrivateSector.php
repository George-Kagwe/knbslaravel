<?php

namespace App\Http\Controllers\Forms\Labour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Labour\LabourWageEmploymentByIndustryInPrivateSector_Model;
use View;

class LabourWageEmploymentByIndustryInPrivateSector extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'private_sector'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
       
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $LabourWageEmploymentByIndustryInPrivateSector =LabourWageEmploymentByIndustryInPrivateSector_Model::all();
        
        return view('Forms.labour.national.labourwageemploymentbyindustryinprivatesector',['post' =>$LabourWageEmploymentByIndustryInPrivateSector]);
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
        'private_sector'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
       
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $private = new LabourWageEmploymentByIndustryInPrivateSector_Model();
            $private->private_sector =$request->private_sector;
            $private->wage_employment=$request->wage_employment;
            
            $private->year=$request->year;
            $private->save();
             return response()->json($private);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($wage_employment_id)
    {
        //
         $private = LabourWageEmploymentByIndustryInPrivateSector_Model::findOrfail($wage_employment_id);

  
          echo json_encode($private);
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
         'private_sector'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $private=LabourWageEmploymentByIndustryInPrivateSector_Model::find($request->id);
            $private->private_sector=$request->private_sector;
            $private->wage_employment=$request->wage_employment;
            
            $private->year=$request->year;
            $private->save();
             return response()->json($private);
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
