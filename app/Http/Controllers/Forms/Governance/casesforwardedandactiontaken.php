<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\casesforwardedandactiontaken_model;
use View;



class casesforwardedandactiontaken extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'action_taken'=>'required|alpha',
      'no_of_recommendations'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $casesforwardedandactiontaken =casesforwardedandactiontaken_model::all();
        
        return view('forms.governance.national.casesforwardedandactiontaken',['post' =>$casesforwardedandactiontaken]);
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
        'action_taken'=>'required|alpha',
        'no_of_recommendations'=>'required|numeric',
        'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $case = new casesforwardedandactiontaken_model();
            $case->action_taken =$request->action_taken;
            $case->no_of_recommendations=$request->no_of_recommendations;
            $case->year=$request->year;
            $case->save();
             return response()->json($case);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($action_id)
    {
       
         
         $case = casesforwardedandactiontaken_model::findOrfail($action_id);

  
          echo json_encode($case);     
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
        'action_taken'=>'required|alpha',
        'no_of_recommendations'=>'required|numeric',
        'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $case =casesforwardedandactiontaken_model::find($request->id);
            $case->action_taken =$request->action_taken;
            $case->no_of_recommendations=$request->no_of_recommendations;
   
            $case->year=$request->year;
            $case->save();
             return response()->json($case);
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
