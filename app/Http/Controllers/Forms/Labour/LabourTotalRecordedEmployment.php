<?php

namespace App\Http\Controllers\Forms\Labour;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Labour\LabourTotalRecordedEmployment_Model;
use View;
class LabourTotalRecordedEmployment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
      'sector_category'=>'required|alpha_dash',
      'total_employment'=>'required|numeric',
      
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
        $LabourTotalRecordedEmployment =LabourTotalRecordedEmployment_Model::all();
        
        return view('Forms.labour.national.labourtotalrecordedemployment',['post' =>$LabourTotalRecordedEmployment]);

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
        'sector_category'=>'required|alpha_dash',
      'total_employment'=>'required|numeric',
      
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $employment = new LabourTotalRecordedEmployment_Model();
            $employment->sector_category =$request->sector_category;
            $employment->total_employment=$request->total_employment;
            
            $employment->year=$request->year;
            $employment->save();
             return response()->json($employment);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($total_employment_id)
    {
        //
         $employment = LabourTotalRecordedEmployment_Model::findOrfail($total_employment_id);

  
          echo json_encode($employment);
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
         
            $employment=LabourTotalRecordedEmployment_Model::find($request->id);
            $employment->sector_category=$request->sector_category;
            $employment->total_employment=$request->total_employment;
            
            $employment->year=$request->year;
            $employment->save();
             return response()->json($employment);
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
