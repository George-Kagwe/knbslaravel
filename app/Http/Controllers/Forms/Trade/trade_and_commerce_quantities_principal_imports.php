<?php

namespace App\Http\Controllers\Forms\Trade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\Models\Trade\trade_and_commerce_quantities_principal_imports_model;
use View;

//Charles Ndirangu

class trade_and_commerce_quantities_principal_imports extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $rules = [
        'commodity'=>'required|max:255',
        'unit_of_quantity'=>'required|max:255',
        'quantity'=>'required|numeric',
        'year'=>'required|numeric'
    ];
    public function index()
    {
         $principal_imports = trade_and_commerce_quantities_principal_imports_model::all();
        return view('Forms.Trade.national.trade_and_commerce_quantities_principal_imports',['imports' =>$principal_imports]);
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
                'commodity'=>'required|max:255',
                'unit_of_quantity'=>'required|max:255',
                'quantity'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        else{ 
            $principal_imports = new trade_and_commerce_quantities_principal_imports_model();
            $principal_imports->commodity=$request->commodity;
            $principal_imports->unit_of_quantity=$request->unit_of_quantity;
            $principal_imports->quantity=$request->quantity;
            $principal_imports->year=$request->year;
            $principal_imports->save();
             return response()->json($principal_imports);
           echo json_encode(array("status" => TRUE));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($trade_id)
    {
        $principal_imports = trade_and_commerce_quantities_principal_imports_model::findOrfail($trade_id);
        echo json_encode($principal_imports);
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
                'commodity'=>'required|max:255',
                'unit_of_quantity'=>'required|max:255',
                'quantity'=>'required|numeric',
                'year'=>'required|numeric'
            ]
        );
        
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }else{
            $principal_imports =  trade_and_commerce_quantities_principal_imports_model::find($request->id);
            $principal_imports->commodity=$request->commodity;
            $principal_imports->unit_of_quantity=$request->unit_of_quantity;
            $principal_imports->quantity=$request->quantity;
            $principal_imports->year=$request->year;
            $principal_imports->save();
             return response()->json($principal_imports);
           echo json_encode(array("status" => TRUE));
        }
    }

    public function destroy($id)
    {
        //
    }
}
