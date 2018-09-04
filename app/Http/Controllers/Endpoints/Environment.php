<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class Environment extends Controller
{
    



      public function get_environment_and_natural_resources_average_export_prices_ash(){
    	$data = DB::table('environment_and_natural_resources_average_export_prices_ash')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
	
			$series1 = array();
			$series1['name'] = 'soda ash';

			
			$series2 = array();
			$series2['name'] = 'fluorspar';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->soda_ash;
			$series2['data'][] = $row->fluorspar;

			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);

    }


    






  
    // get environment_and_natural_resources_development_expenditure_water


    public function get_environment_and_natural_resources_development_expenditure_water(){
    	$data = DB::table('environment_and_natural_resources_development_expenditure_water')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'training of water development staff';
			
			$series2 = array();
			$series2['name'] = 'rural_water_supplies';

			$series3 = array();
			$series3['name'] = 'miscellaneous and special water programmes';

			$series4 = array();
			$series4['name'] = 'national water conservation and pipeline corporation';

			$series5 = array();
			$series5['name'] = 'irrigation development';

			$series6 = array();
			$series6['name'] = 'national irrigation board';
			$series7 = array();
			$series7['name'] = 'water_development';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->training_of_water_development_staff;
			$series2['data'][] = $row->rural_water_supplies;
			$series3['data'][] = $row->miscellaneous_and_special_water_programmes;
			$series4['data'][] = $row->national_water_conservation_and_pipeline_corporation;

			$series5['data'][] = $row->irrigation_development;
			$series6['data'][] = $row->national_irrigation_board;
			$series7['data'][] = $row->water_development;					
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}






// get environment_and_natural_resources_expenditure_cleaning_refuse


 public function get_environment_and_natural_resources_expenditure_cleaning_refuse(){
    	$data = DB::table('environment_and_natural_resources_expenditure_cleaning_refuse')->get();

    	    $year = array();
			$year['name'] = 'year';
	 
			$series1 = array();
			$series1['name'] = 'refuse removal';
		
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->refuse_removal;
								
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}




// get environment_and_natural_resources_government_forest
public function get_environment_and_natural_resources_government_forest(){
    	$data = DB::table('environment_and_natural_resources_government_forest')->get();

    	    $year = array();
			$year['name'] = 'year';
	 
			$series1 = array();
			$series1['name'] = 'previous plantation area';
			
			$series2 = array();
			$series2['name'] = 'area planted';

			$series3 = array();
			$series3['name'] = 'area clear felled';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->previous_plantation_area;
			$series2['data'][] = $row->area_planted;
			$series3['data'][] = $row->area_clear_felled;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}





//  get environment_and_natural_resources_num_high_risk_environ_impact

 public function get_environment_and_natural_resources_num_high_risk_environ_impact(){
    	$data = DB::table('environment_and_natural_resources_num_high_risk_environ_impact')->get();

    	    $year = array();
			$year['name'] = 'year';
		
			$series1 = array();
			$series1['name'] = 'transport and communication';
			
			$series2 = array();
			$series2['name'] = 'energy';

			$series3 = array();
			$series3['name'] = 'tourism';

			$series4 = array();
			$series4['name'] = 'mining and quarrying';

			$series5 = array();
			$series5['name'] = 'human settlements and Infrastructure';

			$series6 = array();
			$series6['name'] = 'agriculture and forestry';

			$series7 = array();
			$series7['name'] = 'commerce and industry';

			$series8 = array();
			$series8['name'] = 'water resources';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->transport_and_communication;
			$series2['data'][] = $row->energy;
			$series3['data'][] = $row->tourism;
			$series4['data'][] = $row->mining_and_quarrying;
			$series5['data'][] = $row->human_settlements_and_Infrastructure;
			$series6['data'][] = $row->agriculture_and_forestry;
			$series7['data'][] = $row->commerce_and_industry;
			$series8['data'][] = $row->water_resources;										
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}






