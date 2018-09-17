<?php

namespace App\Http\Controllers\Forms\Poverty;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Poverty\poverty_distribution_of_households_by_pointofpurchasedfooditems_model;
use View;
use Illuminate\Support\Facades\DB;

//@Charles Ndirangu
//point of purchase for food items
  
class poverty_distribution_of_households_by_pointofpurchasedfooditems extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules = [ 
        'county_id'=>'required',
        'supermarket'=>'required|numeric',
        'open_market'=>'required|numeric',
        'kiosk'=>'required|numeric',
        'general_shop'=>'required|numeric',
        'specialised_shop'=>'required|numeric',
        'informal_sources'=>'required|numeric',
        'other_formal_points'=>'required|numeric',
        'number_of_observations'=>'required|numeric',
        

    ];
    public function index()
    {
        $pop_items = DB::table('poverty_distribution_of_households_by_pointofpurchasedfooditems')
               ->join('health_counties', 'poverty_distribution_of_households_by_pointofpurchasedfooditems.county_id', '=', 'health_counties.county_id')->orderBy('poverty_id', 'ASC')->get();

        $counties = DB::table('health_counties')->get();

        return view('Forms.Poverty.county.poverty_distribution_of_households_by_pointofpurchasedfooditems', ['pop_items' =>$pop_items,'counties' =>$counties]);
 
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
                            'supermarket'=>'required|numeric',
                            'open_market'=>'required|numeric',
                            'kiosk'=>'required|numeric',
                            'general_shop'=>'required|numeric',
                            'specialised_shop'=>'required|numeric',
                            'informal_sources'=>'required|numeric',
                            'other_formal_points'=>'required|numeric',
                            'number_of_observations'=>'required|numeric',
        ]);
         
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $pop_items = new poverty_distribution_of_households_by_pointofpurchasedfooditems_model();
            $pop_items->county_id =$request->county_name;
            $pop_items->supermarket=$request->supermarket;
            $pop_items->open_market=$request->open_market;         
            $pop_items->kiosk=$request->kiosk;
            $pop_items->general_shop=$request->general_shop;
            $pop_items->specialised_shop=$request->specialised_shop;
            $pop_items->informal_sources=$request->informal_sources;
            $pop_items->other_formal_points=$request->other_formal_points;
            $pop_items->number_of_observations=$request->number_of_observations;
            $pop_items->save();
             return response()->json($pop_items);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($poverty_id)
    {
        
          $pop_items = poverty_distribution_of_households_by_pointofpurchasedfooditems_model::findOrfail($poverty_id);
     
      
         echo json_encode($pop_items);
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
                            'supermarket'=>'required|numeric',
                            'open_market'=>'required|numeric',
                            'kiosk'=>'required|numeric',
                            'general_shop'=>'required|numeric',
                            'specialised_shop'=>'required|numeric',
                            'informal_sources'=>'required|numeric',
                            'other_formal_points'=>'required|numeric',
                            'number_of_observations'=>'required|numeric',
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $pop_items =poverty_distribution_of_households_by_pointofpurchasedfooditems_model::find($request->id);
            $pop_items->county_id =$request->county_name;
            $pop_items->supermarket=$request->supermarket;
            $pop_items->open_market=$request->open_market;         
            $pop_items->kiosk=$request->kiosk;
            $pop_items->general_shop=$request->general_shop;
            $pop_items->specialised_shop=$request->specialised_shop;
            $pop_items->informal_sources=$request->informal_sources;
            $pop_items->other_formal_points=$request->other_formal_points;
            $pop_items->number_of_observations=$request->number_of_observations;
            $pop_items->save();
             return response()->json($pop_items);
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
