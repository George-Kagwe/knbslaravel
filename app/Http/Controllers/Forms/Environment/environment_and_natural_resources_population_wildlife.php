<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_population_wildlife_Model;
use View;

class environment_and_natural_resources_population_wildlife extends Controller
{
   
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'buffalo'=>'required|numeric',
      'burchell_zebra'=>'required|numeric', 
      'eland'=>'required|numeric',
      'elephant'=>'required|numeric',

      'gerenuk'=>'required|numeric',
      'giraffe'=>'required|numeric',
      'grant_gazelle'=>'required|numeric',
      'grevy_zebra'=>'required|numeric',

      'hunters_hartebeest'=>'required|numeric',
      'impala'=>'required|numeric',
      'kongoni'=>'required|numeric',
      'kudu'=>'required|numeric',

      'oryx'=>'required|numeric',
      'ostrich'=>'required|numeric',
      'thomson_gazelle'=>'required|numeric',
      'topi'=>'required|numeric',

       'warthog'=>'required|numeric',
      'waterbuck'=>'required|numeric',
      'wildebeest'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];

    public function index()
    {
        
        $environment_and_natural_resources_population_wildlife =environment_and_natural_resources_population_wildlife_Model::all();
        
        return view('forms.environment.national.naturalresourcespopulationwildlife',['post' =>$environment_and_natural_resources_population_wildlife]);
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
       'buffalo'=>'required|numeric',
      'burchell_zebra'=>'required|numeric', 
      'eland'=>'required|numeric',
      'elephant'=>'required|numeric',

      'gerenuk'=>'required|numeric',
      'giraffe'=>'required|numeric',
      'grant_gazelle'=>'required|numeric',
      'grevy_zebra'=>'required|numeric',

      'hunters_hartebeest'=>'required|numeric',
      'impala'=>'required|numeric',
      'kongoni'=>'required|numeric',
      'kudu'=>'required|numeric',

      'oryx'=>'required|numeric',
      'ostrich'=>'required|numeric',
      'thomson_gazelle'=>'required|numeric',
      'topi'=>'required|numeric',

       'warthog'=>'required|numeric',
      'waterbuck'=>'required|numeric',
      'wildebeest'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $wildlife = new environment_and_natural_resources_population_wildlife_Model();

            $wildlife->buffalo=$request->buffalo;
            $wildlife->burchell_zebra=$request->burchell_zebra;
              $wildlife->eland =$request->eland;
            $wildlife->elephant=$request->elephant;

              $wildlife->gerenuk=$request->gerenuk;
            $wildlife->giraffe=$request->giraffe;
              $wildlife->grant_gazelle=$request->grant_gazelle;
            $wildlife->grevy_zebra=$request->grevy_zebra;

              $wildlife->hunters_hartebeest=$request->hunters_hartebeest;
            $wildlife->impala=$request->impala;
              $wildlife->kongoni =$request->kongoni;
           

              $wildlife->kudu=$request->kudu;
            $wildlife->oryx=$request->oryx;
              $wildlife->ostrich=$request->ostrich;
            $wildlife->thomson_gazelle=$request->thomson_gazelle;

              $wildlife->topi=$request->topi;
            $wildlife->warthog=$request->warthog;
              $wildlife->waterbuck=$request->waterbuck;
            $wildlife->wildebeest=$request->wildebeest;
            
            $wildlife->year=$request->year;
            $wildlife->save();
             return response()->json($wildlife);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($population_id)
    {
       
         
         $wildlife = environment_and_natural_resources_population_wildlife_Model::findOrfail($population_id);

  
          echo json_encode($wildlife);     
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
          'buffalo'=>'required|numeric',
      'burchell_zebra'=>'required|numeric', 
      'eland'=>'required|numeric',
      'elephant'=>'required|numeric',

      'gerenuk'=>'required|numeric',
      'giraffe'=>'required|numeric',
      'grant_gazelle'=>'required|numeric',
      'grevy_zebra'=>'required|numeric',

      'hunters_hartebeest'=>'required|numeric',
      'impala'=>'required|numeric',
      'kongoni'=>'required|numeric',
      'kudu'=>'required|numeric',

      'oryx'=>'required|numeric',
      'ostrich'=>'required|numeric',
      'thomson_gazelle'=>'required|numeric',
      'topi'=>'required|numeric',

       'warthog'=>'required|numeric',
      'waterbuck'=>'required|numeric',
      'wildebeest'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $wildlife=environment_and_natural_resources_population_wildlife_Model::find($request->id);

          $wildlife->buffalo=$request->buffalo;
            $wildlife->burchell_zebra=$request->burchell_zebra;
              $wildlife->eland =$request->eland;
            $wildlife->elephant=$request->elephant;

              $wildlife->gerenuk=$request->gerenuk;
            $wildlife->giraffe=$request->giraffe;
              $wildlife->grant_gazelle=$request->grant_gazelle;
            $wildlife->grevy_zebra=$request->grevy_zebra;

              $wildlife->hunters_hartebeest=$request->hunters_hartebeest;
            $wildlife->impala=$request->impala;
              $wildlife->kongoni=$request->kongoni;
           

              $wildlife->kudu=$request->kudu;
            $wildlife->oryx=$request->oryx;
              $wildlife->ostrich=$request->ostrich;
            $wildlife->thomson_gazelle=$request->thomson_gazelle;

              $wildlife->topi=$request->topi;
            $wildlife->warthog=$request->warthog;
              $wildlife->waterbuck=$request->waterbuck;
            $wildlife->wildebeest=$request->wildebeest;
            
            $wildlife->year=$request->year;

            $wildlife->save();
             return response()->json($wildlife);
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
