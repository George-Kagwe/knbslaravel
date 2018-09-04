<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
<<<<<<< HEAD
he
=======
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Housing extends Controller
{
     //function to get data from housing_conditions_kihibs_waste_disposal_method

    public function housing_conditions_kihibs_waste_disposal_method(){
    	$data = DB::table('housing_conditions_kihibs_waste_disposal_method')->join('health_counties', 'housing_conditions_kihibs_waste_disposal_method.county_id', '=', 'housing_conditions_kihibs_waste_disposal_method.county_id')->get();

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'county government';

			$series2 = array();
			$series2['name'] = 'community';

			$series3 = array();
			$series3['name'] = 'private co';

			$series4 = array();
			$series4['name'] = 'dumped compound';

			$series5 = array();
			$series5['name'] = 'dumped street';

			$series6 = array();
			$series6['name'] = 'dumped latrine';

			$series7 = array();
			$series7['name'] = 'burnt';

			$series8 = array();
			$series8['name'] = 'buried';

			$series9 = array();
			$series9['name'] = 'other';

			$series10 = array();
			$series10['name'] = 'not stated';

			$series11 = array();
			$series11['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->county_gov;
			$series2['data'][] = $row->community;
			$series3['data'][] = $row->private_co;
			$series4['data'][] = $row->dumped_compound;	
			$series5['data'][] = $row->dumped_street;	
			$series6['data'][] = $row->dumped_latrine;	
			$series7['data'][] = $row->burnt;	
			$series8['data'][] = $row->buried;	
			$series9['data'][] = $row->other;
			$series10['data'][] = $row->not_stated;
			$series11['data'][] = $row->households;								
		}
			 
			 
			$result = array();
<<<<<<< HEAD

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Housing extends Controller
{
      
=======
		
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
            array_push($result,$series11);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
     

    // @George Muchiri 
   // get housing_conditions_kihibs_hholds_by_habitable_rooms

    public function get_housing_conditions_kihibs_hholds_by_habitable_rooms(){
    
        
           $data= DB::table('housing_conditions_kihibs_hholds_by_habitable_rooms')
            ->join('health_counties','housing_conditions_kihibs_hholds_by_habitable_rooms.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';


					
			$series1 = array();
			$series1['name'] = 'One';
			
			$series2 = array();
			$series2['name'] = 'Two';


			$series3 = array();
			$series3['name'] = 'Three';

			$series4 = array();
			$series4['name'] = 'Four';

			$series5 = array();
			$series5['name'] = 'Five';


			$series6 = array();
			$series6['name'] = 'Six Plus';


			$series7 = array();
			$series7['name'] = 'Not Stated';



			$series8 = array();
			$series8['name'] = 'Mean Rooms';



			$series9 = array();
			$series9['name'] = 'Households';



			$series10 = array();
			$series10['name'] = 'Person Per Room';
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->one;
            $series2['data'][] = $row->two;
			$series3['data'][] = $row->three;
			$series4['data'][] = $row->four;
			$series5['data'][] = $row->five;
			$series6['data'][] = $row->six_plus;
			$series7['data'][] = $row->not_stated;
			$series8['data'][] = $row->mean_rooms;
			$series9['data'][] = $row->households;
			$series10['data'][] = $row->persons_per_room;
		
						
			}
			 
			$result = array();
		

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);

<<<<<<< HEAD
			array_push($result,$series11);
=======
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
     //function to get data from housing_conditions_kihibs_volume_of_water_used

    public function housing_conditions_kihibs_volume_of_water_used(){
    	$data = DB::table('housing_conditions_kihibs_volume_of_water_used')->join('health_counties', 'housing_conditions_kihibs_volume_of_water_used.county_id', '=', 'housing_conditions_kihibs_volume_of_water_used.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'lit 0 1000';

			$series2 = array();
			$series2['name'] = 'lit 1001 2000';

			$series3 = array();
			$series3['name'] = 'lit 2001 3000';

			$series4 = array();
			$series4['name'] = 'over 3000 lit';

			$series5 = array();
			$series5['name'] = 'not stated';

			$series6 = array();
			$series6['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->lit_0_1000;
			$series2['data'][] = $row->lit_1001_2000;
			$series3['data'][] = $row->lit_2001_3000;
			$series4['data'][] = $row->over_3000_lit;	
			$series5['data'][] = $row->not_stated;	
			$series6['data'][] = $row->households;							
		}
			 
<<<<<<< HEAD
			$result = array();

=======
			
$result = array();
	
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb

			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


   // @George Muchiri 
   // get housing_conditions_kihibs_hholds_by_housing_tenure

    public function get_housing_conditions_kihibs_hholds_by_housing_tenure(){
    
        
           $data= DB::table('housing_conditions_kihibs_hholds_by_housing_tenure')
            ->join('health_counties','housing_conditions_kihibs_hholds_by_housing_tenure.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';


					
			$series1 = array();
			$series1['name'] = 'Owner Occupier';
			
			$series2 = array();
			$series2['name'] = 'Pays Rent';


			$series3 = array();
			$series3['name'] = 'No Rent Consent';

			$series4 = array();
			$series4['name'] = 'No Rent Squatting';

			$series5 = array();
			$series5['name'] = 'Not Stated';


			$series6 = array();
			$series6['name'] = 'Households';


		
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->owner_occupier;
            $series2['data'][] = $row->pays_rent;
			$series3['data'][] = $row->no_rent_consent;
			$series4['data'][] = $row->no_rent_squatting;
			$series5['data'][] = $row->not_stated;
			$series6['data'][] = $row->households;
		
						
			}
			 
			$result = array();
<<<<<<< HEAD
		

=======
	
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
<<<<<<< HEAD
	
=======

					
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
      //function to get data from housing_conditions_kihibs_time_taken_to_fetch_drinking_water

    public function housing_conditions_kihibs_time_taken_to_fetch_drinking_water(){
    	$data = DB::table('housing_conditions_kihibs_time_taken_to_fetch_drinking_water')->join('health_counties', 'housing_conditions_kihibs_time_taken_to_fetch_drinking_water.county_id', '=', 'housing_conditions_kihibs_time_taken_to_fetch_drinking_water.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'zero';

			$series2 = array();
			$series2['name'] = 'less thirty min';

			$series3 = array();
			$series3['name'] = 'over thirty min';

			$series4 = array();
			$series4['name'] = 'not stated';

			$series5 = array();
			$series5['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->zero;
			$series2['data'][] = $row->less_thirty_min;
			$series3['data'][] = $row->over_thirty_min;
			$series4['data'][] = $row->not_stated;	
			$series5['data'][] = $row->households;								
		}
			 
			$result = array();
<<<<<<< HEAD

	
=======
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb

		
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }

    // @George Muchiri 
   // get housing_conditions_kihibs_hholds_by_type_of_housing_unit


    public function get_housing_conditions_kihibs_hholds_by_type_of_housing_unit(){
    
        
           $data= DB::table('housing_conditions_kihibs_hholds_by_type_of_housing_unit')
            ->join('health_counties',
            	'housing_conditions_kihibs_hholds_by_type_of_housing_unit.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';


					
			$series1 = array();
			$series1['name'] = 'Bungalow';
			
			$series2 = array();
			$series2['name'] = 'Flat';


			$series3 = array();
			$series3['name'] = 'Maisonnette';

			$series4 = array();
			$series4['name'] = 'Swahili';

			$series5 = array();
			$series5['name'] = 'Shanty';

			$manyatta = array();
			$manyatta['name'] = 'Manyatta';


			$series6 = array();
			$series6['name'] = 'Landhi';


			$series7 = array();
			$series7['name'] = 'Other';

			$series8 = array();
			$series8['name'] = 'Not Stated';

			$series9 = array();
			$series9['name'] = 'Households';

	
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->bungalow;
            $series2['data'][] = $row->flat;
			$series3['data'][] = $row->maisonnette;
			$series4['data'][] = $row->swahili;
			$series5['data'][] = $row->shanty;
			$manyatta['data'][] = $row->manyatta;
			$series6['data'][] = $row->landhi;
			$series7['data'][] = $row->other;
			$series8['data'][] = $row->not_stated;
			$series9['data'][] = $row->households;



		
						
			}
			 
			$result = array();
		
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$manyatta);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
	     
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


   		// @George Muchiri 
  		// get housing_conditions_kihibs_hholds_in_rented_dwellings

  		  public function get_housing_conditions_kihibs_hholds_in_rented_dwellings(){
    
        
           $data= DB::table('housing_conditions_kihibs_hholds_in_rented_dwellings')
            ->join('health_counties',
            	'housing_conditions_kihibs_hholds_in_rented_dwellings.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';


					
			$series1 = array();
			$series1['name'] = 'Govt National';
			
			$series2 = array();
			$series2['name'] = 'Govt County';


			$series3 = array();
			$series3['name'] = 'Parastatal';

			$series4 = array();
			$series4['name'] = 'Company Directly';

			$series5 = array();
			$series5['name'] = 'Company Agent';


			$series6 = array();
			$series6['name'] = 'Individual Directly';


			$series7 = array();
			$series7['name'] = 'Individual Agent';

			$other = array();
			$other['name'] = 'Other';

			$series8 = array();
			$series8['name'] = 'Not Stated';

			$series9 = array();
			$series9['name'] = 'Households';

	
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->govt_national;
            $series2['data'][] = $row->govt_county;
			$series3['data'][] = $row->parastatal;
			$series4['data'][] = $row->company_directly;
			$series5['data'][] = $row->company_agent;
			$series6['data'][] = $row->individual_directly;
			$series7['data'][] = $row->individual_agent;
			$other['data'][] = $row->other;
			$series8['data'][] = $row->not_stated;
			$series9['data'][] = $row->households;



		
						
			}
			 
			$result = array();
		

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
<<<<<<< HEAD

=======
            array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$other);
			array_push($result,$series8);
			array_push($result,$series9);
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

     //function to get data from housing_conditions_kihibs_sharing_of_toilet_facility

    public function housing_conditions_kihibs_sharing_of_toilet_facility(){
    	$data = DB::table('housing_conditions_kihibs_sharing_of_toilet_facility')->join('health_counties', 'housing_conditions_kihibs_sharing_of_toilet_facility.county_id', '=', 'housing_conditions_kihibs_sharing_of_toilet_facility.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'shared toilet';

			$series2 = array();
			$series2['name'] = 'not shared';

			$series3 = array();
			$series3['name'] = 'not stated';

			$series4 = array();
			$series4['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->shared_toilet;
			$series2['data'][] = $row->not_shared;
			$series3['data'][] = $row->not_stated;
			$series4['data'][] = $row->households;								
		}
			 
			$result = array();

<<<<<<< HEAD
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$other);
			array_push($result,$series8);
			array_push($result,$series9);
=======
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
	     
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }



      // @George Muchiri 
      // get housing_conditions_kihibs_main_floor_material

    	public function get_housing_conditions_kihibs_main_floor_material(){
    
        
           $data= DB::table('housing_conditions_kihibs_main_floor_material')
            ->join('health_counties',
            	'housing_conditions_kihibs_main_floor_material.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';


					
			$series1 = array();
			$series1['name'] = 'Tiles';
			
			$series2 = array();
			$series2['name'] = 'Cement';


			$series3 = array();
			$series3['name'] = 'Wood';

			$series4 = array();
			$series4['name'] = 'Cow Dung';

			$series5 = array();
			$series5['name'] = 'Sand';


			$series6 = array();
			$series6['name'] = 'Carpet';


			$series7= array();
			$series7['name'] = 'Other';

			$series8 = array();
			$series8['name'] = 'Not Stated';

			$series9 = array();
			$series9['name'] = 'Households';

	
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->tiles;
            $series2['data'][] = $row->cement;
			$series3['data'][] = $row->wood;
			$series4['data'][] = $row->cow_dung;
			$series5['data'][] = $row->sand;
			$series6['data'][] = $row->carpet;
	        $series7['data'][] = $row->other;
			$series8['data'][] = $row->not_stated;
			$series9['data'][] = $row->households;



		
						
			}
			 
			$result = array();
		
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
	     
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }

		  // @George Muchiri 
     	 // get housing_conditions_kihibs_main_roofing_material

   		 public function get_housing_conditions_kihibs_main_roofing_material(){
    
        
           $data= DB::table('housing_conditions_kihibs_main_roofing_material')
            ->join('health_counties',
            	'housing_conditions_kihibs_main_roofing_material.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';

	
			$series1 = array();
			$series1['name'] = 'Grass';
			
			$series2 = array();
			$series2['name'] = 'Mud';


			$series3 = array();
			$series3['name'] = 'Iron Sheets';

			$series4 = array();
			$series4['name'] = 'Tin Cans';

			$series5 = array();
			$series5['name'] = 'Sheet';


			$series6 = array();
			$series6['name'] = 'Concrete';


			$series7= array();
			$series7['name'] = 'Tiles';

			$series8 = array();
			$series8['name'] = 'Not Stated';

			$series9 = array();
			$series9['name'] = 'Households';

	
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->grass;
            $series2['data'][] = $row->mud;
			$series3['data'][] = $row->iron_sheets;
			$series4['data'][] = $row->tin_cans;
			$series5['data'][] = $row->sheet;
			$series6['data'][] = $row->concrete;
	        $series7['data'][] = $row->tiles;
			$series8['data'][] = $row->not_stated;
			$series9['data'][] = $row->households;			
			}
			 
			$result = array();
		    array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);

					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
 //function to get data from housing_conditions_kihibs_primary_type_of_cooking_appliance

    public function housing_conditions_kihibs_primary_type_of_cooking_appliance(){
    	$data = DB::table('housing_conditions_kihibs_primary_type_of_cooking_appliance')->join('health_counties', 'housing_conditions_kihibs_primary_type_of_cooking_appliance.county_id', '=', 'housing_conditions_kihibs_primary_type_of_cooking_appliance.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'stone fire';

			$series2 = array();
			$series2['name'] = 'imp stone fire';

			$series3 = array();
			$series3['name'] = 'ordinary jiko';

			$series4 = array();
			$series4['name'] = 'improved jiko';

			$series5 = array();
			$series5['name'] = 'stove';

			$series6 = array();
			$series6['name'] = 'gas cooker';

			$series7 = array();
			$series7['name'] = 'electric cooker';

			$series8 = array();
			$series8['name'] = 'elec gas cooker';

			$series9 = array();
			$series9['name'] = 'other';

			$series10 = array();
			$series10['name'] = 'not stated';

			$series11 = array();
			$series11['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->stone_fire;
			$series2['data'][] = $row->imp_stone_fire;
			$series3['data'][] = $row->ordinary_jiko;
			$series4['data'][] = $row->improved_jiko;	
			$series5['data'][] = $row->stove;	
			$series6['data'][] = $row->gas_cooker;	
			$series7['data'][] = $row->electric_cooker;	
			$series8['data'][] = $row->elec_gas_cooker;	
			$series9['data'][] = $row->other;	
			$series10['data'][] = $row->not_stated;	
			$series11['data'][] = $row->households;								
		}
			 
			$result = array();

<<<<<<< HEAD
=======
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
			array_push($result,$series11);
	     
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


	     // @George Muchiri 
     	 // get housing_conditions_kihibs_main_source_of_cooking_fuel

         public function get_housing_conditions_kihibs_main_source_of_cooking_fuel(){
    
        
           $data= DB::table('housing_conditions_kihibs_main_source_of_cooking_fuel')
            ->join('health_counties',
            	'housing_conditions_kihibs_main_source_of_cooking_fuel.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';

	
			$series1 = array();
			$series1['name'] = 'Firewood';
			
			$series2 = array();
			$series2['name'] = 'Electricity';


			$series3 = array();
			$series3['name'] = 'Lpg';

			$series4 = array();
			$series4['name'] = 'Biogas';

			$series5 = array();
			$series5['name'] = 'Kerosene';


			$series6 = array();
			$series6['name'] = 'Charcoal';


			$series7= array();
			$series7['name'] = 'Shrubs';

			$series8 = array();
			$series8['name'] = 'Animal Dung';

			$series9 = array();
			$series9['name'] = 'Crop Residue';

	
	        $series10 = array();
			$series10['name'] = 'Other';

			$series11 = array();
			$series11['name'] = 'Households';

       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->firewood;
            $series2['data'][] = $row->electricity;
			$series3['data'][] = $row->lpg;
			$series4['data'][] = $row->biogas;
			$series5['data'][] = $row->kerosene;
			$series6['data'][] = $row->charcoal;
	        $series7['data'][] = $row->shrubs;
			$series8['data'][] = $row->animal_dung;
			$series9['data'][] = $row->crop_residue;
			$series10['data'][] = $row->other;
			$series11['data'][] = $row->households;


		
						
			}
			 
			$result = array();
		

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
		    array_push($result,$series5);
            array_push($result,$series6);
            array_push($result,$series7);
            array_push($result,$series8);
   			array_push($result,$series9);
			array_push($result,$series10);
	    	array_push($result,$series11);


					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

    //function to get data from housing_conditions_kihibs_place_for_washing_hands_near_toilet

    public function housing_conditions_kihibs_place_for_washing_hands_near_toilet(){
    	$data = DB::table('housing_conditions_kihibs_place_for_washing_hands_near_toilet')->join('health_counties', 'housing_conditions_kihibs_place_for_washing_hands_near_toilet.county_id', '=', 'housing_conditions_kihibs_place_for_washing_hands_near_toilet.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'place';

			$series2 = array();
			$series2['name'] = 'no place';

			$series3 = array();
			$series3['name'] = 'not stated';

			$series4 = array();
			$series4['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->place;
			$series2['data'][] = $row->no_place;
			$series3['data'][] = $row->not_stated;
			$series4['data'][] = $row->households;								
		}
			$result = array();

<<<<<<< HEAD
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
	     	array_push($result,$series10);
			array_push($result,$series11);
=======
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


	  	 // @George Muchiri 
     	 // get housing_conditions_kihibs_main_source_of_drinking_water

   		 public function get_housing_conditions_kihibs_main_source_of_drinking_water(){
    
        
           $data= DB::table('housing_conditions_kihibs_main_source_of_drinking_water')
            ->join('health_counties',
            	'housing_conditions_kihibs_main_source_of_drinking_water.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';

			$series1 = array();
			$series1['name'] = 'Piped Dwelling';
			
			$series2 = array();
			$series2['name'] = 'Piped Yard';

			$series3 = array();
			$series3['name'] = 'Piped Tap';

			$series4 = array();
			$series4['name'] = 'Tubewell';

			$series5 = array();
			$series5['name'] = 'Protected Well';

			$series6 = array();
			$series6['name'] = 'Protected Spring';

			$series7= array();
			$series7['name'] = 'Rain Water';

			$series8 = array();
			$series8['name'] = 'Bottled Water';

			$series9 = array();
			$series9['name'] = 'Unprotected Well';
	
	        $series10 = array();
			$series10['name'] = 'Unprotected Spring';

			$series11 = array();
			$series11['name'] = 'Vendor Truck';

       		$series12 = array();
			$series12['name'] = 'Vendor Drum';

			$series13 = array();
			$series13['name'] = 'Vendor Bicycles';

			$series14 = array();
			$series14['name'] = 'Surface Water';

            $series15 = array();
			$series15['name'] = 'Other';

			$series16 = array();
			$series16['name'] = 'Not Stated';

			$series17 = array();
			$series17['name'] = 'Households';
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->piped_dwelling;
            $series2['data'][] = $row->piped_yard;
			$series3['data'][] = $row->piped_tap;
			$series4['data'][] = $row->tubewell;
			$series5['data'][] = $row->protected_well;
			$series6['data'][] = $row->protected_spring;
	        $series7['data'][] = $row->rain_water;
			$series8['data'][] = $row->bottled_water;
			$series9['data'][] = $row->unprotected_well;
			$series10['data'][] = $row->unprotected_spring;
			$series12['data'][] = $row->vendor_truck;
			$series12['data'][] = $row->vendor_drum;
			$series13['data'][] = $row->vendor_bicycles;
			$series14['data'][] = $row->surface_water;
			$series15['data'][] = $row->other;
			$series16['data'][] = $row->not_stated;
			$series17['data'][] = $row->households;



		
						
			}
			 
			$result = array();
		

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
			array_push($result,$series11);
			array_push($result,$series12);
			array_push($result,$series13);
			array_push($result,$series14);
			array_push($result,$series15);
			array_push($result,$series16);
			array_push($result,$series17);


			print json_encode($result, JSON_NUMERIC_CHECK);
    }

 //function to get data from housing_conditions_kihibs_owner_occupier_dwellings

    public function housing_conditions_kihibs_owner_occupier_dwellings(){
    	$data = DB::table('housing_conditions_kihibs_owner_occupier_dwellings')->join('health_counties', 'housing_conditions_kihibs_owner_occupier_dwellings.county_id', '=', 'housing_conditions_kihibs_owner_occupier_dwellings.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'purchased cash';

			$series2 = array();
			$series2['name'] = 'purchased loan';

			$series3 = array();
			$series3['name'] = 'purchased cash loan';

			$series4 = array();
			$series4['name'] = 'constructed cash';

			$series5 = array();
			$series5['name'] = 'constructed loan';

			$series6 = array();
			$series6['name'] = 'constructed cash loan';

			$series7 = array();
			$series7['name'] = 'inherited';

			$series8 = array();
			$series8['name'] = 'gift';

			$series9 = array();
			$series9['name'] = 'bartered';

			$series10 = array();
			$series10['name'] = 'other';

			$series11 = array();
			$series11['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->purchased_cash;
			$series2['data'][] = $row->purchased_loan;
			$series3['data'][] = $row->purchased_cash_loan;
			$series4['data'][] = $row->constructed_cash;	
			$series5['data'][] = $row->constructed_loan;	
			$series6['data'][] = $row->constructed_cash_loan;	
			$series7['data'][] = $row->inherited;	
			$series8['data'][] = $row->gift;	
			$series9['data'][] = $row->bartered;	
			$series10['data'][] = $row->other;	
			$series11['data'][] = $row->households;								
		}
			 
			$result = array();

<<<<<<< HEAD
			array_push($result,$series5);
=======
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
	     	array_push($result,$series5);
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
			array_push($result,$series11);
	
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


	  	 // @George Muchiri 
     	 // get housing_conditions_kihibs_main_toilet_facility

   		 public function get_housing_conditions_kihibs_main_toilet_facility(){
    
        
           $data= DB::table('housing_conditions_kihibs_main_toilet_facility')
            ->join('health_counties',
            	'housing_conditions_kihibs_main_toilet_facility.county_id', '=', 'health_counties.county_id')->get();

     
				 
	
		    $county = array();
			$county['name'] = 'County';

			$series1 = array();
			$series1['name'] = 'Piped Sewer';
		
			$series2 = array();
			$series2['name'] = 'Septic Tank';

			$series3 = array();
			$series3['name'] = 'Latrine';

			$series4= array();
			$series4['name'] = 'Vip';

			$series5 = array();
			$series5['name'] = 'Latrine Slab';

			$series6 = array();
			$series6['name'] = 'Composting Toilet';
	
	        $series7 = array();
			$series7['name'] = 'Somewhere else';

			$series8 = array();
			$series8['name'] = 'Unknown Place';

       		$series9 = array();
			$series9['name'] = 'Without Slab';

			$series10 = array();
			$series10['name'] = 'Bucket Toilet';

			$series11 = array();
			$series11['name'] = 'Hanging Toilet';

            $series12 = array();
			$series12['name'] = 'Bush';

			$series13 = array();
			$series13['name'] = 'Other';

			$series14 = array();
			$series14['name'] = 'Not Stated';

			$series15 = array();
			$series15['name'] = 'Households';
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->piped_sewer;
            $series2['data'][] = $row->septic_tank;
			$series3['data'][] = $row->latrine;
			$series4['data'][] = $row->vip;
			$series5['data'][] = $row->latrine_slab;
			$series6['data'][] = $row->composting_toilet;
	        $series7['data'][] = $row->somewhere_else;
			$series8['data'][] = $row->unknown_place;
			$series9['data'][] = $row->without_slab;
			$series10['data'][] = $row->bucket_toilet;
			$series11['data'][] = $row->hanging_toilet;
		    $series12['data'][] = $row->bush;
			$series13['data'][] = $row->other;
			$series14['data'][] = $row->not_stated;
	        $series15['data'][] = $row->households;


		
						
			}
			 
			$result = array();
		

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
            array_push($result,$series5);
            array_push($result,$series6);
            array_push($result,$series7);
            array_push($result,$series8);
   			array_push($result,$series9);
			array_push($result,$series10);
	    	array_push($result,$series11);
	    	array_push($result,$series12);
	    	array_push($result,$series13);
	    	array_push($result,$series14);
	    	array_push($result,$series15);


					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
//function to get data from housing_conditions_kihibs_methods_used_to_make_water_safer

    public function housing_conditions_kihibs_methods_used_to_make_water_safer(){
    	$data = DB::table('housing_conditions_kihibs_methods_used_to_make_water_safer')->join('health_counties', 'housing_conditions_kihibs_methods_used_to_make_water_safer.county_id', '=', 'housing_conditions_kihibs_methods_used_to_make_water_safer.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'boil';

			$series2 = array();
			$series2['name'] = 'add bleach';

			$series3 = array();
			$series3['name'] = 'water filter';

			$series4 = array();
			$series4['name'] = 'solar';

			$series5 = array();
			$series5['name'] = 'sieve cloth';

			$series6 = array();
			$series6['name'] = 'stand settle';

			$series7 = array();
			$series7['name'] = 'other';

			$series8 = array();
			$series8['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->boil;
			$series2['data'][] = $row->add_bleach;
			$series3['data'][] = $row->water_filter;
			$series4['data'][] = $row->solar;
			$series5['data'][] = $row->sieve_cloth;	
			$series6['data'][] = $row->stand_settle;	
			$series7['data'][] = $row->other;		
			$series8['data'][] = $row->households;								
		} 
			$result = array();

<<<<<<< HEAD
			array_push($result,$series5);
=======
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
	     	array_push($result,$series5);
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
	
	
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }



	  	 // @George Muchiri 
     	 // get housing_conditions_kihibs_main_wall_material

   		 public function get_housing_conditions_kihibs_main_wall_material(){
    
        
           $data= DB::table('housing_conditions_kihibs_main_wall_material')
            ->join('health_counties',
            	'housing_conditions_kihibs_main_wall_material.county_id', '=', 
            	'health_counties.county_id')->get();

     
		    $county = array();
			$county['name'] = 'County';

			$series1 = array();
			$series1['name'] = 'Lime Stone';
		
			$series2 = array();
			$series2['name'] = 'Bricks';

			$series3 = array();
			$series3['name'] = 'Cement Blocks';

			$series4= array();
			$series4['name'] = 'Cememnt Finish';

			$series5 = array();
			$series5['name'] = 'Wood';

			$series6 = array();
			$series6['name'] = 'Adobe';
	
	        $series7 = array();
			$series7['name'] = 'Iron Sheets';

			$series8 = array();
			$series8['name'] = 'Bamboo';

       		$series9 = array();
			$series9['name'] = 'Stone';

			$series10 = array();
			$series10['name'] = 'Cane';

			$series11 = array();
			$series11['name'] = 'Plywood';

            $series12 = array();
			$series12['name'] = 'Not Stated';

			$series13 = array();
			$series13['name'] = 'Households';

			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $series1['data'][] = $row->lime_stone;
            $series2['data'][] = $row->bricks;
			$series3['data'][] = $row->cement_blocks;
			$series4['data'][] = $row->cement_finish;
			$series5['data'][] = $row->wood;
			$series6['data'][] = $row->adobe;
	        $series7['data'][] = $row->iron_sheets;
			$series8['data'][] = $row->bamboo;
			$series9['data'][] = $row->stone;
			$series10['data'][] = $row->cane;
			$series11['data'][] = $row->plywood;
		    $series12['data'][] = $row->not_stated;
	        $series13['data'][] = $row->households;


		
						
			}
			 
			$result = array();
		

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
		    array_push($result,$series5);
            array_push($result,$series6);
            array_push($result,$series7);
            array_push($result,$series8);
<<<<<<< HEAD

			print json_encode($result, JSON_NUMERIC_CHECK);
    }


			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
=======
>>>>>>> dc59ea36d2a98c8d256ea9ebd284bd28fc7ef5eb
			array_push($result,$series9);
	     	array_push($result,$series10);
			array_push($result,$series11);
			array_push($result,$series12);
			array_push($result,$series13);
	
	
	
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


 //function to get data from housing_conditions_kihibs_main_source_of_lighting_fuel

    public function get_housing_conditions_kihibs_main_source_of_lighting_fuel(){
    	$data = DB::table('housing_conditions_kihibs_main_source_of_lighting_fuel')->join('health_counties', 'housing_conditions_kihibs_main_source_of_lighting_fuel.county_id', '=', 'housing_conditions_kihibs_main_source_of_lighting_fuel.county_id')->get();

			$county = array();
			$county['name'] = 'county name';

			$series1 = array();
			$series1['name'] = 'electricity';

			$series2 = array();
			$series2['name'] = 'generator';

			$series3 = array();
			$series3['name'] = 'solar energy';

			$series4 = array();
			$series4['name'] = 'paraffin lantern';

			$series5 = array();
			$series5['name'] = 'paraffin tin lamp';

			$series6 = array();
			$series6['name'] = 'paraffin pressure lamp';

			$series7 = array();
			$series7['name'] = 'fuel wood';

			$series8 = array();
			$series8['name'] = 'gas lamp';

			$series9 = array();
			$series9['name'] = 'battery lamp';

			$series10 = array();
			$series10['name'] = 'candles';

			$series11 = array();
			$series11['name'] = 'biogas';

			$series12 = array();
			$series12['name'] = 'other';

			$series13 = array();
			$series13['name'] = 'not stated';

			$series14 = array();
			$series14['name'] = 'households';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->electricity;
			$series2['data'][] = $row->generator;
			$series3['data'][] = $row->solar_energy;
			$series4['data'][] = $row->paraffin_lantern;	
			$series5['data'][] = $row->paraffin_tin_lamp;
			$series6['data'][] = $row->paraffin_pressure_lamp;		
			$series7['data'][] = $row->fuel_wood;	
			$series8['data'][] = $row->gas_lamp;	
			$series9['data'][] = $row->battery_lamp;	
			$series10['data'][] = $row->candles;	
			$series11['data'][] = $row->biogas;	
			$series12['data'][] = $row->other;	
			$series13['data'][] = $row->not_stated;	
			$series14['data'][] = $row->households;		

		}
			 
			$result = array();

			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
	     	array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
			array_push($result,$series9);
			array_push($result,$series10);
			array_push($result,$series11);
			array_push($result,$series12);
			array_push($result,$series13);
			array_push($result,$series14);
	
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


}
