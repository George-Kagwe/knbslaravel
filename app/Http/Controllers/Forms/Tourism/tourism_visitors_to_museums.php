<?php

namespace App\Http\Controllers\Forms\Tourism;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Tourism\tourism_visitors_to_museums_model;
use View;
 
//@Charles Ndirangu
//Tourism Visitors to museum

class tourism_visitors_to_museums extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
                'nairobi_snake_park'=>'required|numeric',
                'fort_jesus'=>'required|numeric',
                'kisumu'=>'required|numeric',
                'kitale'=>'required|numeric',
                'gede'=>'required|numeric',
                'meru'=>'required|numeric',
                'lamu'=>'required|numeric',
                'jumba_la_mtwana'=>'required|numeric',
                'kariandusi'=>'required|numeric',
                'hyrax_hill'=>'required|numeric',
                'karen_blixen'=>'required|numeric',
                'malindi'=>'required|numeric',
                'kilifi_mnarani'=>'required|numeric',
                'kabarnet'=>'required|numeric',
                'kapenguria'=>'required|numeric',
                'swahili_house'=>'required|numeric',
                'narok'=>'required|numeric',
                'german_post'=>'required|numeric',
                'takwa_ruins'=>'required|numeric',                
                'year'=>'required|numeric'
    ];
    public function index()
    {
         $visitors_to_museum = tourism_visitors_to_museums_model::all();
        return view('Forms.Tourism.national.tourism_visitors_to_museums',['visitors' =>$visitors_to_museum]);
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
            [   'nairobi_snake_park'=>'required|numeric',
                'fort_jesus'=>'required|numeric',
                'kisumu'=>'required|numeric',
                'kitale'=>'required|numeric',
                'gede'=>'required|numeric',
                'meru'=>'required|numeric',
                'lamu'=>'required|numeric',
                'jumba_la_mtwana'=>'required|numeric',
                'kariandusi'=>'required|numeric',
                'hyrax_hill'=>'required|numeric',
                'karen_blixen'=>'required|numeric',
                'malindi'=>'required|numeric',
                'kilifi_mnarani'=>'required|numeric',
                'kabarnet'=>'required|numeric',
                'kapenguria'=>'required|numeric',
                'swahili_house'=>'required|numeric',
                'narok'=>'required|numeric',
                'german_post'=>'required|numeric',
                'takwa_ruins'=>'required|numeric',                
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $visitors = new tourism_visitors_to_museums_model();
            $visitors->nairobi_snake_park=$request->nairobi_snake_park;
            $visitors->fort_jesus=$request->fort_jesus;
            $visitors->kisumu=$request->kisumu;
            $visitors->kitale=$request->kitale;
            $visitors->gede=$request->gede;
            $visitors->meru=$request->meru;
            $visitors->lamu=$request->lamu;
            $visitors->jumba_la_mtwana=$request->jumba_la_mtwana;
            $visitors->kariandusi=$request->kariandusi;
            $visitors->hyrax_hill=$request->hyrax_hill;
            $visitors->karen_blixen=$request->karen_blixen;
            $visitors->malindi=$request->malindi;
            $visitors->kilifi_mnarani=$request->kilifi_mnarani;
            $visitors->kabarnet=$request->kabarnet;
            $visitors->kapenguria=$request->kapenguria;
            $visitors->swahili_house=$request->swahili_house;
            $visitors->narok=$request->narok;
            $visitors->german_post=$request->german_post;
            $visitors->takwa_ruins=$request->takwa_ruins;
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
        $visitors = tourism_visitors_to_museums_model::findOrfail($visitor_parks_id);
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
            ['nairobi_snake_park'=>'required|numeric',
                'fort_jesus'=>'required|numeric',
                'kisumu'=>'required|numeric',
                'kitale'=>'required|numeric',
                'gede'=>'required|numeric',
                'meru'=>'required|numeric',
                'lamu'=>'required|numeric',
                'jumba_la_mtwana'=>'required|numeric',
                'kariandusi'=>'required|numeric',
                'hyrax_hill'=>'required|numeric',
                'karen_blixen'=>'required|numeric',
                'malindi'=>'required|numeric',
                'kilifi_mnarani'=>'required|numeric',
                'kabarnet'=>'required|numeric',
                'kapenguria'=>'required|numeric',
                'swahili_house'=>'required|numeric',
                'narok'=>'required|numeric',
                'german_post'=>'required|numeric',
                'takwa_ruins'=>'required|numeric',                
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $visitors =  tourism_visitors_to_museums_model::find($request->id);
            $visitors->nairobi_snake_park=$request->nairobi_snake_park;
            $visitors->fort_jesus=$request->fort_jesus;
            $visitors->kisumu=$request->kisumu;
            $visitors->kitale=$request->kitale;
            $visitors->gede=$request->gede;
            $visitors->meru=$request->meru;
            $visitors->lamu=$request->lamu;
            $visitors->jumba_la_mtwana=$request->jumba_la_mtwana;
            $visitors->kariandusi=$request->kariandusi;
            $visitors->hyrax_hill=$request->hyrax_hill;
            $visitors->karen_blixen=$request->karen_blixen;
            $visitors->malindi=$request->malindi;
            $visitors->kilifi_mnarani=$request->kilifi_mnarani;
            $visitors->kabarnet=$request->kabarnet;
            $visitors->kapenguria=$request->kapenguria;
            $visitors->swahili_house=$request->swahili_house;
            $visitors->narok=$request->narok;
            $visitors->german_post=$request->german_post;
            $visitors->takwa_ruins=$request->takwa_ruins;
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
