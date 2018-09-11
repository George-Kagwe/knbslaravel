<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthNhifMembers_Model;
use View;

class HealthNhifMembers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        protected $rules =
    [
      'formal_sector'=>'required|numeric',
      'informal_sector'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
          $HealthNhifMembers =HealthNhifMembers_Model::all();
        
        return view('Forms.health.national.healthnhifmembers',['post' =>$HealthNhifMembers]);
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
        'formal_sector'=>'required|numeric',
      'informal_sector'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $nhifMember = new HealthNhifMembers_Model();
            $nhifMember->formal_sector =$request->formal_sector;
            $nhifMember->informal_sector=$request->informal_sector;
            $nhifMember->total=$request->total;
            $nhifMember->year=$request->year;
            $nhifMember->save();
             return response()->json($nhifMember);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nhif_member_id)
    {
        //
          $nhifMember = HealthNhifMembers_Model::findOrfail($nhif_member_id);

  
          echo json_encode($nhifMember);
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
         'formal_sector'=>'required|numeric',
      'informal_sector'=>'required|numeric',
      'total'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $nhifMember =HealthNhifMembers_Model::find($request->id);
            $nhifMember->formal_sector =$request->formal_sector;
            $nhifMember->informal_sector=$request->informal_sector;
            $nhifMember->total=$request->total;
            $nhifMember->year=$request->year;
            $nhifMember->save();
             return response()->json($nhifMember);
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
