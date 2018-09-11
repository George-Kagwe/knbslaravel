<?php

namespace App\Http\Controllers\Forms\Finance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_excise_revenue_commodity_Model;
use View;
class finance_excise_revenue_commodity extends Controller
{
    protected $rules =
    [
                          'beer'=>'required|numeric',
                          'cigarettes' =>'required|numeric',
                          'mineral_waters' =>'required|numeric',
                          'wines_spirits' =>'required|numeric',
                  
                          'other_commodities' =>'required|numeric',
                          'total' =>'required|numeric',
                          'year' =>'required|numeric'
    ];
    public function index()
    {
        //fetch all records

        $finance_excise_revenue_commodity =finance_excise_revenue_commodity_Model::all();
        
        return view('forms.finance.national.finance_excise_revenue_commodity',['post' =>$finance_excise_revenue_commodity]);

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
     
                          'beer'=>'required|numeric',
                          'cigarettes' =>'required|numeric',
                          'mineral_waters' =>'required|numeric',
                          'wines_spirits' =>'required|numeric',
                          'other_commodities' =>'required|numeric',
                          'total' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $commodity = new finance_excise_revenue_commodity_Model();
            $commodity->beer =$request->beer;
            $commodity->cigarettes=$request->cigarettes;
            $commodity->mineral_waters=$request->mineral_waters;
            $commodity->wines_spirits=$request->wines_spirits;
      
            $commodity->other_commodities=$request->other_commodities;
            $commodity->total=$request->total;
         
            $commodity->year=$request->year;
            $commodity->save();
             return response()->json($commodity);
           echo json_encode(array("status" => TRUE));

        }   

         }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($excise_id)
    {
            
         
         $commodity = finance_excise_revenue_commodity_Model::findOrfail($excise_id);

  
          echo json_encode($commodity);    


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
     
                          'beer'=>'required|numeric',
                          'cigarettes' =>'required|numeric',
                          'mineral_waters' =>'required|numeric',
                          'wines_spirits' =>'required|numeric',
                    
                          'other_commodities' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $commodity =finance_excise_revenue_commodity_Model::find($request->id);
            $commodity->beer =$request->beer;
            $commodity->cigarettes=$request->cigarettes;
            $commodity->mineral_waters=$request->mineral_waters;
            $commodity->wines_spirits=$request->wines_spirits;
    
            $commodity->other_commodities=$request->other_commodities;
            $commodity->total=$request->total;

            $commodity->year=$request->year;
            $commodity->save();
             return response()->json($commodity);
           echo json_encode(array("status" => TRUE));

        }       }

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
