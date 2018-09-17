<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_population_that_used_internet_by_purpose_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households without internet
  
class ict_kihibs_population_that_used_internet_by_purpose extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [
            'county_id'=>'required',
            'seek_info'=>'required|numeric',
            'make_app'=>'required|numeric',
            'get_info'=>'required|numeric',
            'newspaper'=>'required|numeric',
            'banking'=>'required|numeric',
            'voip'=>'required|numeric',
            'selling'=>'required|numeric',
            'ordering'=>'required|numeric',
            'course'=>'required|numeric',
            'research'=>'required|numeric', 
            'informative'=>'required|numeric',
            'write_article'=>'required|numeric',
            'social_nets'=>'required|numeric',
            'movie'=>'required|numeric',
            'search_work'=>'required|numeric',
            'other'=>'required|numeric',
            'population'=>'required|numeric',  
                          
 
    ];
    public function index()
    {
        $net_purpose = DB::table('ict_kihibs_population_that_used_internet_by_purpose')
               ->join('health_counties', 'ict_kihibs_population_that_used_internet_by_purpose.county_id', '=', 'health_counties.county_id')->orderBy('distribution_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_population_that_used_internet_by_purpose', ['net_purposes' =>$net_purpose,'counties' =>$counties]);
 
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
            'seek_info'=>'required|numeric',
            'make_app'=>'required|numeric',
            'get_info'=>'required|numeric',
            'newspaper'=>'required|numeric',
            'banking'=>'required|numeric',
            'voip'=>'required|numeric',
            'selling'=>'required|numeric',
            'ordering'=>'required|numeric',
            'course'=>'required|numeric',
            'research'=>'required|numeric', 
            'informative'=>'required|numeric',
            'write_article'=>'required|numeric',
            'social_nets'=>'required|numeric',
            'movie'=>'required|numeric',
            'search_work'=>'required|numeric',
            'other'=>'required|numeric',
            'population'=>'required|numeric',  
              
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $net_purpose = new ict_kihibs_population_that_used_internet_by_purpose_model();
            $net_purpose->county_id =$request->county_name;
            $net_purpose->seek_info=$request->seek_info;
            $net_purpose->make_app=$request->make_app;         
            $net_purpose->get_info=$request->get_info;
            $net_purpose->newspaper=$request->newspaper;
            $net_purpose->banking=$request->banking;
            $net_purpose->voip=$request->voip;         
            $net_purpose->selling=$request->selling;
            $net_purpose->ordering=$request->ordering;
            $net_purpose->course=$request->course;
            $net_purpose->research=$request->research;
            $net_purpose->informative=$request->informative;
            $net_purpose->write_article=$request->write_article;
            $net_purpose->social_nets=$request->social_nets;         
            $net_purpose->movie=$request->movie;
            $net_purpose->search_work=$request->search_work;
            $net_purpose->other=$request->other;
            $net_purpose->population=$request->population;
            $net_purpose->save();
             return response()->json($net_purpose);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($distribution_id)
    {
        
          $net_purpose = ict_kihibs_population_that_used_internet_by_purpose_model::findOrfail($distribution_id);
     
      
         echo json_encode($net_purpose);
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
            'seek_info'=>'required|numeric',
            'make_app'=>'required|numeric',
            'get_info'=>'required|numeric',
            'newspaper'=>'required|numeric',
            'banking'=>'required|numeric',
            'voip'=>'required|numeric',
            'selling'=>'required|numeric',
            'ordering'=>'required|numeric',
            'course'=>'required|numeric',
            'research'=>'required|numeric', 
            'informative'=>'required|numeric',
            'write_article'=>'required|numeric',
            'social_nets'=>'required|numeric',
            'movie'=>'required|numeric',
            'search_work'=>'required|numeric',
            'other'=>'required|numeric',
            'population'=>'required|numeric',  
            
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $net_purpose =ict_kihibs_population_that_used_internet_by_purpose_model::find($request->id);
            $net_purpose->county_id =$request->county_name;
            $net_purpose->seek_info=$request->seek_info;
            $net_purpose->make_app=$request->make_app;         
            $net_purpose->get_info=$request->get_info;
            $net_purpose->newspaper=$request->newspaper;
            $net_purpose->banking=$request->banking;
            $net_purpose->voip=$request->voip;         
            $net_purpose->selling=$request->selling;
            $net_purpose->ordering=$request->ordering;
            $net_purpose->course=$request->course;
            $net_purpose->research=$request->research;
            $net_purpose->informative=$request->informative;
            $net_purpose->write_article=$request->write_article;
            $net_purpose->social_nets=$request->social_nets;         
            $net_purpose->movie=$request->movie;
            $net_purpose->search_work=$request->search_work;
            $net_purpose->other=$request->other;
            $net_purpose->population=$request->population;
            $net_purpose->save();
             return response()->json($net_purpose);
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
    