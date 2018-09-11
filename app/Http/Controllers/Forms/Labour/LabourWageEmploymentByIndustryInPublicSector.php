<?php

namespace App\Http\Controllers\Forms\Labour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Labour\LabourWageEmploymentByIndustryInPublicSector_Model;
use View;


class LabourWageEmploymentByIndustryInPublicSector extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'public_sector'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
       
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
        $LabourWageEmploymentByIndustryInPublicSector =LabourWageEmploymentByIndustryInPublicSector_Model::all();
        
        return view('Forms.labour.national.labourwageemploymentbyindustryinpublicsector',['post' =>$LabourWageEmploymentByIndustryInPublicSector]);
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
        'public_sector'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
       
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $public= new LabourWageEmploymentByIndustryInPublicSector_Model();
            $public->public_sector =$request->public_sector;
            $public->wage_employment=$request->wage_employment;
            
            $public->year=$request->year;
            $public->save();
             return response()->json($public);
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
         $public = LabourWageEmploymentByIndustryInPublicSector_Model::findOrfail($wage_employment_id);

  
          echo json_encode($public);
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
         'public_sector'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $public=LabourWageEmploymentByIndustryInPublicSector_Model::find($request->id);
            $public->public_sector=$request->public_sector;
            $public->wage_employment=$request->wage_employment;
            
            $public->year=$request->year;
            $public->save();
             return response()->json($public);
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
