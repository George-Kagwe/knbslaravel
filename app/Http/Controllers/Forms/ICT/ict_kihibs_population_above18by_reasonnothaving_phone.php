<?php

namespace App\Http\Controllers\Forms\ICT;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\ICT\ict_kihibs_population_above18by_reasonnothaving_phone_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//households without internet
  
class ict_kihibs_population_above18by_reasonnothaving_phone extends Controller
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
            'restricted'=>'required|numeric',
            'no_network'=>'required|numeric',
            'gender_bias'=>'required|numeric',
            'no_electricity'=>'required|numeric',
            'phone_expe'=>'required|numeric',
            'maintain_expe'=>'required|numeric',
            'other'=>'required|numeric',
              
 
    ];
    public function index()
    {
        $no_phone = DB::table('ict_kihibs_population_above18by_reasonnothaving_phone')
               ->join('health_counties', 'ict_kihibs_population_above18by_reasonnothaving_phone.county_id', '=', 'health_counties.county_id')->orderBy('population_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.ICT.county.ict_kihibs_population_above18by_reasonnothaving_phone', ['no_phones' =>$no_phone,'counties' =>$counties]);
 
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
            'restricted'=>'required|numeric',
            'no_network'=>'required|numeric',
            'gender_bias'=>'required|numeric',
            'no_electricity'=>'required|numeric',
            'phone_expe'=>'required|numeric',
            'maintain_expe'=>'required|numeric',
            'other'=>'required|numeric',
              
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $no_phone = new ict_kihibs_population_above18by_reasonnothaving_phone_model();
            $no_phone->county_id =$request->county_name;
            $no_phone->population=$request->population;
            $no_phone->too_young=$request->too_young;         
            $no_phone->dont_need=$request->dont_need;
            $no_phone->restricted=$request->restricted;
            $no_phone->no_network=$request->no_network;
            $no_phone->gender_bias=$request->gender_bias;         
            $no_phone->no_electricity=$request->no_electricity;
            $no_phone->phone_expe=$request->phone_expe;
            $no_phone->maintain_expe=$request->maintain_expe;
            $no_phone->other=$request->other;
            $no_phone->save();
             return response()->json($no_phone);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($population_id)
    {
        
          $no_phone = ict_kihibs_population_above18by_reasonnothaving_phone_model::findOrfail($population_id);
     
      
         echo json_encode($no_phone);
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
            'restricted'=>'required|numeric',
            'no_network'=>'required|numeric',
            'gender_bias'=>'required|numeric',
            'no_electricity'=>'required|numeric',
            'phone_expe'=>'required|numeric',
            'maintain_expe'=>'required|numeric',
            'other'=>'required|numeric',
            
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $no_phone =ict_kihibs_population_above18by_reasonnothaving_phone_model::find($request->id);
            $no_phone->county_id =$request->county_name;
            $no_phone->population=$request->population;
            $no_phone->too_young=$request->too_young;         
            $no_phone->dont_need=$request->dont_need;
            $no_phone->restricted=$request->restricted;
            $no_phone->no_network=$request->no_network;
            $no_phone->gender_bias=$request->gender_bias;         
            $no_phone->no_electricity=$request->no_electricity;
            $no_phone->phone_expe=$request->phone_expe;
            $no_phone->maintain_expe=$request->maintain_expe;
            $no_phone->other=$request->other;
            $no_phone->save();
             return response()->json($no_phone);
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
    