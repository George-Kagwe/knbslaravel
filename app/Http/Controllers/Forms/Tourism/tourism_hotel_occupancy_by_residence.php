<?php

namespace App\Http\Controllers\Forms\Tourism;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Tourism\tourism_hotel_occupancy_by_residence_model;
use View;
 
//@Charles Ndirangu
//Tourism Occupancy by Residence

class tourism_hotel_occupancy_by_residence extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        
            'permanent_occupants'=>'required|numeric',
            'germany'=>'required|numeric',
            'switzerland'=>'required|numeric',
            'united_kingdom'=>'required|numeric',
            'italy'=>'required|numeric',
            'france'=>'required|numeric',
            'scandinavia'=>'required|numeric',
            'other_europe'=>'required|numeric',
            'europe'=>'required|numeric',
            'kenya_residents'=>'required|numeric',
            'uganda'=>'required|numeric',
            'tanzania'=>'required|numeric',
            'east_and_central_africa'=>'required|numeric',
            'west_africa'=>'required|numeric',
            'north_africa'=>'required|numeric',
            'south_africa'=>'required|numeric',
            'other_africa'=>'required|numeric',
            'africa'=>'required|numeric',
            'usa'=>'required|numeric',
            'canada'=>'required|numeric',
            'other_america'=>'required|numeric',
            'america'=>'required|numeric',
            'japan'=>'required|numeric',
            'india'=>'required|numeric',
            'middle_east'=>'required|numeric',
            'other_asia'=>'required|numeric',
            'asia'=>'required|numeric',
            'australia_and_new_zealand'=>'required|numeric',
            'all_other_countries'=>'required|numeric',
            'total_occupied'=>'required|numeric',
            'total_available'=>'required|numeric',
            'occupancy_percentage_rate'=>'required|numeric',
            'year'=>'required|numeric'
    ];
    public function index()
    {
         $occupancy_by_residency = tourism_hotel_occupancy_by_residence_model::all();
        return view('Forms.Tourism.national.tourism_hotel_occupancy_by_residence',['occupancy' =>$occupancy_by_residency]);
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
                'permanent_occupants'=>'required|numeric',
                'germany'=>'required|numeric',
                'switzerland'=>'required|numeric',
                'united_kingdom'=>'required|numeric',
                'italy'=>'required|numeric',
                'france'=>'required|numeric',
                'scandinavia'=>'required|numeric',
                'other_europe'=>'required|numeric',
                'europe'=>'required|numeric',
                'kenya_residents'=>'required|numeric',
                'uganda'=>'required|numeric',
                'tanzania'=>'required|numeric',
                'east_and_central_africa'=>'required|numeric',
                'west_africa'=>'required|numeric',
                'north_africa'=>'required|numeric',
                'south_africa'=>'required|numeric',
                'other_africa'=>'required|numeric',
                'africa'=>'required|numeric',
                'usa'=>'required|numeric',
                'canada'=>'required|numeric',
                'other_america'=>'required|numeric',
                'america'=>'required|numeric',
                'japan'=>'required|numeric',
                'india'=>'required|numeric',
                'middle_east'=>'required|numeric',
                'other_asia'=>'required|numeric',
                'asia'=>'required|numeric',
                'australia_and_new_zealand'=>'required|numeric',
                'all_other_countries'=>'required|numeric',
                'total_occupied'=>'required|numeric',
                'total_available'=>'required|numeric',
                'occupancy_percentage_rate'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $occupancy = new tourism_hotel_occupancy_by_residence_model();
            $occupancy->permanent_occupants=$request->permanent_occupants;
            $occupancy->germany=$request->germany;
            $occupancy->switzerland=$request->switzerland;
            $occupancy->united_kingdom=$request->united_kingdom;
            $occupancy->italy=$request->italy;
            $occupancy->france=$request->france;
            $occupancy->scandinavia=$request->scandinavia;
            $occupancy->other_europe=$request->other_europe;
            $occupancy->europe=$request->europe;
            $occupancy->kenya_residents=$request->kenya_residents;
            $occupancy->uganda=$request->uganda;
            $occupancy->tanzania=$request->tanzania;
            $occupancy->east_and_central_africa=$request->east_and_central_africa;
            $occupancy->west_africa=$request->west_africa;
            $occupancy->north_africa=$request->north_africa;
            $occupancy->south_africa=$request->south_africa;
            $occupancy->other_africa=$request->other_africa;
            $occupancy->africa=$request->africa;
            $occupancy->usa=$request->usa;
            $occupancy->canada=$request->canada;
            $occupancy->other_america=$request->other_america;
            $occupancy->america=$request->america;
            $occupancy->japan=$request->japan;
            $occupancy->india=$request->india;
            $occupancy->middle_east=$request->middle_east;
            $occupancy->other_asia=$request->other_asia;
            $occupancy->asia=$request->asia;
            $occupancy->australia_and_new_zealand=$request->australia_and_new_zealand;
            $occupancy->all_other_countries=$request->all_other_countries;
            $occupancy->total_occupied=$request->total_occupied;
            $occupancy->total_available=$request->total_available;
            $occupancy->occupancy_percentage_rate=$request->occupancy_percentage_rate;
            $occupancy->year=$request->year;
            $occupancy->save();
             return response()->json($occupancy);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($hotel_occupancy_id)
    {
        $occupancy = tourism_hotel_occupancy_by_residence_model::findOrfail($hotel_occupancy_id);
        echo json_encode($occupancy);
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
                'permanent_occupants'=>'required|numeric',
                'germany'=>'required|numeric',
                'switzerland'=>'required|numeric',
                'united_kingdom'=>'required|numeric',
                'italy'=>'required|numeric',
                'france'=>'required|numeric',
                'scandinavia'=>'required|numeric',
                'other_europe'=>'required|numeric',
                'europe'=>'required|numeric',
                'kenya_residents'=>'required|numeric',
                'uganda'=>'required|numeric',
                'tanzania'=>'required|numeric',
                'east_and_central_africa'=>'required|numeric',
                'west_africa'=>'required|numeric',
                'north_africa'=>'required|numeric',
                'south_africa'=>'required|numeric',
                'other_africa'=>'required|numeric',
                'africa'=>'required|numeric',
                'usa'=>'required|numeric',
                'canada'=>'required|numeric',
                'other_america'=>'required|numeric',
                'america'=>'required|numeric',
                'japan'=>'required|numeric',
                'india'=>'required|numeric',
                'middle_east'=>'required|numeric',
                'other_asia'=>'required|numeric',
                'asia'=>'required|numeric',
                'australia_and_new_zealand'=>'required|numeric',
                'all_other_countries'=>'required|numeric',
                'total_occupied'=>'required|numeric',
                'total_available'=>'required|numeric',
                'occupancy_percentage_rate'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $occupancy =  tourism_hotel_occupancy_by_residence_model::find($request->id);
            $occupancy->permanent_occupants=$request->permanent_occupants;
            $occupancy->germany=$request->germany;
            $occupancy->switzerland=$request->switzerland;
            $occupancy->united_kingdom=$request->united_kingdom;
            $occupancy->italy=$request->italy;
            $occupancy->france=$request->france;
            $occupancy->scandinavia=$request->scandinavia;
            $occupancy->other_europe=$request->other_europe;
            $occupancy->europe=$request->europe;
            $occupancy->kenya_residents=$request->kenya_residents;
            $occupancy->uganda=$request->uganda;
            $occupancy->tanzania=$request->tanzania;
            $occupancy->east_and_central_africa=$request->east_and_central_africa;
            $occupancy->west_africa=$request->west_africa;
            $occupancy->north_africa=$request->north_africa;
            $occupancy->south_africa=$request->south_africa;
            $occupancy->other_africa=$request->other_africa;
            $occupancy->africa=$request->africa;
            $occupancy->usa=$request->usa;
            $occupancy->canada=$request->canada;
            $occupancy->other_america=$request->other_america;
            $occupancy->america=$request->america;
            $occupancy->japan=$request->japan;
            $occupancy->india=$request->india;
            $occupancy->middle_east=$request->middle_east;
            $occupancy->other_asia=$request->other_asia;
            $occupancy->asia=$request->asia;
            $occupancy->australia_and_new_zealand=$request->australia_and_new_zealand;
            $occupancy->all_other_countries=$request->all_other_countries;
            $occupancy->total_occupied=$request->total_occupied;
            $occupancy->total_available=$request->total_available;
            $occupancy->occupancy_percentage_rate=$request->occupancy_percentage_rate;
            $occupancy->year=$request->year;
            $occupancy->save();
             return response()->json($occupancy);
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
