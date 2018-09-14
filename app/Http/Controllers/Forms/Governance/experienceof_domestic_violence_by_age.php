<?php

namespace App\Http\Controllers\Forms\Governance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\experienceof_domestic_violence_by_age_model;
use View;
class experienceof_domestic_violence_by_age extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


       protected $rules =
    [
      'age'=>'required|numeric',
      'percentage_experienced_physical_violence'=>'required|numeric',
      'percentage_experienced_sexual_violence'=>'required|numeric',
      'percentage_experienced_physical_and_sexual_violence'=>'required|numeric',
      'gender'=>'required|alpha',

                        
    ];
    public function index()
    {
       $experienceof_domestic_violence_by_age =experienceof_domestic_violence_by_age_model::all();
        
        return view('forms.governance.national.experienceof_domestic_violence_by_age',['post' =>$experienceof_domestic_violence_by_age]);
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
       'age'=>'required|numeric',
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
            $domestic = new experienceof_domestic_violence_by_age_model();
            $domestic->age =$request->age;
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
                
         $domestic = experienceof_domestic_violence_by_age_model::findOrfail($woman_id);

  
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
       'age'=>'required|numeric',
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
         
            $domestic =experienceof_domestic_violence_by_age_model::find($request->id);
            $domestic->age =$request->age;
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
