<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\caseshandledbyethicscommision_model;
use View;

class caseshandledbyethicscommision extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

         protected $rules =
    [
      ' action_taken'=>'required|alpha',
      'no_cases'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
     $caseshandledbyethicscommision =caseshandledbyethicscommision_model::all();
        
        return view('forms.governance.national.cases_handled_by_ethics_commision',['post' =>
            $caseshandledbyethicscommision]);
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
         'no_cases'=>'required|numeric',
          'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $ecases = new caseshandledbyethicscommision_model();
            $ecases->action_taken =$request->action_taken;
            $ecases->no_cases=$request->no_cases;
            $ecases->year=$request->year;
            $ecases->save();
             return response()->json($ecases);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cases_handled_id)
    {
             $ecases = caseshandledbyethicscommision_model::findOrfail($cases_handled_id);

  
          echo json_encode($ecases);    }

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
         'no_cases'=>'required|numeric',
          'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $ecases =caseshandledbyethicscommision_model::find($request->id);
            $ecases->action_taken =$request->action_taken;
            $ecases->no_cases=$request->no_cases;
            $ecases->year=$request->year;
            $ecases->save();
             return response()->json($ecases);
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
