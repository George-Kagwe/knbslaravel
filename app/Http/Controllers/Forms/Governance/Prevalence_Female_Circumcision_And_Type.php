<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Governance\Prevalence_Female_Circumcision_And_Type_model;
use View;

class Prevalence_Female_Circumcision_And_Type extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



       protected $rules =
    [
      'age'=>'required|alpha_dash',
      'cut_no_flesh_removed'=>'required|numeric',
      'cut_flesh_removed'=>'required|numeric',
      'sewn_closed'=>'required|numeric',
      'others'=>'required|numeric'  ,
      'percentage_women_circumcised'=>'required|numeric'                      
                        
    ];
    public function index()
    {
        
         $Prevalence_Female_Circumcision_And_Type =Prevalence_Female_Circumcision_And_Type_model::all();
        
        return view('forms.governance.national.Prevalence_Female_Circumcision_And_Type',['post' =>
            $Prevalence_Female_Circumcision_And_Type]);
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
      'age'=>'required|alpha_dash',
      'cut_no_flesh_removed'=>'required|numeric',
      'cut_flesh_removed'=>'required|numeric',
      'sewn_closed'=>'required|numeric',
      'others'=>'required|numeric' ,
    'percentage_women_circumcised'=>'required|numeric'      
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $female = new Prevalence_Female_Circumcision_And_Type_model();
            $female->age =$request->age;
            $female->cut_no_flesh_removed=$request->cut_no_flesh_removed;
            $female->cut_flesh_removed=$request->cut_flesh_removed;
            $female->sewn_closed=$request->sewn_closed;
            $female->others=$request->others;
            $female->percentage_women_circumcised=$request->percentage_women_circumcised;
            $female->save();
             return response()->json($female);
           echo json_encode(array("age" => TRUE));

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($persons_id)
    {
        

        $female = Prevalence_Female_Circumcision_And_Type_model::findOrfail($persons_id);
        echo json_encode($female);   


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
      'age'=>'required|alpha_dash',
      'cut_no_flesh_removed'=>'required|numeric',
      'cut_flesh_removed'=>'required|numeric',
      'sewn_closed'=>'required|numeric',
      'others'=>'required|numeric', 
    'percentage_women_circumcised'=>'required|numeric'      
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $female =Prevalence_Female_Circumcision_And_Type_model::find($request->id);

            $female->age =$request->age;
            $female->cut_no_flesh_removed=$request->cut_no_flesh_removed;
            $female->cut_flesh_removed=$request->cut_flesh_removed;
            $female->sewn_closed=$request->sewn_closed;
            $female->others=$request->others;
            $female->percentage_women_circumcised=$request->percentage_women_circumcised;
            $female->save();
             return response()->json($female);
           echo json_encode(array("age" => TRUE));

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
