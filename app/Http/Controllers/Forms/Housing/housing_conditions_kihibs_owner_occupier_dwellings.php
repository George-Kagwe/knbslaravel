<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_owner_occupier_dwellings_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_owner_occupier_dwellings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'purchased_cash'=>'required',
                          'purchased_loan'=>'required|numeric',
                          'purchased_cash_loan'=>'required|numeric',
                          'constructed_cash'=>'required|numeric',
                          'constructed_loan'=>'required|numeric',
                          'constructed_cash_loan'=>'required|numeric',
                          'inherited'=>'required|numeric',
                          'gift'=>'required|numeric',
                          'bartered'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_owner_occupier_dwellings')
               ->join('health_counties', 'housing_conditions_kihibs_owner_occupier_dwellings.county_id', '=', 'health_counties.county_id')
                ->orderBy('dwelling_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_owner_occupier_dwellings',
                 
                   ['post' =>$data,'counties' =>$counties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       

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
                         'purchased_cash'=>'required',
                          'purchased_loan'=>'required|numeric',
                          'purchased_cash_loan'=>'required|numeric',
                          'constructed_cash'=>'required|numeric',
                          'constructed_loan'=>'required|numeric',
                          'constructed_cash_loan'=>'required|numeric',
                          'inherited'=>'required|numeric',
                          'gift'=>'required|numeric',
                          'bartered'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $occupier = new housing_conditions_kihibs_owner_occupier_dwellings_model();
           $occupier->county_id =$request->county_id;
           $occupier->purchased_cash=$request->purchased_cash;
           $occupier->purchased_loan=$request->purchased_loan;         
           $occupier->purchased_cash_loan=$request->purchased_cash_loan;
           $occupier->constructed_cash=$request->constructed_cash;
           $occupier->constructed_loan=$request->constructed_loan;         
           $occupier->constructed_cash_loan=$request->constructed_cash_loan;
           $occupier->inherited=$request->inherited;
           $occupier->gift=$request->gift;
           $occupier->bartered=$request->bartered;
           $occupier->other=$request->other;
           $occupier->households=$request->households;   
         
         
            $occupier->save();
             return response()->json($occupier);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
          $occupier = housing_conditions_kihibs_owner_occupier_dwellings_model::findOrfail($id);
     
      
         echo json_encode($occupier);
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
                         'purchased_cash'=>'required',
                          'purchased_loan'=>'required|numeric',
                          'purchased_cash_loan'=>'required|numeric',
                          'constructed_cash'=>'required|numeric',
                          'constructed_loan'=>'required|numeric',
                          'constructed_cash_loan'=>'required|numeric',
                          'inherited'=>'required|numeric',
                          'gift'=>'required|numeric',
                          'bartered'=>'required|numeric',
                          'other'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $occupier =housing_conditions_kihibs_owner_occupier_dwellings_model::find($request->id);
           $occupier->county_id =$request->county_id;
           $occupier->purchased_cash=$request->purchased_cash;
           $occupier->purchased_loan=$request->purchased_loan;         
           $occupier->purchased_cash_loan=$request->purchased_cash_loan;
           $occupier->constructed_cash=$request->constructed_cash;
           $occupier->constructed_loan=$request->constructed_loan;         
           $occupier->constructed_cash_loan=$request->constructed_cash_loan;
           $occupier->inherited=$request->inherited;
           $occupier->gift=$request->gift;
           $occupier->bartered=$request->bartered;
           $occupier->other=$request->other;
           $occupier->households=$request->households;                                    
        
            $occupier->save();
             return response()->json($occupier);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
}
