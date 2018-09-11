<?php

namespace App\Http\Controllers\Forms\Manufacturing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Manufacturing\MaufacturingQuantumIndicesOfManufacturingProduction_Model;
use View;

class MaufacturingQuantumIndicesOfManufacturingProduction extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'commodity'=>'required|alpha_dash',
      'quantum_indice'=>'required|numeric',
       
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $MaufacturingQuantumIndicesOfManufacturingProduction =MaufacturingQuantumIndicesOfManufacturingProduction_Model::all();
        
        return view('Forms.manufacturing.national.manufacturingquantumindicesofmanufacturingproduction',['post' =>$MaufacturingQuantumIndicesOfManufacturingProduction]);
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
        //
         $validator = \Validator::make($request->all(), [
        'commodity'=>'required|alpha_dash',
      'quantum_indice'=>'required|numeric',
       
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $quantum= new MaufacturingQuantumIndicesOfManufacturingProduction_Model();
            $quantum->commodity =$request->commodity;
            $quantum->quantum_indice=$request->quantum_indice;
            
            $quantum->year=$request->year;
            $quantum->save();
             return response()->json($quantum);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($quantum_indice_id)
    {
        //
         $quantum = MaufacturingQuantumIndicesOfManufacturingProduction_Model::findOrfail($quantum_indice_id);

  
          echo json_encode($quantum);
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
        //
         $validator = \Validator::make($request->all(), [
         'commodity'=>'required|alpha_dash',
      'quantum_indice'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $quantum=MaufacturingQuantumIndicesOfManufacturingProduction_Model::find($request->id);
            $quantum->commodity=$request->commodity;
            $quantum->quantum_indice=$request->quantum_indice;
            
            $quantum->year=$request->year;
            $quantum->save();
             return response()->json($quantum);
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
