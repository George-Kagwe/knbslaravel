<?php

namespace App\Http\Controllers\Forms\Labour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Labour\LabourWageEmploymentByIndustryAndSex_Model;
use View;

class LabourWageEmploymentByIndustryAndSex extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'industry'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
       'gender'=>'required|alpha',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $LabourWageEmploymentByIndustryAndSex =LabourWageEmploymentByIndustryAndSex_Model::all();
        
        return view('Forms.labour.national.labourwageemploymentbyindustryandsex',['post' =>$LabourWageEmploymentByIndustryAndSex]);
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
        'industry'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
       'gender'=>'required|alpha',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $wagenew = new LabourWageEmploymentByIndustryAndSex_Model();
            $wagenew->industry =$request->industry;
            $wagenew->wage_employment=$request->wage_employment;
            $wagenew->gender=$request->gender;
            $wagenew->year=$request->year;
            $wagenew->save();
             return response()->json($wagenew);
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
        $wagenew = LabourWageEmploymentByIndustryAndSex_Model::findOrfail($wage_employment_id);

  
          echo json_encode($wagenew);
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
         'industry'=>'required|alpha_dash',
      'wage_employment'=>'required|numeric',
      'gender'=>'required|alpha' ,
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $wagenew=LabourWageEmploymentByIndustryAndSex_Model::find($request->id);
            $wagenew->industry=$request->industry;
            $wagenew->wage_employment=$request->wage_employment;
            $wagenew->gender=$request->gender;
            $wagenew->year=$request->year;
            $wagenew->save();
             return response()->json($wagenew);
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
