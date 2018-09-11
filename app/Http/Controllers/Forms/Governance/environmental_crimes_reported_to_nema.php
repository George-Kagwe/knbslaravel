<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\environmental_crimes_reported_to_nema_model;
use View;
class environmental_crimes_reported_to_nema extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'type_of_case'=>'required|alpha',
      'no_of_cases'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
         $environmental_crimes_reported_to_nema =environmental_crimes_reported_to_nema_model::all();
        
        return view('forms.governance.national.environmental_crimes_reported_to_nema',['post' =>
            $environmental_crimes_reported_to_nema]);
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
       'type_of_case'=>'required|alpha',
      'no_of_cases'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $crimes = new environmental_crimes_reported_to_nema_model();
            $crimes->type_of_case =$request->type_of_case;
            $crimes->no_of_cases=$request->no_of_cases;
            $crimes->year=$request->year;
            $crimes->save();
             return response()->json($crimes);
           echo json_encode(array("status" => TRUE));

        }
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($crime_id)
    {
          $crimes = environmental_crimes_reported_to_nema_model::findOrfail($crime_id);

  
          echo json_encode($crimes); 
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
      'type_of_case'=>'required|alpha',
      'no_of_cases'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $crimes =environmental_crimes_reported_to_nema_model::find($request->id);
            $crimes->type_of_case =$request->type_of_case;
            $crimes->no_of_cases=$request->no_of_cases;
            $crimes->year=$request->year;
            $crimes->save();
             return response()->json($crimes);
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