//  get environment_and_natural_resources_population_wildlife

 public function get_environment_and_natural_resources_population_wildlife(){
    	$data = DB::table('environment_and_natural_resources_population_wildlife')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'buffalo';
			
			$series2 = array();
			$series2['name'] = 'burchell_zebra';

			$series3 = array();
			$series3['name'] = 'eland';

			$series4 = array();
			$series4['name'] = 'elephant';

			$series5 = array();
			$series5['name'] = 'gerenuk';

			$series6 = array();
			$series6['name'] = 'giraffe';

			$series7 = array();
			$series7['name'] = 'grant gazelle';

			$series8 = array();
			$series8['name'] = 'grevy zebra';

			$series9 = array();
			$series9['name'] = 'hunters hartebeest';

			$series10 = array();
			$series10['name'] = 'impala';

			$series11 = array();
			$series11['name'] = 'kongoni';

			$series12 = array();
			$series12['name'] = 'kudu';

			$series13 = array();
			$series13['name'] = 'oryx';

			$series14 = array();
			$series14['name'] = 'ostrich';

			$series15 = array();
			$series15['name'] = 'thomson gazelle';

			$series16= array();
			$series16['name'] = 'topi';

			$series17 = array();
			$series17['name'] = 'warthog';

			$series18 = array();
			$series18['name'] = 'waterbuck';

			$series19 = array();
			$series19['name'] = 'wildebeest';

			

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->buffalo;
			$series2['data'][] = $row->burchell_zebra;
			$series3['data'][] = $row->eland;
			$series4['data'][] = $row->elephant;
			$series5['data'][] = $row->gerenuk;
			$series6['data'][] = $row->giraffe;
			$series7['data'][] = $row->grant_gazelle;
			$series8['data'][] = $row->grevy_zebra;	
			$series9['data'][] = $row->hunters_hartebeest;	
			$series10['data'][] = $row->impala;	
			$series11['data'][] = $row->kongoni;	
			$series12['data'][] = $row->kudu;	
			$series13['data'][] = $row->oryx;										
			$series14['data'][] = $row->ostrich;	
			$series15['data'][] = $row->thomson_gazelle;	

			$series16['data'][] = $row->topi;	
			$series17['data'][] = $row->warthog;	
			$series18['data'][] = $row->waterbuck;	
			$series19['data'][] = $row->wildebeest;
					

			}
			 
			$result = array();
			array_push($result,$year);
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
			array_push($result,$series18);
			array_push($result,$series19);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}







// get environment_and_natural_resources_quantity_of_total_mineral

public function get_environment_and_natural_resources_quantity_of_total_mineral(){
    	$data = DB::table('environment_and_natural_resources_quantity_of_total_mineral')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
			$series1 = array();
			$series1['name'] = 'category';
			
			$series2 = array();
			$series2['name'] = 'description';

			$series3 = array();
			$series3['name'] = 'amount';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->description;
			$series3['data'][] = $row->amount;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}







// get  environment_and_natural_resources_quantity_value_fish_landed

public function get_environment_and_natural_resources_quantity_value_fish_landed(){
    	$data = DB::table('environment_and_natural_resources_quantity_value_fish_landed')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
		
	 
			$series1 = array();
			$series1['name'] = 'category';
			
			$series2 = array();
			$series2['name'] = 'type';

			$series3 = array();
			$series3['name'] = 'value';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->type;
			$series3['data'][] = $row->value;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}





// get  environment_and_natural_resources_record_sale_goverment_products
public function get_environment_and_natural_resources_record_sale_goverment_products(){
    	$data = DB::table('environment_and_natural_resources_record_sale_goverment_products')->get();

    	    $year = array();
			$year['name'] = 'year';
	 
			$series1 = array();
			$series1['name'] = 'soft wood';
			
			$series2 = array();
			$series2['name'] = 'fuelwood charcoal';

			$series3 = array();
			$series3['name'] = 'power and telegraph';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->soft_wood;
			$series2['data'][] = $row->fuelwood_charcoal;
			$series3['data'][] = $row->power_and_telegraph;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}








//  get environment_and_natural_resources_trends_envi_natural_resources

 public function get_environment_and_natural_resources_trends_envi_natural_resources(){
    	$data = DB::table('environment_and_natural_resources_trends_envi_natural_resources')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
			$series1 = array();
			$series1['name'] = 'forestry and logging';
			
			$series2 = array();
			$series2['name'] = 'fishing and aquaculture';

			$series3 = array();
			$series3['name'] = 'mining and quarrying';

			$series4 = array();
			$series4['name'] = 'water supply';

			$series5 = array();
			$series5['name'] = 'GDP at current prices';

			$series6 = array();
			$series6['name'] = 'resource as percent of GDP';
 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->forestry_and_logging;
			$series2['data'][] = $row->fishing_and_aquaculture;
			
			$series3['data'][] = $row->mining_and_quarrying;
			$series4['data'][] = $row->water_supply;
			$series5['data'][] = $row->GDP_at_current_prices;
			
			$series6['data'][] = $row->resource_as_percent_of_GDP;										
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
	
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}






