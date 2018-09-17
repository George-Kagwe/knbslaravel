<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_population_that_didntuseinternet_by_reason_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households without internet
  
class ict_kihibs_population_that_didntuseinternet_by_reason extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [
            'county_id'=>'required',
            'population'=>'required|numeric',
            'too_young'=>'required|numeric',
            'dont_need'=>'required|numeric',
            'lack_skill'=>'required|numeric',
            'expensive'=>'required|numeric',
            'no_internet'=>'required|numeric',
            'culture'=>'required|numeric',
            'control'=>'required|numeric',
            'security'=>'required|numeric',
            'others'=>'required|numeric',
            'not_stated'=>'required|numeric',
            
              
 
    ];
    public function index()
    {
        $lack_net = DB::table('ict_kihibs_population_that_didntuseinternet_by_reason')
               ->join('health_counties', 'ict_kihibs_population_that_didntuseinternet_by_reason.county_id', '=', 'health_counties.county_id')->orderBy('proportion_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_population_that_didntuseinternet_by_reason', ['no_internets' =>$lack_net,'counties' =>$counties]);
 
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
            'county_name'=>'required',
            'population'=>'required|numeric',
            'too_young'=>'required|numeric',
            'dont_need'=>'required|numeric',
            'lack_skill'=>'required|numeric',
            'expensive'=>'required|numeric',
            'no_internet'=>'required|numeric',
            'culture'=>'required|numeric',
            'control'=>'required|numeric',
            'security'=>'required|numeric',
            'others'=>'required|numeric',
            'not_stated'=>'required|numeric',
           
              
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $lack_net = new ict_kihibs_population_that_didntuseinternet_by_reason_model();
            $lack_net->county_id =$request->county_name;
            $lack_net->population=$request->population;
            $lack_net->too_young=$request->too_young;         
            $lack_net->dont_need=$request->dont_need;
            $lack_net->lack_skill=$request->lack_skill;
            $lack_net->expensive=$request->expensive;
            $lack_net->no_internet=$request->no_internet;         
            $lack_net->culture=$request->culture;
            $lack_net->control=$request->control;
            $lack_net->security=$request->security;
            $lack_net->others=$request->others;
            $lack_net->not_stated=$request->not_stated;
            $lack_net->save();
             return response()->json($lack_net);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($proportion_id)
    {
        
          $lack_net = ict_kihibs_population_that_didntuseinternet_by_reason_model::findOrfail($proportion_id);
     
      
         echo json_encode($lack_net);
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
            'county_name'=>'required',
            'population'=>'required|numeric',
            'too_young'=>'required|numeric',
            'dont_need'=>'required|numeric',
            'lack_skill'=>'required|numeric',
            'expensive'=>'required|numeric',
            'no_internet'=>'required|numeric',
            'culture'=>'required|numeric',
            'control'=>'required|numeric',
            'security'=>'required|numeric',
            'others'=>'required|numeric',
            'not_stated'=>'required|numeric',
            
            
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $lack_net =ict_kihibs_population_that_didntuseinternet_by_reason_model::find($request->id);
            $lack_net->county_id =$request->county_name;
            $lack_net->population=$request->population;
            $lack_net->too_young=$request->too_young;         
            $lack_net->dont_need=$request->dont_need;
            $lack_net->lack_skill=$request->lack_skill;
            $lack_net->expensive=$request->expensive;
            $lack_net->no_internet=$request->no_internet;         
            $lack_net->culture=$request->culture;
            $lack_net->control=$request->control;
            $lack_net->security=$request->security;
            $lack_net->others=$request->others;
            $lack_net->not_stated=$request->not_stated;
            $lack_net->save();
             return response()->json($lack_net);
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
    