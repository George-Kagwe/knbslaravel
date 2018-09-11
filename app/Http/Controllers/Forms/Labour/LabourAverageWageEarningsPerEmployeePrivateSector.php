<?php

namespace App\Http\Controllers\Forms\Labour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Labour\LabourAverageWageEarningsPerEmployeePrivateSector_Model;
use View;

class LabourAverageWageEarningsPerEmployeePrivateSector extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      protected $rules =
    [
      'private_sector'=>'required|alpha_dash',
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $LabourAverageWageEarningsPerEmployeePrivateSector =LabourAverageWageEarningsPerEmployeePrivateSector_Model::all();
        
        return view('Forms.labour.national.labouraveragewageearningsperemployeeprivatesector',['post' =>$LabourAverageWageEarningsPerEmployeePrivateSector]);
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
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $wage = new LabourAverageWageEarningsPerEmployeePrivateSector_Model();
            $wage->private_sector =$request->private_sector;
            $wage->wage_earnings=$request->wage_earnings;
            
            $wage->year=$request->year;
            $wage->save();
             return response()->json($wage);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($wage_earnings_id)
    {
        //
        $wage = LabourAverageWageEarningsPerEmployeePrivateSector_Model::findOrfail($wage_earnings_id);

  
          echo json_encode($wage);
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
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $wage=LabourAverageWageEarningsPerEmployeePrivateSector_Model::find($request->id);
            $wage->private_sector=$request->private_sector;
            $wage->wage_earnings=$request->wage_earnings;
            
            $wage->year=$request->year;
            $wage->save();
             return response()->json($wage);
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
