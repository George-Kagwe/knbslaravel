<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthNhifResources_Model;
use View;

class HealthNhifResources extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       protected $rules =
    [
      'benefits'=>'required|numeric',
      'contributions_net_benefits'=>'required|numeric',
      'receipts'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
        $HealthNhifResources =HealthNhifResources_Model::all();
        
        return view('Forms.health.national.healthnhifresources',['post' =>$HealthNhifResources]);
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
        'benefits'=>'required|numeric',
      'contributions_net_benefits'=>'required|numeric',
      'receipts'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $nhifResource = new HealthNhifResources_Model();
            $nhifResource->benefits =$request->benefits;
            $nhifResource->contributions_net_benefits=$request->contributions_net_benefits;
            $nhifResource->receipts=$request->receipts;
            $nhifResource->year=$request->year;
            $nhifResource->save();
             return response()->json($nhifResource);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($resource_id)
    {
        //

         $nhifResource = HealthNhifResources_Model::findOrfail($resource_id);

  
          echo json_encode($nhifResource);  
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
         'benefits'=>'required|numeric',
      'contributions_net_benefits'=>'required|numeric',
      'receipts'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $nhifResource =HealthNhifResources_Model::find($request->id);
            $nhifResource->benefits =$request->benefits;
            $nhifResource->contributions_net_benefits=$request->contributions_net_benefits;
            $nhifResource->receipts=$request->receipts;
            $nhifResource->year=$request->year;
            $nhifResource->save();
             return response()->json($nhifResource);
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
