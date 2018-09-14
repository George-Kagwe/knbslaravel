<?php

namespace App\Http\Controllers\Forms\Governance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\Experienceof_Domestic_Violence_By_Marital_Success_model;
use View;
class Experienceof_Domestic_Violence_By_Marital_Success extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


       protected $rules =
    [
      'marital_status'=>'required|alpha_dash',
      'percentage_experienced_physical_violence'=>'required|numeric',
      'percentage_experienced_sexual_violence'=>'required|numeric',
      'percentage_experienced_physical_and_sexual_violence'=>'required|numeric',
      'gender'=>'required|alpha',

                        
    ];
    public function index()
    {
       $Experienceof_Domestic_Violence_By_Marital_Success =Experienceof_Domestic_Violence_By_Marital_Success_model::all();
        
        return view('forms.governance.national.Experienceof_Domestic_Violence_By_Marital_Success',['post' =>$Experienceof_Domestic_Violence_By_Marital_Success]);
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
       'marital_status'=>'required|alpha_dash',
      'percentage_experienced_physical_violence'=>'required|numeric',
      'percentage_experienced_sexual_violence'=>'required|numeric',
      'percentage_experienced_physical_and_sexual_violence'=>'required|numeric',
      'gender'=>'required|alpha',
 

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $domestic = new Experienceof_Domestic_Violence_By_Marital_Success_model();
            $domestic->marital_status =$request->marital_status;
            $domestic->percentage_experienced_physical_violence =$request->percentage_experienced_physical_violence;
            $domestic->percentage_experienced_sexual_violence=$request->percentage_experienced_sexual_violence;
            $domestic->percentage_experienced_physical_and_sexual_violence=$request->percentage_experienced_physical_and_sexual_violence;
            $domestic->gender=$request->gender;
    
            
            $domestic->save();
             return response()->json($domestic);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($woman_id)
    {
                
         $domestic = Experienceof_Domestic_Violence_By_Marital_Success_model::findOrfail($woman_id);

  
          echo json_encode($domestic);     
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
       'marital_status'=>'required|alpha',
      'percentage_experienced_physical_violence'=>'required|numeric',
      'percentage_experienced_sexual_violence'=>'required|numeric',
      'percentage_experienced_physical_and_sexual_violence'=>'required|numeric',
      'gender'=>'required|alpha',
   
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $domestic =Experienceof_Domestic_Violence_By_Marital_Success_model::find($request->id);
            $domestic->marital_status =$request->marital_status;
            $domestic->percentage_experienced_physical_violence =$request->percentage_experienced_physical_violence;
            $domestic->percentage_experienced_sexual_violence=$request->percentage_experienced_sexual_violence;
            $domestic->percentage_experienced_physical_and_sexual_violence=$request->percentage_experienced_physical_and_sexual_violence;
            $domestic->gender=$request->gender;
          
            $domestic->save();
             return response()->json($domestic);
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
