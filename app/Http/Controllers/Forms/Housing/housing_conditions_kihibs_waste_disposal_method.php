<?php

namespace App\Http\Controllers\Forms\housing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\models\housing\housing_conditions_kihibs_waste_disposal_method_model;
use View;
use Illuminate\Support\Facades\DB;

class housing_conditions_kihibs_waste_disposal_method extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

     protected $rules = [     'county_id'=>'required',
                          'county_gov'=>'required',
                          'community'=>'required|numeric',
                          'private_co'=>'required|numeric',
                          'dumped_compound'=>'required|numeric',
                          'dumped_street'=>'required|numeric',
                          'dumped_latrine'=>'required|numeric',
                         'burnt'=>'required|numeric',
                          'buried'=>'required|numeric',
                       
                           'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

                         ];
    public function index()
    {
        $data = DB::table('housing_conditions_kihibs_waste_disposal_method')
               ->join('health_counties', 'housing_conditions_kihibs_waste_disposal_method.county_id', '=', 'health_counties.county_id')
                ->orderBy('method_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();


      
        return view('forms.housing.county.housing_conditions_kihibs_waste_disposal_method',
                 
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
                          'county_id'=>'required',
                          'county_gov'=>'required',
                          'community'=>'required|numeric',
                          'private_co'=>'required|numeric',
                          'dumped_compound'=>'required|numeric',
                          'dumped_street'=>'required|numeric',
                          'dumped_latrine'=>'required|numeric',
                         'burnt'=>'required|numeric',
                          'buried'=>'required|numeric',
                       
                           'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
               

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $waste = new housing_conditions_kihibs_waste_disposal_method_model();
            $waste->county_id =$request->county_id;
            $waste->county_gov=$request->county_gov;
            $waste->community=$request->community;         
            $waste->private_co=$request->private_co;
            $waste->dumped_compound=$request->dumped_compound;
            $waste->dumped_street=$request->dumped_street;         
            $waste->dumped_latrine=$request->dumped_latrine;
            $waste->burnt=$request->burnt;
            $waste->buried=$request->buried;
            $waste->other=$request->other;       
            $waste->not_stated=$request->not_stated;
            $waste->households=$request->households;
         
         
            $waste->save();
             return response()->json($waste);
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
      
          $waste = housing_conditions_kihibs_waste_disposal_method_model::findOrfail($id);
     
      
         echo json_encode($waste);
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
                           'county_id'=>'required',
                          'county_gov'=>'required',
                          'community'=>'required|numeric',
                          'private_co'=>'required|numeric',
                          'dumped_compound'=>'required|numeric',
                          'dumped_street'=>'required|numeric',
                          'dumped_latrine'=>'required|numeric',
                         'burnt'=>'required|numeric',
                         'buried'=>'required|numeric',
                          'other'=>'required|numeric',
                          'not_stated'=>'required|numeric',
                          'households'=>'required|numeric',
                    

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            
           $waste =housing_conditions_kihibs_waste_disposal_method_model::find($request->id);
           $waste->county_id =$request->county_id;
           $waste->county_gov=$request->county_gov;
           $waste->community=$request->community;         
           $waste->private_co=$request->private_co;
           $waste->dumped_compound=$request->dumped_compound;
           $waste->dumped_street=$request->dumped_street;         
           $waste->dumped_latrine=$request->dumped_latrine;
           $waste->burnt=$request->burnt;
           $waste->buried=$request->buried;
           $waste->other=$request->other;   
           $waste->not_stated=$request->not_stated;
           $waste->households=$request->households;                                    
        
            $waste->save();
             return response()->json($waste);
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
