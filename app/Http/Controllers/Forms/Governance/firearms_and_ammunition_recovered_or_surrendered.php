<?php

namespace App\Http\Controllers\Forms\Governance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\firearms_and_ammunition_recovered_or_surrendered_model;
use View;
class firearms_and_ammunition_recovered_or_surrendered extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


       protected $rules =
    [
      'category'=>'required|alpha',
      'rifles'=>'required|numeric',
      'pistols'=>'required|numeric',
      'toy_pistols'=>'required|numeric',
      'ammunition'=>'required|numeric',
   
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
       $firearms_and_ammunition_recovered_or_surrendered =firearms_and_ammunition_recovered_or_surrendered_model::all();
        
        return view('forms.governance.national.firearms_and_ammunition_recovered_or_surrendered',['post' =>$firearms_and_ammunition_recovered_or_surrendered]);
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
       'category'=>'required|alpha',
      'rifles'=>'required|numeric',
      'pistols'=>'required|numeric',
      'toy_pistols'=>'required|numeric',
      'ammunition'=>'required|numeric',

      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $ammunition = new firearms_and_ammunition_recovered_or_surrendered_model();
            $ammunition->category =$request->category;
            $ammunition->rifles =$request->rifles;
            $ammunition->pistols=$request->pistols;
            $ammunition->toy_pistols=$request->toy_pistols;
            $ammunition->ammunition=$request->ammunition;

            $ammunition->year=$request->year;
            $ammunition->save();
             return response()->json($ammunition);
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
                
         $ammunition = firearms_and_ammunition_recovered_or_surrendered_model::findOrfail($category_id);

  
          echo json_encode($ammunition);     
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
       'category'=>'required|alpha',
      'rifles'=>'required|numeric',
      'pistols'=>'required|numeric',
      'toy_pistols'=>'required|numeric',
      'ammunition'=>'required|numeric',

      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $ammunition =firearms_and_ammunition_recovered_or_surrendered_model::find($request->id);
            $ammunition->category =$request->category;
            $ammunition->rifles =$request->rifles;
            $ammunition->pistols=$request->pistols;
            $ammunition->toy_pistols=$request->toy_pistols;
            $ammunition->ammunition=$request->ammunition;
    
            $ammunition->year=$request->year;
            $ammunition->save();
             return response()->json($ammunition);
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
