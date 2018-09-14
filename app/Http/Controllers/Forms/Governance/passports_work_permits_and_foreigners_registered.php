<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\passports_work_permits_and_foreigners_registered_model;
use View;

class passports_work_permits_and_foreigners_registered extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [

      'passport_issued'=>'required|numeric',
  
      'foreign_nat_reg'=>'required|numeric',
      'work_permit_issued'=>'required|numeric',
      'work_permit_ren'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
         $passports_work_permits_and_foreigners_registered =passports_work_permits_and_foreigners_registered_model::all();
        
        return view('forms.governance.national.passports_work_permits_and_foreigners_registered',['post' =>
            $passports_work_permits_and_foreigners_registered]);
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
    

       $validator = \Validator::make($request->all(), [
       'passport_issued'=>'required|numeric',
  
      'foreign_nat_reg'=>'required|numeric',
      'work_permit_issued'=>'required|numeric',
      'work_permit_ren'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $passports = new passports_work_permits_and_foreigners_registered_model();
            $passports->passport_issued =$request->passport_issued;
            $passports->foreign_nat_reg=$request->foreign_nat_reg;
            $passports->work_permit_issued=$request->work_permit_issued;
            $passports->work_permit_ren =$request->work_permit_ren;
            $passports->year=$request->year;
            $passports->save();
             return response()->json($passports);
           echo json_encode(array("status" => TRUE));

        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($passports_permits_registered_foreigners_id)
    {
        

        $passports = passports_work_permits_and_foreigners_registered_model::findOrfail($passports_permits_registered_foreigners_id);
        echo json_encode($passports);   


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
     $validator = \Validator::make($request->all(), [
   'passport_issued'=>'required|numeric',
  
      'foreign_nat_reg'=>'required|numeric',
      'work_permit_issued'=>'required|numeric',
      'work_permit_ren'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $passports =passports_work_permits_and_foreigners_registered_model::find($request->id);
            $passports->passport_issued =$request->passport_issued;
         
            $passports->foreign_nat_reg=$request->foreign_nat_reg;
            $passports->work_permit_issued=$request->work_permit_issued;
            $passports->work_permit_ren =$request->work_permit_ren;
            $passports->year=$request->year;
            $passports->save();
             return response()->json($passports);
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
