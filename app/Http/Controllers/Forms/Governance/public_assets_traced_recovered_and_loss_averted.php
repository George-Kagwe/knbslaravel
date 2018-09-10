<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\public_assets_traced_recovered_and_loss_averted_model;
use View;

class public_assets_traced_recovered_and_loss_averted extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'public_assets_traced'=>'required|numeric',
      'public_assets_recovered'=>'required|numeric',
      'loss_averted'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
         $public_assets_traced_recovered_and_loss_averted =public_assets_traced_recovered_and_loss_averted_model::all();
        
        return view('forms.governance.national.public_assets_traced_recovered_and_loss_averted',['post' =>
            $public_assets_traced_recovered_and_loss_averted]);
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
       'public_assets_traced'=>'required|numeric',
      'public_assets_recovered'=>'required|numeric',
      'loss_averted'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $public = new public_assets_traced_recovered_and_loss_averted_model();
            $public->public_assets_traced =$request->public_assets_traced;
            $public->public_assets_recovered=$request->public_assets_recovered;
            $public->loss_averted=$request->loss_averted;
            $public->year=$request->year;
            $public->save();
             return response()->json($public);
           echo json_encode(array("status" => TRUE));

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category_id)
    {
        

        $public = public_assets_traced_recovered_and_loss_averted_model::findOrfail($category_id);
        echo json_encode($public);   


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
      'public_assets_traced'=>'required|numeric',
      'public_assets_recovered'=>'required|numeric',
      'loss_averted'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $public =public_assets_traced_recovered_and_loss_averted_model::find($request->id);

            $public->public_assets_traced =$request->public_assets_traced;
            $public->public_assets_recovered=$request->public_assets_recovered;
            $public->loss_averted=$request->loss_averted;
            $public->year=$request->year;
            $public->save();
             return response()->json($public);
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
