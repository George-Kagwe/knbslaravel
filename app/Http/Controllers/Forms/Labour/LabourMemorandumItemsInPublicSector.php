<?php

namespace App\Http\Controllers\Forms\Labour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Labour\LabourMemorandumItemsInPublicSector_Model;
use View;

class LabourMemorandumItemsInPublicSector extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'memorandum_item'=>'required|alpha_dash',
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
         $LabourMemorandumItemsInPublicSector =LabourMemorandumItemsInPublicSector_Model::all();
        
        return view('Forms.labour.national.labourmemorandumitemsinpublicsector',['post' =>$LabourMemorandumItemsInPublicSector]);
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
        'memorandum_item'=>'required|alpha_dash',
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $memorandum = new LabourMemorandumItemsInPublicSector_Model();
            $memorandum->memorandum_item =$request->memorandum_item;
            $memorandum->wage_earnings=$request->wage_earnings;
            
            $memorandum->year=$request->year;
            $memorandum->save();
             return response()->json($memorandum);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($memorandum_item_id)
    {
        //
         $memorandum = LabourMemorandumItemsInPublicSector_Model::findOrfail($memorandum_item_id);

  
          echo json_encode($memorandum);
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
         'memorandum_item'=>'required|alpha_dash',
      'wage_earnings'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $memorandum=LabourMemorandumItemsInPublicSector_Model::find($request->id);
            $memorandum->memorandum_item=$request->memorandum_item;
            $memorandum->wage_earnings=$request->wage_earnings;
            
            $memorandum->year=$request->year;
            $memorandum->save();
             return response()->json($memorandum);
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
