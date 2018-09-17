<?php

namespace App\Http\Controllers\Forms\Governance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Governance\governance_identity_cards_made_processed_and_collected_model;
use View;
use Illuminate\Support\Facades\DB;

class governance_identity_cards_made_processed_and_collected extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       protected $rules =
    [

      'county_id'=>'required|numeric',
  
      'npr_apps_made'=>'required|numeric',
      'npr_ids_prod'=>'required|numeric',
      'npr_ids_collected'=>'required|numeric',
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        //
        $data = DB::table('governance_identity_cards_made_processed_and_collected')
               ->join('health_counties', 'governance_identity_cards_made_processed_and_collected.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('nprs_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.Governance.county.governanceidentitycardsmadeprocessedandcollected',
                 
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
  
      'npr_apps_made'=>'required|numeric',
      'npr_ids_prod'=>'required|numeric',
      'npr_ids_collected'=>'required|numeric',
      'year'=>'required|numeric'
                           
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $nprs = new governance_identity_cards_made_processed_and_collected_model();
            $nprs->county_id =$request->county_id;
            $nprs->npr_apps_made=$request->npr_apps_made;
             $nprs->npr_ids_prod=$request->npr_ids_prod;
              $nprs->npr_ids_collected=$request->npr_ids_collected;
               $nprs->year=$request->year;
            $nprs->save();
             return response()->json($nprs);
           echo json_encode(array("status" => TRUE));

        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nprs_id)
    {
        //
         $nprs = governance_identity_cards_made_processed_and_collected_model::findOrfail($nprs_id);

  
          echo json_encode($nprs);  
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
  
      'npr_apps_made'=>'required|numeric',
      'npr_ids_prod'=>'required|numeric',
      'npr_ids_collected'=>'required|numeric',
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $nprs =governance_identity_cards_made_processed_and_collected_model::find($request->id);
    $nprs->county_id =$request->county_id;
            $nprs->npr_apps_made=$request->npr_apps_made;
             $nprs->npr_ids_prod=$request->npr_ids_prod;
              $nprs->npr_ids_collected=$request->npr_ids_collected;
               $nprs->year=$request->year;
            $nprs->save();
             return response()->json($nprs);
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