// get  environment_and_natural_resources_value_of_total_mineral
public function get_environment_and_natural_resources_value_of_total_mineral(){
    	$data = DB::table('environment_and_natural_resources_value_of_total_mineral')->get();

    	    $year = array();
			$year['name'] = 'year';
			
			$series1 = array();
			$series1['name'] = 'category';
			
			$series2 = array();
			$series2['name'] = 'description';

			$series3 = array();
			$series3['name'] = 'amount';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->description;
			$series3['data'][] = $row->amount;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}


// get environment_and_natural_resources_water_purification_points

public function get_environment_and_natural_resources_water_purification_points(){
    	$data = DB::table('environment_and_natural_resources_water_purification_points')->get();

    	    $year = array();
			$year['name'] = 'year';
		
	 
			$series1 = array();
			$series1['name'] = 'water purification points';
			
			$series2 = array();
			$series2['name'] = 'boreholes total';

			$series3 = array();
			$series3['name'] = 'public';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->water_purification_points;
			$series2['data'][] = $row->boreholes_total;
			$series3['data'][] = $row->public;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}

 // @George Muchiri
// get land_and_climate_rainfall

public function get_land_and_climate_rainfall(){
    	$data = DB::table('land_and_climate_rainfall')

    	         ->join('health_counties', 
           	'land_and_climate_rainfall.county_id', '=', 'health_counties.county_id')
               
                 ->join('land_and_climate_rainfall_ids', 
           	'land_and_climate_rainfall.rainfall_id', '=', 'land_and_climate_rainfall_ids.rainfall_id')
               
                ->get();


    	    $year = array();
			$year['name'] = 'Year';
		
	 
			$series1 = array();
			$series1['name'] = 'County';
			
			$series2 = array();
			$series2['name'] = 'Rainfall ';

			$series3 = array();
			$series3['name'] = 'Rainfall in MM';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->rainFall;
			$series3['data'][] = $row->rainfall_in_mm;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}

     // @George Muchiri
     // get land_and_climate_surface_area_by_category

public function get_land_and_climate_surface_area_by_category(){
    	$data = DB::table('land_and_climate_surface_area_by_category')        
    	       ->join('health_counties','land_and_climate_surface_area_by_category.county_id', 
    	       	'=', 'health_counties.county_id')
    	       ->join('land_and_climate_surface_area_by_category_ids', 
           	'land_and_climate_surface_area_by_category.category_id', '=', 
           	'land_and_climate_surface_area_by_category_ids.category_id')->get();


	 
			$series1 = array();
			$series1['name'] = 'County';
			
			$series2 = array();
			$series2['name'] = 'Category';

			$series3 = array();
			$series3['name'] = 'Area Per Sq Km';

			 
			foreach ($data as $row)
			{
			
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->categories;
			$series3['data'][] = $row->area_sq_km;
						
			}
			 
			$result = array();
	
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}

      // @George Muchiri
     // get land_and_climate_temperature

public function get_land_and_climate_temperature(){
    	$data = DB::table('land_and_climate_temperature')        
    	       ->join('health_counties','land_and_climate_temperature.county_id', 
    	       	'=', 'health_counties.county_id')
    	       ->join('land_and_climate_temperature_ids', 
           	'land_and_climate_temperature.temperature_id', '=', 
           	'land_and_climate_temperature_ids.temperature_id')->get();


	     	$year = array();
			$year['name'] = 'Year';
		
			$series1 = array();
			$series1['name'] = 'County';
			
			$series2 = array();
			$series2['name'] = 'Temperatures';

			$series3 = array();
			$series3['name'] = 'Temparature Celsius Degrees';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->temperatures;
			$series3['data'][] = $row->temp_celsius_degrees;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}


     // @George Muchiri
     // get land_and_climate_topography_altitude

    public function get_land_and_climate_topography_altitude(){
    	$data = DB::table('land_and_climate_topography_altitude')        
    	       ->join('health_counties','land_and_climate_topography_altitude.county_id', 
    	       	'=', 'health_counties.county_id')->get();

            $year = array();
			$year['name'] = 'Year';
		
			$series1 = array();
			$series1['name'] = 'County';
			
			$series2 = array();
			$series2['name'] = 'geography_type';

			$series3 = array();
			$series3['name'] = 'Temparature Celsius Degrees';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->geography_type;
			$series3['data'][] = $row->altitude_in_metres;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    

}





}