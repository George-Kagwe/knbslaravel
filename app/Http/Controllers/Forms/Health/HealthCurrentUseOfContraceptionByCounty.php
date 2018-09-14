<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthCurrentUseOfContraceptionByCounty_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthCurrentUseOfContraceptionByCounty extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'any_modem_method' =>'required|numeric'
                        
                          
    ];
    public function index()
    {
        //
        $data = DB::table('health_current_use_of_contraception_by_county')
               ->join('health_counties', 'health_current_use_of_contraception_by_county.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('contraception_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthcurrentuseofcontraceptionbycounty',
                 
                   ['post' =>$data,'counties' =>$counties
                   ]);
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
     'county_id'=>'required|numeric',
                          'any_modem_method' =>'required|numeric'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $contraception = new HealthCurrentUseOfContraceptionByCounty_Model();
            $contraception->county_id =$request->county_id;
            $contraception->any_modem_method=$request->any_modem_method;
            
            $contraception->save();
             return response()->json($contraception);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($contraception_id)
    {
        //
        $contraception = HealthCurrentUseOfContraceptionByCounty_Model::findOrfail($contraception_id);

  
          echo json_encode($contraception);  
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
     
                'county_id'=>'required|numeric',
                          'any_modem_method' =>'required|numeric'
                            
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $contraception =HealthCurrentUseOfContraceptionByCounty_Model::find($request->id);
   $contraception->county_id =$request->county_id;
            $contraception->any_modem_method=$request->any_modem_method;
           
            $contraception->save();
             return response()->json($contraception);
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
