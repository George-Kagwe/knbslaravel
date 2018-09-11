<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\murder_cases_and_convictions_obtained_by_high_court_model;
use View;
class murder_cases_and_convictions_obtained_by_high_court extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

             protected $rules =
    [
      ' court_station'=>'required|alpha',
      ' registered_murder_cases'=>'required|numeric',
      'murder_convictions_obtained'=>'required|numeric',

      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
         $murder_cases_and_convictions_obtained_by_high_court =murder_cases_and_convictions_obtained_by_high_court_model::all();
        
        return view('forms.governance.national.murder_cases_and_convictions_obtained_by_high_court',['post' =>
            $murder_cases_and_convictions_obtained_by_high_court]);
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
       'court_station'=>'required|alpha',
      'registered_murder_cases'=>'required|numeric',
      'murder_convictions_obtained'=>'required|numeric',

      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $murder = new murder_cases_and_convictions_obtained_by_high_court_model();
            $murder->court_station =$request->court_station;
            $murder->registered_murder_cases=$request->registered_murder_cases;
            $murder->murder_convictions_obtained=$request->murder_convictions_obtained;
            $murder->year=$request->year;
            $murder->save();
             return response()->json($murder);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($reg_murder_convictions_obtained_id)
    {
         $murder = murder_cases_and_convictions_obtained_by_high_court_model::findOrfail($reg_murder_convictions_obtained_id);

  
          echo json_encode($murder);   

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
        'court_station'=>'required|alpha',
      'registered_murder_cases'=>'required|numeric',
      'murder_convictions_obtained'=>'required|numeric',

      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $murder =murder_cases_and_convictions_obtained_by_high_court_model::find($request->id);

            $murder->court_station =$request->court_station;
            $murder->registered_murder_cases=$request->registered_murder_cases;
            $murder->murder_convictions_obtained=$request->murder_convictions_obtained;
            $murder->year=$request->year;
            $murder->save();
             return response()->json($murder);
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
