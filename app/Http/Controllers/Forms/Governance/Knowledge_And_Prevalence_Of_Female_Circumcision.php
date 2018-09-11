<?php

namespace App\Http\Controllers\Forms\Governance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\Knowledge_And_Prevalence_Of_Female_Circumcision_model;
use View;
class Knowledge_And_Prevalence_Of_Female_Circumcision extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


       protected $rules =
    [
      'age'=>'required|numeric',
      'percentage_women_heard_of_FC'=>'required|numeric',
      'percentage_women_not_heard_of_FC'=>'required|numeric',
      'year'=>'required|numeric'
    

                        
    ];
    public function index()
    {
       $Knowledge_And_Prevalence_Of_Female_Circumcision =Knowledge_And_Prevalence_Of_Female_Circumcision_model::all();
        
        return view('forms.governance.national.Knowledge_And_Prevalence_Of_Female_Circumcision',['post' =>$Knowledge_And_Prevalence_Of_Female_Circumcision]);
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
      'percentage_women_heard_of_FC'=>'required|numeric',
      'percentage_women_not_heard_of_FC'=>'required|numeric',
      'year'=>'required|numeric'
 

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $domestic = new Knowledge_And_Prevalence_Of_Female_Circumcision_model();
            $domestic->age =$request->age;
            $domestic->percentage_women_heard_of_FC =$request->percentage_women_heard_of_FC;
            $domestic->percentage_women_not_heard_of_FC=$request->percentage_women_not_heard_of_FC;
            $domestic->year=$request->year;
          
    
            
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
                
         $domestic = Knowledge_And_Prevalence_Of_Female_Circumcision_model::findOrfail($woman_id);

  
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
      'percentage_women_heard_of_FC'=>'required|numeric',
      'percentage_women_not_heard_of_FC'=>'required|numeric',
      'year'=>'required|numeric'
   
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $domestic =Knowledge_And_Prevalence_Of_Female_Circumcision_model::find($request->id);
            $domestic->age =$request->age;
            $domestic->percentage_women_heard_of_FC =$request->percentage_women_heard_of_FC;
            $domestic->percentage_women_not_heard_of_FC=$request->percentage_women_not_heard_of_FC;
            $domestic->year=$request->year;

          
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
