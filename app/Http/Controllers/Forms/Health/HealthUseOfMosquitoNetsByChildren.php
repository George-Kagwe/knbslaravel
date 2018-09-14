<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthUseOfMosquitoNetsByChildren_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthUseOfMosquitoNetsByChildren extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'children_under_five_years_who_slept_under_nets_last_night' =>'required|numeric'
                          
    ];
    public function index()
    {
        //
        $data = DB::table('health_use_of_mosquito_nets_by_children')
               ->join('health_counties', 'health_use_of_mosquito_nets_by_children.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('use_mosquito_net_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthuseofmosquitonetsbychildren',
                 
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
                          'children_under_five_years_who_slept_under_nets_last_night' =>'required|numeric'
                          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $mosquito = new HealthUseOfMosquitoNetsByChildren_Model();
            $mosquito->county_id =$request->county_id;
            $mosquito->children_under_five_years_who_slept_under_nets_last_night=$request->children_under_five_years_who_slept_under_nets_last_night;
           
            $mosquito->save();
             return response()->json($mosquito);
           echo json_encode(array("status" => TRUE));

        }   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($use_mosquito_net_id)
    {
        //
               $mosquito = HealthUseOfMosquitoNetsByChildren_Model::findOrfail($use_mosquito_net_id);

  
          echo json_encode($mosquito); 
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
                          'children_under_five_years_who_slept_under_nets_last_night' =>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $mosquito =HealthUseOfMosquitoNetsByChildren_Model::find($request->id);
   $mosquito->county_id =$request->county_id;
            $mosquito->children_under_five_years_who_slept_under_nets_last_night=$request->children_under_five_years_who_slept_under_nets_last_night;
          
            $mosquito->save();
             return response()->json($mosquito);
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
