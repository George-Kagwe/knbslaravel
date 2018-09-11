<?php

namespace App\Http\Controllers\Forms\Finance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_national_government_expenditure_purpose_model;
use View;



class finance_national_government_expenditure_purpose extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
        'general_publicservices'=>'required|numeric',
        'public_debttransactions'=>'required|numeric',
        'transfers'=>'required|numeric',
        'defense'=>'required|numeric',
         'order_safety'=>'required|numeric',
         'economic_commercial_labor'=>'required|numeric',
         'agriculture'=>'required|numeric',
         'fuel_energy'=>'required|numeric',
         'mining_manufacturing_construction'=>'required|numeric',
         'transport'=>'required|numeric',
         'communication'=>'required|numeric',
         'other_industries'=>'required|numeric',
        'environmental_protection'=>'required|numeric',
        'housing_communityamenities'=>'required|numeric',
        'health'=>'required|numeric',
         
       'other_industries'=>'required|numeric',
         
       'recreation_culture_religion'=>'required|numeric',
       'education'=>'required|numeric',
       'socialprotection'=>'required|numeric',

      'year'=>'required|numeric'

                              
                        
    ];
    public function index()
    {
        
        $finance_national_government_expenditure_purpose =finance_national_government_expenditure_purpose_model::all();
        
        return view('forms.finance.national.finance_national_government_expenditure_purpose',['post' =>$finance_national_government_expenditure_purpose]);
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
  'general_publicservices'=>'required|numeric',
        'public_debttransactions'=>'required|numeric',
        'transfers'=>'required|numeric',
        'defense'=>'required|numeric',
         'order_safety'=>'required|numeric',
         'economic_commercial_labor'=>'required|numeric',
         'agriculture'=>'required|numeric',
         'fuel_energy'=>'required|numeric',
         'mining_manufacturing_construction'=>'required|numeric',
         'transport'=>'required|numeric',
         'communication'=>'required|numeric',
         'other_industries'=>'required|numeric',
        'environmental_protection'=>'required|numeric',
        'housing_communityamenities'=>'required|numeric',
        'health'=>'required|numeric',
         
       'other_industries'=>'required|numeric',
         
       'recreation_culture_religion'=>'required|numeric',
       'education'=>'required|numeric',
       'socialprotection'=>'required|numeric',

      'year'=>'required|numeric'

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $purpose = new finance_national_government_expenditure_purpose_model();
                $purpose->general_publicservices =$request->general_publicservices;
                 $purpose->public_debttransactions=$request->public_debttransactions;
                 $purpose->transfers=$request->transfers;
   
                  $purpose->defense=$request->defense;
               
                  $purpose->order_safety=$request->order_safety;
               
                  $purpose->economic_commercial_labor=$request->economic_commercial_labor;
               
                  $purpose->agriculture=$request->agriculture;
               
                  $purpose->fuel_energy=$request->fuel_energy;
               
                  $purpose->mining_manufacturing_construction=$request->mining_manufacturing_construction;
               
                  $purpose->communication=$request->communication;
               
                  $purpose->other_industries=$request->other_industries;
               
                  $purpose->environmental_protection=$request->environmental_protection;
               
                  $purpose->housing_communityamenities=$request->housing_communityamenities;
               
                  $purpose->health=$request->health;
               
                  $purpose->recreation_culture_religion=$request->recreation_culture_religion;
               
                  $purpose->education=$request->education;
               
                  $purpose->socialprotection=$request->socialprotection;
               
                            
            $purpose->year=$request->year;
            $purpose->save();
             return response()->json($purpose);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($purpose_id)
    {
       
         
         $purpose = finance_national_government_expenditure_purpose_model::findOrfail($purpose_id);

  
          echo json_encode($purpose);     
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
      'general_publicservices'=>'required|numeric',
        'public_debttransactions'=>'required|numeric',
        'transfers'=>'required|numeric',
        'defense'=>'required|numeric',
         'order_safety'=>'required|numeric',
         'economic_commercial_labor'=>'required|numeric',
         'agriculture'=>'required|numeric',
         'fuel_energy'=>'required|numeric',
         'mining_manufacturing_construction'=>'required|numeric',
         'transport'=>'required|numeric',
         'communication'=>'required|numeric',
         'other_industries'=>'required|numeric',
        'environmental_protection'=>'required|numeric',
        'housing_communityamenities'=>'required|numeric',
        'health'=>'required|numeric',
        
         
       'recreation_culture_religion'=>'required|numeric',
       'education'=>'required|numeric',
       'socialprotection'=>'required|numeric',

      'year'=>'required|numeric'

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $purpose =finance_national_government_expenditure_purpose_model::find($request->id);
            $purpose->general_publicservices =$request->general_publicservices;
            $purpose->public_debttransactions=$request->public_debttransactions;
               $purpose->transfers=$request->transfers;
   
                  $purpose->defense=$request->defense;
               
                  $purpose->order_safety=$request->order_safety;
               
                  $purpose->economic_commercial_labor=$request->economic_commercial_labor;
               
                  $purpose->agriculture=$request->agriculture;
               
                  $purpose->fuel_energy=$request->fuel_energy;
               
                  $purpose->mining_manufacturing_construction=$request->mining_manufacturing_construction;
               
                  $purpose->communication=$request->communication;
               
                  $purpose->other_industries=$request->other_industries;
               
                  $purpose->environmental_protection=$request->environmental_protection;
               
                  $purpose->housing_communityamenities=$request->housing_communityamenities;
               
                  $purpose->health=$request->health;
               
                  $purpose->recreation_culture_religion=$request->recreation_culture_religion;
               
                  $purpose->education=$request->education;
               
                  $purpose->socialprotection=$request->socialprotection;
  
               
   
   
   
            $purpose->year=$request->year;
            $purpose->save();
             return response()->json($purpose);
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
