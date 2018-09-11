<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\Members_Of_NationalAssembly_and_Senators_model;
use View;

class Members_Of_NationalAssembly_and_Senators extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'status'=>'required|alpha_dash',
      'women'=>'required|numeric',
      'men'=>'required|numeric',
      'total'=>'required|numeric',
      'women_percentage'=>'required|numeric'                      
                        
    ];
    public function index()
    {
        
         $Members_Of_NationalAssembly_and_Senators =Members_Of_NationalAssembly_and_Senators_model::all();
        
        return view('forms.governance.national.Members_Of_NationalAssembly_and_Senators',['post' =>
            $Members_Of_NationalAssembly_and_Senators]);
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
      'status'=>'required|alpha_dash',
      'women'=>'required|numeric',
      'men'=>'required|numeric',
      'total'=>'required|numeric',
      'women_percentage'=>'required|numeric'   
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $members = new Members_Of_NationalAssembly_and_Senators_model();
            $members->status =$request->status;
            $members->women=$request->women;
            $members->men=$request->men;
            $members->total=$request->total;
            $members->women_percentage=$request->women_percentage;
            $members->save();
             return response()->json($members);
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
        

        $members = Members_Of_NationalAssembly_and_Senators_model::findOrfail($woman_id);
        echo json_encode($members);   


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
      'status'=>'required|alpha_dash',
      'women'=>'required|numeric',
      'men'=>'required|numeric',
      'total'=>'required|numeric',
      'women_percentage'=>'required|numeric'   
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $members =Members_Of_NationalAssembly_and_Senators_model::find($request->id);

            $members->status =$request->status;
            $members->women=$request->women;
            $members->men=$request->men;
            $members->total=$request->total;
            $members->women_percentage=$request->women_percentage;
            $members->save();
             return response()->json($members);
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
