<?php

namespace App\Http\Controllers\Forms\Agriculture;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Agriculture\agriculture_valueofagriculturalinputs_model;
use View;



class agriculture_valueofagriculturalinputs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
       'accounting_secretarial_and_auditing_services'=>'required|numeric',
      'aerial_spraying'=>'required|numeric',
      'artificial_insemination'=>'required|numeric',
      'bags'=>'required|numeric',
          'farm_planning_and_survey_services'=>'required|numeric',
       'fertilizers'=>'required|numeric',
      'fuel'=>'required|numeric',
      'government_seed_inspection_services'=>'required|numeric',
      'government_veterinary_inoculation_services'=>'required|numeric',
       'insurance'=>'required|numeric',
      'livestock_drugs_and_medicines'=>'required|numeric',
      'manufactured_feeds'=>'required|numeric',
      'marketing_research_and_publicity'=>'required|numeric',
                              
      'office_expenses'=>'required|numeric',
       'other'=>'required|numeric',
      'other_material_inputs'=>'required|numeric',
      'other_agricultural_chemicals'=>'required|numeric',
      'power'=>'required|numeric',
      'private_veterinary_services'=>'required|numeric',
      'seeds'=>'required|numeric',
      'small_implements'=>'required|numeric',
      'spares_and_maintenance_of_machinery'=>'required|numeric',
      'tractor_services'=>'required|numeric',
      'transportation'=>'required|numeric',
      'year'=>'required|numeric',                                         
                        
    ];
    public function index()
    {
        
        $agriculture_valueofagriculturalinputs =agriculture_valueofagriculturalinputs_model::all();
        
        return view('forms.agriculture.national.agriculture_valueofagriculturalinputs',['post' =>$agriculture_valueofagriculturalinputs]);
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
    'accounting_secretarial_and_auditing_services'=>'required|numeric',
      'aerial_spraying'=>'required|numeric',
      'artificial_insemination'=>'required|numeric',
      'bags'=>'required|numeric',
          'farm_planning_and_survey_services'=>'required|numeric',

       'fertilizers'=>'required|numeric',
      'fuel'=>'required|numeric',
      'government_seed_inspection_services'=>'required|numeric',
      'government_veterinary_inoculation_services'=>'required|numeric',
       'insurance'=>'required|numeric',
      'livestock_drugs_and_medicines'=>'required|numeric',
      'manufactured_feeds'=>'required|numeric',
      'marketing_research_and_publicity'=>'required|numeric',
                              
      'office_expenses'=>'required|numeric',
       'other'=>'required|numeric',
      'other_material_inputs'=>'required|numeric',
      'other_agricultural_chemicals'=>'required|numeric',
      'power'=>'required|numeric',
      'private_veterinary_services'=>'required|numeric',
      'seeds'=>'required|numeric',
      'small_implements'=>'required|numeric',
      'spares_and_maintenance_of_machinery'=>'required|numeric',
      'tractor_services'=>'required|numeric',
      'transportation'=>'required|numeric',
      'year'=>'required|numeric',                                       
                        
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $inputs = new agriculture_valueofagriculturalinputs_model();
            $inputs->accounting_secretarial_and_auditing_services =$request->accounting_secretarial_and_auditing_services;
            $inputs->aerial_spraying=$request->aerial_spraying;
            $inputs->artificial_insemination=$request->artificial_insemination;
            $inputs->bags =$request->bags;
             $inputs->fertilizers=$request->fertilizers;
            $inputs->farm_planning_and_survey_services=$request->farm_planning_and_survey_services;
            $inputs->fuel=$request->fuel;
            $inputs->government_seed_inspection_services =$request->government_seed_inspection_services;
            $inputs->government_veterinary_inoculation_services=$request->government_veterinary_inoculation_services;
            $inputs->insurance=$request->insurance;
            $inputs->livestock_drugs_and_medicines=$request->livestock_drugs_and_medicines;
            $inputs->manufactured_feeds=$request->manufactured_feeds;
            $inputs->marketing_research_and_publicity=$request->marketing_research_and_publicity;
            $inputs->office_expenses=$request->office_expenses;
            $inputs->other=$request->other;
            $inputs->other_material_inputs=$request->other_material_inputs;
            $inputs->manufactured_feeds=$request->manufactured_feeds;
            $inputs->other_agricultural_chemicals=$request->other_agricultural_chemicals;
            $inputs->power=$request->power;
            $inputs->private_veterinary_services=$request->private_veterinary_services;
            $inputs->seeds=$request->seeds;
            $inputs->small_implements=$request->small_implements;
            $inputs->spares_and_maintenance_of_machinery=$request->spares_and_maintenance_of_machinery;
            $inputs->tractor_services=$request->tractor_services;
            $inputs->transportation=$request->transportation;
            $inputs->year=$request->year;
            $inputs->save();
             return response()->json($inputs);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($value_of_agricultural_inputs_id)
    {
       
         
         $inputs = agriculture_valueofagriculturalinputs_model::findOrfail($value_of_agricultural_inputs_id);

  
          echo json_encode($inputs);     
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
      'accounting_secretarial_and_auditing_services'=>'required|numeric',
      'aerial_spraying'=>'required|numeric',
      'artificial_insemination'=>'required|numeric',
      'bags'=>'required|numeric',
          'farm_planning_and_survey_services'=>'required|numeric',

       'fertilizers'=>'required|numeric',
      'fuel'=>'required|numeric',
      'government_seed_inspection_services'=>'required|numeric',
      'government_veterinary_inoculation_services'=>'required|numeric',
       'insurance'=>'required|numeric',
      'livestock_drugs_and_medicines'=>'required|numeric',
      'manufactured_feeds'=>'required|numeric',
      'marketing_research_and_publicity'=>'required|numeric',
                              
      'office_expenses'=>'required|numeric',
       'other'=>'required|numeric',
      'other_material_inputs'=>'required|numeric',
      'other_agricultural_chemicals'=>'required|numeric',
      'power'=>'required|numeric',
      'private_veterinary_services'=>'required|numeric',
      'seeds'=>'required|numeric',
      'small_implements'=>'required|numeric',
      'spares_and_maintenance_of_machinery'=>'required|numeric',
      'tractor_services'=>'required|numeric',
      'transportation'=>'required|numeric',
      'year'=>'required|numeric'
                              
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $inputs =agriculture_valueofagriculturalinputs_model::find($request->id);
           $inputs->accounting_secretarial_and_auditing_services =$request->accounting_secretarial_and_auditing_services;
            $inputs->aerial_spraying=$request->aerial_spraying;
            $inputs->artificial_insemination=$request->artificial_insemination;
            $inputs->bags =$request->bags;
                $inputs->farm_planning_and_survey_services=$request->farm_planning_and_survey_services;
            $inputs->fertilizers=$request->fertilizers;
            $inputs->fuel=$request->fuel;
            $inputs->government_seed_inspection_services =$request->government_seed_inspection_services;
            $inputs->government_veterinary_inoculation_services=$request->government_veterinary_inoculation_services;
            $inputs->insurance=$request->insurance;
            $inputs->livestock_drugs_and_medicines=$request->livestock_drugs_and_medicines;
            $inputs->manufactured_feeds=$request->manufactured_feeds;
            $inputs->marketing_research_and_publicity=$request->marketing_research_and_publicity;
            $inputs->office_expenses=$request->office_expenses;
            $inputs->other=$request->other;
            $inputs->other_material_inputs=$request->other_material_inputs;
            $inputs->manufactured_feeds=$request->manufactured_feeds;
            $inputs->other_agricultural_chemicals=$request->other_agricultural_chemicals;
            $inputs->power=$request->power;
            $inputs->private_veterinary_services=$request->private_veterinary_services;
            $inputs->seeds=$request->seeds;
            $inputs->small_implements=$request->small_implements;
            $inputs->spares_and_maintenance_of_machinery=$request->spares_and_maintenance_of_machinery;
            $inputs->tractor_services=$request->tractor_services;
            $inputs->transportation=$request->transportation;
            $inputs->save();
             return response()->json($inputs);
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
