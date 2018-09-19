<?php

namespace App\Http\Controllers\Forms\Tourism;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Tourism\tourism_visitor_to_parks_model;
use View;
 
//@Charles Ndirangu
//Tourism Visitors to Parks

class tourism_visitor_to_parks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
                'nairobi'=>'required|numeric',
                'nairobi_safari_walk'=>'required|numeric',
                'nairobi_mini_orphanage'=>'required|numeric',
                'amboseli'=>'required|numeric',
                'tsavo_west'=>'required|numeric',
                'tsavo_east'=>'required|numeric',
                'aberdare'=>'required|numeric',
                'lake_nakuru'=>'required|numeric',
                'masai_mara'=>'required|numeric',
                'hallers_park'=>'required|numeric',
                'malindi_marine'=>'required|numeric',
                'lake_bogoria'=>'required|numeric',
                'meru'=>'required|numeric',
                'shimba_hills'=>'required|numeric',
                'mt_kenya'=>'required|numeric',
                'samburu'=>'required|numeric',
                'kisite_mpunguti'=>'required|numeric',
                'mombasa_marine'=>'required|numeric',
                'watamu_marine'=>'required|numeric',
                'hells_gate'=>'required|numeric',
                'impala_sanctuary_kisumu'=>'required|numeric',
                'mt_longonot'=>'required|numeric',
                'other'=>'required|numeric',
                'year'=>'required|numeric'
    ];
    public function index()
    {
         $visitors_to_parks = tourism_visitor_to_parks_model::all();
        return view('Forms.Tourism.national.tourism_visitor_to_parks',['visitors' =>$visitors_to_parks]);
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
        
        $validator = \Validator::make($request->all(),
            [   
                'nairobi'=>'required|numeric',
                'nairobi_safari_walk'=>'required|numeric',
                'nairobi_mini_orphanage'=>'required|numeric',
                'amboseli'=>'required|numeric',
                'tsavo_west'=>'required|numeric',
                'tsavo_east'=>'required|numeric',
                'aberdare'=>'required|numeric',
                'lake_nakuru'=>'required|numeric',
                'masai_mara'=>'required|numeric',
                'hallers_park'=>'required|numeric',
                'malindi_marine'=>'required|numeric',
                'lake_bogoria'=>'required|numeric',
                'meru'=>'required|numeric',
                'shimba_hills'=>'required|numeric',
                'mt_kenya'=>'required|numeric',
                'samburu'=>'required|numeric',
                'kisite_mpunguti'=>'required|numeric',
                'mombasa_marine'=>'required|numeric',
                'watamu_marine'=>'required|numeric',
                'hells_gate'=>'required|numeric',
                'impala_sanctuary_kisumu'=>'required|numeric',
                'mt_longonot'=>'required|numeric',
                'other'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $visitors = new tourism_visitor_to_parks_model();
            $visitors->nairobi=$request->nairobi;
            $visitors->nairobi_safari_walk=$request->nairobi_safari_walk;
            $visitors->nairobi_mini_orphanage=$request->nairobi_mini_orphanage;
            $visitors->amboseli=$request->amboseli;
            $visitors->tsavo_west=$request->tsavo_west;
            $visitors->tsavo_east=$request->tsavo_east;
            $visitors->aberdare=$request->aberdare;
            $visitors->lake_nakuru=$request->lake_nakuru;
            $visitors->masai_mara=$request->masai_mara;
            $visitors->hallers_park=$request->hallers_park;
            $visitors->malindi_marine=$request->malindi_marine;
            $visitors->lake_bogoria=$request->lake_bogoria;
            $visitors->meru=$request->meru;
            $visitors->shimba_hills=$request->shimba_hills;
            $visitors->mt_kenya=$request->mt_kenya;
            $visitors->samburu=$request->samburu;
            $visitors->kisite_mpunguti=$request->kisite_mpunguti;
            $visitors->mombasa_marine=$request->mombasa_marine;
            $visitors->watamu_marine=$request->watamu_marine;
            $visitors->hells_gate=$request->hells_gate;
            $visitors->impala_sanctuary_kisumu=$request->impala_sanctuary_kisumu;
            $visitors->mt_longonot=$request->mt_longonot;
            $visitors->other=$request->other;
            $visitors->year=$request->year;
            $visitors->save();
             return response()->json($visitors);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($visitor_parks_id)
    {
        $visitors = tourism_visitor_to_parks_model::findOrfail($visitor_parks_id);
        echo json_encode($visitors);
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
        $validator = \Validator::make($request->all(),
            [
                'nairobi'=>'required|numeric',
                'nairobi_safari_walk'=>'required|numeric',
                'nairobi_mini_orphanage'=>'required|numeric',
                'amboseli'=>'required|numeric',
                'tsavo_west'=>'required|numeric',
                'tsavo_east'=>'required|numeric',
                'aberdare'=>'required|numeric',
                'lake_nakuru'=>'required|numeric',
                'masai_mara'=>'required|numeric',
                'hallers_park'=>'required|numeric',
                'malindi_marine'=>'required|numeric',
                'lake_bogoria'=>'required|numeric',
                'meru'=>'required|numeric',
                'shimba_hills'=>'required|numeric',
                'mt_kenya'=>'required|numeric',
                'samburu'=>'required|numeric',
                'kisite_mpunguti'=>'required|numeric',
                'mombasa_marine'=>'required|numeric',
                'watamu_marine'=>'required|numeric',
                'hells_gate'=>'required|numeric',
                'impala_sanctuary_kisumu'=>'required|numeric',
                'mt_longonot'=>'required|numeric',
                'other'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $visitors =  tourism_visitor_to_parks_model::find($request->id);
            $visitors->nairobi=$request->nairobi;
            $visitors->nairobi_safari_walk=$request->nairobi_safari_walk;
            $visitors->nairobi_mini_orphanage=$request->nairobi_mini_orphanage;
            $visitors->amboseli=$request->amboseli;
            $visitors->tsavo_west=$request->tsavo_west;
            $visitors->tsavo_east=$request->tsavo_east;
            $visitors->aberdare=$request->aberdare;
            $visitors->lake_nakuru=$request->lake_nakuru;
            $visitors->masai_mara=$request->masai_mara;
            $visitors->hallers_park=$request->hallers_park;
            $visitors->malindi_marine=$request->malindi_marine;
            $visitors->lake_bogoria=$request->lake_bogoria;
            $visitors->meru=$request->meru;
            $visitors->shimba_hills=$request->shimba_hills;
            $visitors->mt_kenya=$request->mt_kenya;
            $visitors->samburu=$request->samburu;
            $visitors->kisite_mpunguti=$request->kisite_mpunguti;
            $visitors->mombasa_marine=$request->mombasa_marine;
            $visitors->watamu_marine=$request->watamu_marine;
            $visitors->hells_gate=$request->hells_gate;
            $visitors->impala_sanctuary_kisumu=$request->impala_sanctuary_kisumu;
            $visitors->mt_longonot=$request->mt_longonot;
            $visitors->other=$request->other;
            $visitors->year=$request->year;
            $visitors->save();
             return response()->json($visitors);
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
