<?php

namespace App\Http\Controllers\Forms\Labour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Labour\LabourAverageWageEarningsPerEmployeePublicSector_Model;
use View;

class LabourAverageWageEarningsPerEmployeePublicSector extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'public_sector'=>'required|alpha_dash',
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
        $LabourAverageWageEarningsPerEmployeePublicSector =LabourAverageWageEarningsPerEmployeePublicSector_Model::all();
        
        return view('Forms.labour.national.labouraveragewageearningsperemployeepublicsector',['post' =>$LabourAverageWageEarningsPerEmployeePublicSector]);
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
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $wageN = new LabourAverageWageEarningsPerEmployeePublicSector_Model();
            $wageN->public_sector =$request->public_sector;
            $wageN->wage_earnings=$request->wage_earnings;
            
            $wageN->year=$request->year;
            $wageN->save();
             return response()->json($wageN);
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
         $wageN = LabourAverageWageEarningsPerEmployeePublicSector_Model::findOrfail($wage_earnings_id);

  
          echo json_encode($wageN);
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
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $wageN=LabourAverageWageEarningsPerEmployeePublicSector_Model::find($request->id);
            $wageN->public_sector=$request->public_sector;
            $wageN->wage_earnings=$request->wage_earnings;
            
            $wageN->year=$request->year;
            $wageN->save();
             return response()->json($wageN);
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
