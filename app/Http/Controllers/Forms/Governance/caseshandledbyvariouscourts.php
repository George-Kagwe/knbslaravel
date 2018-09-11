<?php

namespace App\Http\Controllers\Forms\Governance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\caseshandledbyvariouscourts_model;
use View;
class caseshandledbyvariouscourts extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


       protected $rules =
    [
      'category'=>'required|alpha',
      'kadhis_court'=>'required|numeric',
      'magistrate_court'=>'required|numeric',
      'high_court'=>'required|numeric',
      'court_of_appeal'=>'required|numeric',
      'supreme_court'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
       $caseshandledbyvariouscourts =caseshandledbyvariouscourts_model::all();
        
        return view('forms.governance.national.caseshandledbyvariouscourts',['post' =>$caseshandledbyvariouscourts]);
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
      'kadhis_court'=>'required|numeric',
      'magistrate_court'=>'required|numeric',
      'high_court'=>'required|numeric',
      'court_of_appeal'=>'required|numeric',
      'supreme_court'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $court = new caseshandledbyvariouscourts_model();
            $court->category =$request->category;
            $court->kadhis_court =$request->kadhis_court;
            $court->magistrate_court=$request->magistrate_court;
            $court->high_court=$request->high_court;
            $court->court_of_appeal=$request->court_of_appeal;
            $court->supreme_court=$request->supreme_court;
            $court->year=$request->year;
            $court->save();
             return response()->json($court);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($court_id)
    {
                
         $court = caseshandledbyvariouscourts_model::findOrfail($court_id);

  
          echo json_encode($court);     
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
      'kadhis_court'=>'required|numeric',
      'magistrate_court'=>'required|numeric',
      'high_court'=>'required|numeric',
      'court_of_appeal'=>'required|numeric',
      'supreme_court'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $court =caseshandledbyvariouscourts_model::find($request->id);
            $court->category =$request->category;
            $court->kadhis_court =$request->kadhis_court;
            $court->magistrate_court=$request->magistrate_court;
            $court->high_court=$request->high_court;
            $court->court_of_appeal=$request->court_of_appeal;
            $court->supreme_court=$request->supreme_court;
            $court->year=$request->year;
            $court->save();
             return response()->json($court);
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
