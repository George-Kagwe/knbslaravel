<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Environment\environment_and_natural_resources_average_export_prices_ash_Model;
use View;

class environment_and_natural_resources_average_export_prices_ash extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'soda_ash'=>'required|numeric',
      'fluorspar'=>'required|numeric', 
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $environment_and_natural_resources_average_export_prices_ash =environment_and_natural_resources_average_export_prices_ash_Model::all();
        
        return view('forms.environment.national.naturalresourcesaverageexportpricesash',['post' =>$environment_and_natural_resources_average_export_prices_ash]);
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
        'soda_ash'=>'required|numeric',
      'fluorspar'=>'required|numeric',     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $environment = new  environment_and_natural_resources_average_export_prices_ash_Model();
            $environment->soda_ash =$request->soda_ash;
            $environment->fluorspar=$request->fluorspar;
            
            $environment->year=$request->year;
            $environment->save();
             return response()->json($environment);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($average_id)
    {
       
         
         $environment = environment_and_natural_resources_average_export_prices_ash_Model::findOrfail($average_id);

  
          echo json_encode($environment);     
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
        'soda_ash'=>'required|numeric',
      'fluorspar'=>'required|numeric',     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $environment=environment_and_natural_resources_average_export_prices_ash_Model::find($request->id);
            $environment->soda_ash=$request->soda_ash;
            $environment->fluorspar=$request->fluorspar;
           
            $environment->year=$request->year;
            $environment->save();
             return response()->json($environment);
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
