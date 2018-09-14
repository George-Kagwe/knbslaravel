<?php

namespace App\Http\Controllers\Forms\Health;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Health\HealthHIVAIDSAwarenessAndTesting_Model;
use View;
use Illuminate\Support\Facades\DB;

class HealthHIVAIDSAwarenessAndTesting extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules =
    [
                          'county_id'=>'required|numeric',
                          'male' =>'required|numeric',
                             'female' =>'required|numeric',
                                'hiv_awareness' =>'required|alpha'
                          
    ];
    public function index()
    {
        //
         $data = DB::table('health_hiv_aids_awareness_and_testing')
               ->join('health_counties', 'health_hiv_aids_awareness_and_testing.county_id', '=', 'health_counties.county_id')
               
                ->orderBy('awareness_id', 'ASC')
                ->get();
 

                $counties = DB::table('health_counties')->get();

               return view('forms.health.county.healthhivaidsawarenessandtesting',
                 
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
                          'male' =>'required|numeric',
                             'female' =>'required|numeric',
                                'hiv_awareness' =>'required|alpha'
                          
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $awareness = new HealthHIVAIDSAwarenessAndTesting_Model();
            $awareness->county_id =$request->county_id;
            $awareness->male=$request->male;
            $awareness->female=$request->female;
            $awareness->hiv_awareness=$request->hiv_awareness;
            $awareness->save();
             return response()->json($awareness);
           echo json_encode(array("status" => TRUE));

        }   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($awareness_id)
    {
        //
        $awareness = HealthHIVAIDSAwarenessAndTesting_Model::findOrfail($awareness_id);

  
          echo json_encode($awareness);  
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
                          'male' =>'required|numeric',
                             'female' =>'required|numeric',
                                'hiv_awareness' =>'required|alpha'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
          
            $awareness =HealthHIVAIDSAwarenessAndTesting_Model::find($request->id);
   $awareness->county_id =$request->county_id;
            $awareness->male=$request->male;
            $awareness->female=$request->female;
            $awareness->hiv_awareness=$request->hiv_awareness;
            $awareness->save();
             return response()->json($awareness);
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
