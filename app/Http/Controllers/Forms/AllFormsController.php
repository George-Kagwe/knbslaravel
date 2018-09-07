<?php

namespace App\Http\Controllers\Forms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AllFormsController  extends Controller
{
    //
    public function Finance(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  '=', 'Public Finance')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    } 

     public function Education(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  '=', 'Education')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function Health(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'public Health')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function Population(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'Population and Vital Statistics')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

     public function Governance(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'Governance')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function Agriculture(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'Agriculture')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function ict(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'ict')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }


    public function environment(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'Environment and Natural Resources')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }
     public function energy(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'energy')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

       public function labour(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'labor')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function cpi(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'cpi')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

     public function manufacturing(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', 'Manufacturing')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function administrative(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', '%Political%')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function trade(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', '%trade%')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

     public function tourism(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', '%tourism%')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function building(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', '%building%')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }
      

    public function money(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', '%money%')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function transport(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', '%transport%')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }

    public function poverty(){
    	$data_national = DB::table('health_sectors')
               ->orderBy('coverage',  '=', 'ASC')
            	->where('sector_name',  'like', '%poverty%')
                ->get();

        return view('forms.datasets',
        	        ['datasets' =>$data_national]

        	      );    	
    }
      
}
