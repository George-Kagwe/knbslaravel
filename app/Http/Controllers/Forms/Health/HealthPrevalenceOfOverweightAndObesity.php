<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthPrevalenceOfOverweightAndObesity_Model;
use View;

class HealthPrevalenceOfOverweightAndObesity extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'age_group'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric',
        'total'=>'required|numeric',
         'category'=>'required|alpha'
                              
                        
    ];
    public function index()
    {
        //
        $HealthPrevalenceOfOverweightAndObesity =HealthPrevalenceOfOverweightAndObesity_Model::all();
        
        return view('Forms.health.national.healthprevalenceofoverweightandobesity',['post' =>$HealthPrevalenceOfOverweightAndObesity]);
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
       'age_group'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric',
        'total'=>'required|numeric',
         'category'=>'required|alpha'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $prevalence = new HealthPrevalenceOfOverweightAndObesity_Model();
            $prevalence->age_group =$request->age_group;
            $prevalence->women=$request->women;
            $prevalence->men=$request->men;
            $prevalence->total=$request->total;
            $prevalence->category=$request->category;
            $prevalence->save();
             return response()->json($prevalence);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($prevalence_id)
    {
        //
         $prevalence = HealthPrevalenceOfOverweightAndObesity_Model::findOrfail($prevalence_id);

  
          echo json_encode($prevalence);
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
   'age_group'=>'required|alpha_dash',
      'women'=>'required|numeric',
       'men'=>'required|numeric',
        'total'=>'required|numeric',
         'category'=>'required|alpha'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $prevalence=HealthPrevalenceOfOverweightAndObesity_Model::find($request->id);
            $prevalence->age_group=$request->age_group;
            $prevalence->women=$request->women;
            $prevalence->men=$request->men;
              $prevalence->total=$request->total;
                $prevalence->category=$request->category;
            $prevalence->save();
             return response()->json($prevalence);
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
