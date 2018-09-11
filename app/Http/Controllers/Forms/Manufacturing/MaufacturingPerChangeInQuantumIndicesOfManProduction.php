<?php

namespace App\Http\Controllers\Forms\Manufacturing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Manufacturing\MaufacturingPerChangeInQuantumIndicesOfManProduction_Model;
use View;

class MaufacturingPerChangeInQuantumIndicesOfManProduction extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'commodity'=>'required|alpha_dash',
      'percentage_change'=>'required|numeric',
       
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $MaufacturingPerChangeInQuantumIndicesOfManProduction =MaufacturingPerChangeInQuantumIndicesOfManProduction_Model::all();
        
        return view('Forms.manufacturing.national.manufacturingperchangeinquantumindicesofmanproduction',['post' =>$MaufacturingPerChangeInQuantumIndicesOfManProduction]);
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
      'percentage_change'=>'required|numeric',
       
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $percentageN= new MaufacturingPerChangeInQuantumIndicesOfManProduction_Model();
            $percentageN->commodity =$request->commodity;
            $percentageN->percentage_change=$request->percentage_change;
            
            $percentageN->year=$request->year;
            $percentageN->save();
             return response()->json($percentageN);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($percentage_change_id)
    {
        //
        $percentageN = MaufacturingPerChangeInQuantumIndicesOfManProduction_Model::findOrfail($percentage_change_id);

  
          echo json_encode($percentageN);
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
      'percentage_change'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $percentageN=MaufacturingPerChangeInQuantumIndicesOfManProduction_Model::find($request->id);
            $percentageN->commodity=$request->commodity;
            $percentageN->percentage_change=$request->percentage_change;
            
            $percentageN->year=$request->year;
            $percentageN->save();
             return response()->json($percentageN);
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
