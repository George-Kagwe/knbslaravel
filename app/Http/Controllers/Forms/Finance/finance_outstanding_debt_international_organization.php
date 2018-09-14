<?php

namespace App\Http\Controllers\Forms\Finance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_outstanding_debt_international_organization_model;
use View;



class finance_outstanding_debt_international_organization extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'ida'=>'required|numeric',
      'eec_eib'=>'required|numeric',
      'imf'=>'required|numeric',
      'adf_adb'=>'required|numeric',
      'commercial_banks'=>'required|numeric',
       'others'=>'required|numeric',
      'year'=>'required|numeric'                       
                        
    ];
    public function index()
    {
        
        $finance_outstanding_debt_international_organization =finance_outstanding_debt_international_organization_model::all();
        
        return view('forms.finance.national.finance_outstanding_debt_international_organization',['post' =>$finance_outstanding_debt_international_organization]);
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
      'ida'=>'required|numeric',
      'eec_eib'=>'required|numeric',
      'imf'=>'required|numeric',
      'adf_adb'=>'required|numeric',
      'commercial_banks'=>'required|numeric',
       'others'=>'required|numeric',
      'year'=>'required|numeric' 
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $debt = new finance_outstanding_debt_international_organization_model();
            $debt->ida =$request->ida;
            $debt->eec_eib=$request->eec_eib;
            $debt->imf =$request->imf;
            $debt->adf_adb=$request->adf_adb;
            $debt->ida =$request->ida;
            $debt->commercial_banks=$request->commercial_banks;
            $debt->others=$request->others;
            $debt->year=$request->year;
            $debt->save();
             return response()->json($debt);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($outstanding_debt_id)
    {
       
         
         $debt = finance_outstanding_debt_international_organization_model::findOrfail($outstanding_debt_id);

  
          echo json_encode($debt);     
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
     'ida'=>'required|numeric',
      'eec_eib'=>'required|numeric',
      'imf'=>'required|numeric',
      'adf_adb'=>'required|numeric',
      'commercial_banks'=>'required|numeric',
       'others'=>'required|numeric',
      'year'=>'required|numeric' 
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
            $debt =finance_outstanding_debt_international_organization_model::find($request->id);
            $debt->ida =$request->ida;
            $debt->eec_eib=$request->eec_eib;
            $debt->imf =$request->imf;
            $debt->adf_adb=$request->adf_adb;
            $debt->ida =$request->ida;
            $debt->commercial_banks=$request->commercial_banks;
            $debt->others=$request->others;
            $debt->year=$request->year;
            $debt->save();
             return response()->json($debt);
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
