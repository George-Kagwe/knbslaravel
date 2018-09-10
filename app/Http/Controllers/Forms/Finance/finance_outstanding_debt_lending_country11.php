<?php

namespace App\Http\Controllers\Forms\Finance;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Finance\finance_outstanding_debt_lending_country_Model;
use View;
class finance_outstanding_debt_lending_country extends Controller
{
    protected $rules =
    [
                          'germany'=>'required|numeric',
                          'japan' =>'required|numeric',
                          'france' =>'required|numeric',
                          'usa' =>'required|numeric',
                  
                          'netherlands' =>'required|numeric',
                          'denmark' =>'required|numeric',
               'denmark' =>'required|numeric',
                              'denmark' =>'required|numeric',
                                             'denmark' =>'required|numeric',
                                             

                          'year' =>'required|numeric'
    ];
    public function index()
    {
        //fetch all records

        $finance_outstanding_debt_lending_country =finance_outstanding_debt_lending_country_Model::all();
        
        return view('forms.finance.national.finance_outstanding_debt_lending_country',['post' =>$finance_outstanding_debt_lending_country]);

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
     
                          'germany'=>'required|numeric',
                          'japan' =>'required|numeric',
                          'france' =>'required|numeric',
                          'usa' =>'required|numeric',
                          'netherlands' =>'required|numeric',
                          'denmark' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $commodity = new finance_outstanding_debt_lending_country_Model();
            $commodity->germany =$request->germany;
            $commodity->japan=$request->japan;
            $commodity->franc=$request->fran;
            $commodity->usa=$request->usa;
      
            $commodity->netherlands=$request->netherlands;
            $commodity->denmark=$request->denmark;
         
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
            
         
         $commodity = finance_outstanding_debt_lending_country_Model::findOrfail($excise_id);

  
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
     
                          'germany'=>'required|numeric',
                          'japan' =>'required|numeric',
                          'france' =>'required|numeric',
                          'usa' =>'required|numeric',
                    
                          'netherlands' =>'required|numeric',
                          'year' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $commodity =finance_outstanding_debt_lending_country_Model::find($request->id);
            $commodity->germany =$request->germany;
            $commodity->japan=$request->japan;
            $commodity->franc=$request->fran;
            $commodity->usa=$request->usa;
    
            $commodity->netherlands=$request->netherlands;
            $commodity->denmark=$request->denmark;

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
