<?php

namespace App\Http\Controllers\Forms\Energy;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Energy\energy_installed_and_effective_capacity_of_electricity_model;
use View;



class energy_installed_and_effective_capacity_of_electricity extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
                          'type'=>'required|alpha_dash',
                          'electricity_source' =>'required|alpha_dash',
                          'capacity_megawatts' =>'required|numeric',
                          'year' =>'required'
    ];
    public function index()
    {
        
        $energy_installed_and_effective_capacity_of_electricity =energy_installed_and_effective_capacity_of_electricity_model::all();
        
        return view('forms.energy.national.energy_installed_and_effective_capacity_of_electricity',['post' =>$energy_installed_and_effective_capacity_of_electricity]);
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
       
      
                         'type'=>'required|alpha_dash',
                          'electricity_source' =>'required|alpha_dash',
                          'capacity_megawatts' =>'required|numeric',
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $installed = new energy_installed_and_effective_capacity_of_electricity_Model();
            $installed->type =$request->type;
            $installed->electricity_source=$request->electricity_source;
            $installed->capacity_megawatts=$request->capacity_megawatts;
            $installed->year=$request->year;

                  $installed->save();
             return response()->json($installed);
    
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($capacity_id)
    {
       
         
         $installed = energy_installed_and_effective_capacity_of_electricity_model::findOrfail($capacity_id);

  
          echo json_encode($installed);     
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
                         'type'=>'required|alpha_dash',
                          'electricity_source' =>'required|alpha_dash',
                          'capacity_megawatts' =>'required|numeric',
                          'year' =>'required'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $installed =energy_installed_and_effective_capacity_of_electricity_Model::find($request->id);
            $installed->type =$request->type;
            $installed->electricity_source=$request->electricity_source;
            $installed->capacity_megawatts=$request->capacity_megawatts;
           
            $installed->year=$request->year;
            $installed->save();
             return response()->json($installed);
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
