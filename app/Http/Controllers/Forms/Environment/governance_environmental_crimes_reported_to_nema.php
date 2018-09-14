<?php

namespace App\Http\Controllers\Forms\Environment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Response;
use App\Models\Environment\governance_environmental_crimes_reported_to_nema_Model;
use View;

class governance_environmental_crimes_reported_to_nema extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $rules =
    [
      'type_of_case'=>'required|alpha_dash',
      'no_of_cases'=>'required|numeric', 
      'year'=>'required|numeric'
                              
                        
    ];
    public function index()
    {
        
        $governance_environmental_crimes_reported_to_nema =governance_environmental_crimes_reported_to_nema_Model::all();
        
        return view('forms.environment.national.governanceenvironmentalcrimesreportedtonema',['post' =>$governance_environmental_crimes_reported_to_nema]);
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
        'type_of_case'=>'required|alpha_dash',
      'no_of_cases'=>'required|numeric',     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
            $nema = new governance_environmental_crimes_reported_to_nema_Model();
            $nema->type_of_case =$request->type_of_case;
            $nema->no_of_cases=$request->no_of_cases;
            
            $nema->year=$request->year;
            $nema->save();
             return response()->json($nema);
           echo json_encode(array("status" => TRUE));

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($crime_id)
    {
       
         
         $nema =  governance_environmental_crimes_reported_to_nema_Model::findOrfail($crime_id);

  
          echo json_encode($nema);     
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
        'type_of_case'=>'required|alpha_dash',
      'no_of_cases'=>'required|numeric',     
      'year'=>'required|numeric'
        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{
         
           $nema=governance_environmental_crimes_reported_to_nema_Model::find($request->id);
           $nema->type_of_case =$request->type_of_case;
            $nema->no_of_cases=$request->no_of_cases;
            
            $nema->year=$request->year;
            $nema->save();
             return response()->json($nema);
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
