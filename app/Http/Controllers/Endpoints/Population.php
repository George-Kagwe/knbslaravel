<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Population extends Controller
{
    
   // @George Muchiri 
   // get population_by_sex_and_age_groups

    public function get_population_by_sex_and_age_groups(){
    
           $data= DB::table('population_by_sex_and_age_groups')->get();

				 
		
			 
		
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


			$series4 = array();
			$series4['name'] = 'Total Population ';


	        $series5 = array();
			$series5['name'] = 'Age Group ';
			 
			foreach ($data as $row)
			{
		
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
			$series4['data'][] = $row->total_population;
			$series5['data'][] = $row->age_group;
						
			}
			 
			$result = array();
	
	
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 
 
   // @George Muchiri 
   // get population_by_sex_and_school_attendance

    public function get_population_by_sex_and_school_attendance(){
    
           $data= DB::table('population_by_sex_and_school_attendance')->get();

				 
		
			 
		
		    $series1 = array();
			$series1['name'] = 'Education Level ';

			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


			$series4 = array();
			$series4['name'] = 'Total Population ';


	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->education_level;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
			$series4['data'][] = $row->total_population;
		
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     // @George Muchiri 
     // get population_by_type_of_disability

    public function get_population_by_type_of_disability(){
    
           $data= DB::table('population_by_type_of_disability')->get();

				 
		
			 
		
		    $series1 = array();
			$series1['name'] = 'Disability ';

			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


			$series4 = array();
			$series4['name'] = 'Total Population ';


	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->disability;
			$series2['data'][] = $row->males;
			$series3['data'][] = $row->females;
			$series4['data'][] = $row->total_population;
		
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 




     // @George Muchiri 
     // get population_distribution_sex_number_households_area_density

    public function get_population_distribution_sex_number_households_area_density(){
    
           $data= DB::table('population_distribution_sex_number_households_area_density')->get();

			
		    $series1 = array();
			$series1['name'] = 'County Id ';

			$series2 = array();
			$series2['name'] = 'Area in Sq Km ';
	 
		
            $county = array();
            $county['name'] = 'County';		

            $series3 = array();
			$series3['name'] = 'Density';

			$series4 = array();
			$series4['name'] = 'Male';

            $series5 = array();
			$series5['name'] = 'Female';

			$series6 = array();
			$series6['name'] = 'No of House Holds ';

			$series7 = array();
			$series7['name'] = 'Total Population ';


	     
			 
			foreach ($data as $row)
			{
	
			$series1['data'][] = $row->county_id;
			$series2['data'][] = $row->area_in_square_km;
			$county['data'][] = $row->county_name;
			$series3['data'][] = $row->density;
			$series4['data'][] = $row->male;
			$series5['data'][] = $row->female;
			$series6['data'][] = $row->no_of_houseHolds;
		    $series7['data'][] = $row->total_population;
		
						
			}
			 
			$result = array();
	  
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$county);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     
     // @George Muchiri 
     // get population_households_by_main_source_of_water

    public function get_population_households_by_main_source_of_water(){
    
           $data= DB::table('population_households_by_main_source_of_water')->get();

				 
		
			 
		
		    $series1 = array();
			$series1['name'] = 'Source ';

			$series2 = array();
			$series2['name'] = 'Total';

           

	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->source;
			$series2['data'][] = $row->total;
	
		
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     // @George Muchiri 
     // get population_households_type_floor_material_main_dwelling_unit

    public function get_population_households_type_floor_material_main_dwelling_unit(){
    
           $data= DB::table('population_households_type_floor_material_main_dwelling_unit')->get();

				 
		
			 
		
		    $series1 = array();
			$series1['name'] = 'Material ';

			$series2 = array();
			$series2['name'] = 'Households';

           

	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->material;
			$series2['data'][] = $row->households;
	
		
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


     // @George Muchiri 
     // get population_percentage_households_ownership_household_assets

    public function get_population_percentage_households_ownership_household_assets(){
    
           $data= DB::table('population_percentage_households_ownership_household_assets')->get();

				 
		
			 
		
		    $series1 = array();
			$series1['name'] = 'Asset ';

			$series2 = array();
			$series2['name'] = 'Percentage';

           

	     
			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->asset;
			$series2['data'][] = $row->percentage;
	
		
						
			}
			 
			$result = array();
	
	        array_push($result,$series1);
			array_push($result,$series2);
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


     // @George Muchiri 
     // get population_populationbysexhouseholdsdensityandcensusyears

    public function get_population_populationbysexhouseholdsdensityandcensusyears(){
    
           $data= DB::table('population_populationbysexhouseholdsdensityandcensusyears')->get();

				 
		
			 
		
		    $series1 = array();
			$series1['name'] = 'Male ';

			$series2 = array();
			$series2['name'] = 'Female';

           

	        $series3 = array();
			$series3['name'] = 'Total';

			$series4 = array();
			$series4['name'] = 'HHS';

            $series5 = array();
			$series5['name'] = 'Average HH Size';
			 


			$series6 = array();
			$series6['name'] = 'Approximate Area';


			$series7 = array();
			$series7['name'] = 'Density';

			$series8 = array();
			$series8['name'] = 'Census Year';
			foreach ($data as $row)
			{
			$series1['data'][] = $row->male;
			$series2['data'][] = $row->female;
			$series3['data'][] = $row->total;
			$series4['data'][] = $row->hhs;
			$series5['data'][] = $row->av_hh_size;
			$series6['data'][] = $row->approx_area;
		    $series7['data'][] = $row->density;
		    $series8['data'][] = $row->census_year;
						
			}
			 
			$result = array();
	
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

      // @George Muchiri 
      // get population_populationprojectionsbyselectedagegroup

    public function get_population_populationprojectionsbyselectedagegroup(){
    
           $data= DB::table('population_populationprojectionsbyselectedagegroup')->join('health_counties', 'population_populationprojectionsbyselectedagegroup.county_id', '=', 'health_counties.county_id')
               
            
                ->get();

    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'Range 0-4 ';

			$series2 = array();
			$series2['name'] = 'Range 5-9';

           
	        $series3 = array();
			$series3['name'] = 'Range 10-14';

			$series4 = array();
			$series4['name'] = 'Range 15-19';

            $series5 = array();
			$series5['name'] = 'Range 20-24';
			 


			$series6 = array();
			$series6['name'] = 'Range 25-29';


			$series7 = array();
			$series7['name'] = 'Range 30-34';

            
			$series8 = array();
			$series8['name'] = 'Range 35-39';



			$series9 = array();
			$series9['name'] = 'Range 40-44';



			$series10 = array();
			$series10['name'] = 'Range 45-49';




			$series11 = array();
			$series11['name'] = 'Range 50-54';



			$series12 = array();
			$series12['name'] = 'Range 55-59';



			$series13 = array();
			$series13['name'] = 'Range 60-64';



			$series14 = array();
			$series14['name'] = 'Range 65-69';



			$series15 = array();
			$series15['name'] = 'Range 70-74';

			$series16 = array();
			$series16['name'] = 'Range 75-79';


			$series17 = array();
			$series17['name'] = '80 plus';


			$series18 = array();
			$series18['name'] = 'Gender';


			$series19 = array();
			$series19['name'] = 'Year';




			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->range_0_4;
			$series2['data'][] = $row->range_5_9;
			$series3['data'][] = $row->range_10_14;
			$series4['data'][] = $row->range_15_19;
			$series5['data'][] = $row->range_20_24;
			$series6['data'][] = $row->range_25_29;
		    $series7['data'][] = $row->range_30_34;
		    $series8['data'][] = $row->range_35_39;
		    $series9['data'][] = $row->range_40_44;
		    $series10['data'][] = $row->range_45_49;
		    $series11['data'][] = $row->range_50_54;
		    $series12['data'][] = $row->range_55_59;
		    $series13['data'][] = $row->range_60_64;
		    $series14['data'][] = $row->range_65_69;
		    $series15['data'][] = $row->range_70_74;
		    $series16['data'][] = $row->range_75_79;
		    $series17['data'][] = $row->range_80_plus;
			$series18['data'][] = $row->gender;
			$series19['data'][] = $row->year;

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
            array_push($result,$series18);
            array_push($result,$series19);

			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


      // @George Muchiri 
      // get population_populationprojectionsbyspecialagegroups

    public function get_population_populationprojectionsbyspecialagegroups(){
    
           $data= DB::table('population_populationprojectionsbyspecialagegroups')
           ->join('health_counties', 'population_populationprojectionsbyspecialagegroups.county_id', '=', 'health_counties.county_id')
               
            
                ->get();

    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'Under 1 ';

			$series2 = array();
			$series2['name'] = 'Range 1-2';

           
	        $series3 = array();
			$series3['name'] = 'Range 3-5';

			$series4 = array();
			$series4['name'] = 'Range 6-13';

            $series5 = array();
			$series5['name'] = 'Range 14-17';
			 
            $series6 = array();
			$series6['name'] = 'Range 18-24';


			$series7 = array();
			$series7['name'] = 'Range 18-34';

            
			$series8 = array();
			$series8['name'] ='Range 18 and below';



			$series9 = array();
			$series9['name'] = 'Range 18 Plus';



			$series10 = array();
			$series10['name'] = 'Range 15-49';




			$series11 = array();
			$series11['name'] = 'Range 15-64';



			$series12 = array();
			$series12['name'] = 'Range 65 plus';



	
			$series13 = array();
			$series13['name'] = 'Gender';


			$series14 = array();
			$series14['name'] = 'Year';




			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->under_1;
			$series2['data'][] = $row->range_1_2;
			$series3['data'][] = $row->range_3_5;
			$series4['data'][] = $row->range_6_13;
			$series5['data'][] = $row->range_14_17;
			$series6['data'][] = $row->range_18_24;
		    $series7['data'][] = $row->range_18_34;
		    $series8['data'][] = $row->range_less_18;
		    $series9['data'][] = $row->range_18_plus;
		    $series10['data'][] = $row->range_15_49;
		    $series11['data'][] = $row->range_15_64;
		    $series12['data'][] = $row->range_65_plus;
		    $series13['data'][] = $row->gender;
			$series14['data'][] = $row->year;

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



	   // @George Muchiri 
      // get population_kihibs_by_broad_age_group

    public function get_population_kihibs_by_broad_age_group(){
    
           $data= DB::table('population_kihibs_by_broad_age_group')
           ->join('health_counties', 'population_kihibs_by_broad_age_group.county_id', '=', 'health_counties.county_id')
               
            
                ->get();

    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'Range 0-14 ';

			$series2 = array();
			$series2['name'] = 'Range 15-64';

           
	        $series3 = array();
			$series3['name'] = 'Over 65';

			$series4 = array();
			$series4['name'] = 'Not Stated';

            $series5 = array();
			$series5['name'] = 'Age Depend Ratio';
			 
            $series6 = array();
			$series6['name'] = 'Child Depend Ratio';


			$series7 = array();
			$series7['name'] = 'Old Age Depend Ratio';

            
			$series8 = array();
			$series8['name'] ='Individuals';


			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->range_0_14;
			$series2['data'][] = $row->range_15_64;
			$series3['data'][] = $row->over_65;
			$series4['data'][] = $row->not_stated;
			$series5['data'][] = $row->age_depend_ratio;
			$series6['data'][] = $row->child_depend_ratio;
		    $series7['data'][] = $row->old_age_depend_ratio;
		    $series8['data'][] = $row->individuals;
		

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
         
          
          
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 
 
	    // @George Muchiri 
        // get population_kihibs_children_under_18_by_orphanhood


        public function get_population_kihibs_children_under_18_by_orphanhood(){
    
       $data= DB::table('population_kihibs_children_under_18_by_orphanhood')
           ->join('health_counties', 
           	'population_kihibs_children_under_18_by_orphanhood.county_id', '=', 'health_counties.county_id')->get();
    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'Living with both';

			$series2 = array();
			$series2['name'] = 'Father Alive';

           
	        $series3 = array();
			$series3['name'] = 'Father Deceased';

			$series4 = array();
			$series4['name'] = 'Mother Alive';

            $series5 = array();
			$series5['name'] = 'Mother Deceased';
			 
            $series6 = array();
			$series6['name'] = 'Both Alive';


			$series7 = array();
			$series7['name'] = 'Only Father Alive';

            
			$series8 = array();
			$series8['name'] ='Only Mother Alive';


            
			$series9 = array();
			$series9['name'] ='Both Parents Deceased';


			$series10= array();
			$series10['name'] ='Missing Info';


			$series11 = array();
			$series11['name'] ='Orphanhod';


			$series12= array();
			$series12['name'] ='Individuals';


		
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->living_with_both;
			$series2['data'][] = $row->father_alive;
			$series3['data'][] = $row->father_deceased;
			$series4['data'][] = $row->mother_alive;
			$series5['data'][] = $row->mother_deceased;
			$series6['data'][] = $row->both_alive;
		    $series7['data'][] = $row->only_father_alive;
		    $series8['data'][] = $row->only_mother_alive;
		    $series9['data'][] = $row->both_parents_deceased;
		    $series10['data'][] = $row->missing_info;
	        $series11['data'][] = $row->orphanhood;
		    $series12['data'][] = $row->individuals;
		

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
         
          
          
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


	   // @George Muchiri 
      // get population_kihibs_distribution_by_sex

    public function get_population_kihibs_distribution_by_sex(){
    
           $data= DB::table('population_kihibs_distribution_by_sex')
           ->join('health_counties', 'population_kihibs_distribution_by_sex.county_id', '=', 'health_counties.county_id')
               
            
                ->get();

    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'Male Individauls ';

			$series2 = array();
			$series2['name'] = 'Male Percent';

           
	        $series3 = array();
			$series3['name'] = 'Female Individuals';

			$series4 = array();
			$series4['name'] = 'Female Percent';

            $series5 = array();
			$series5['name'] = 'Sex Ratio';
			 
            $series6 = array();
			$series6['name'] = 'Individuals';



			$series8['name'] ='Individuals';


			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->male_individuals;
			$series2['data'][] = $row->male_per_cent;
			$series3['data'][] = $row->female_individuals	;
			$series4['data'][] = $row->female_per_cent;
			$series5['data'][] = $row->sex_ratio;
			$series6['data'][] = $row->individuals;
		 
		

			}
			 
			$result = array();
	        array_push($result,$county);
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
		
         
          
          
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 
      // @George Muchiri 
      // get population_kihibs_distribution_of_households_by_size

    public function get_population_kihibs_distribution_of_households_by_size(){
    
           $data= DB::table('population_kihibs_distribution_of_households_by_size')
           ->join('health_counties', 
           	'population_kihibs_distribution_of_households_by_size.county_id', '=', 'health_counties.county_id')
               
            
                ->get();

    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'range_1_2_persons ';

			$series2 = array();
			$series2['name'] = 'range_3_4_persons';

           
	        $series3 = array();
			$series3['name'] = 'range_5_6_persons	';

			$series4 = array();
			$series4['name'] = 'Over 7 Persons';

            $series5 = array();
			$series5['name'] = 'Households';
			 
            $series6 = array();
			$series6['name'] = 'Mean Household Size';



			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->range_1_2_persons;
			$series2['data'][] = $row->range_3_4_persons;
			$series3['data'][] = $row->range_5_6_persons;
			$series4['data'][] = $row->over_7_persons;
			$series5['data'][] = $row->households;
			$series6['data'][] = $row->mean_hhold_size;
		 
		

			}
			 
			$result = array();
	        array_push($result,$county);
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
		
         
          
          
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


      // @George Muchiri 
      // get population_kihibs_hholds_by_sex_of_household_head


    public function get_population_kihibs_hholds_by_sex_of_household_head(){
    
           $data= DB::table('population_kihibs_hholds_by_sex_of_household_head')
           ->join('health_counties', 
           	'population_kihibs_hholds_by_sex_of_household_head.county_id', '=', 'health_counties.county_id')->get();

    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'Male ';

			$series2 = array();
			$series2['name'] = 'Female';

           
	        $series3 = array();
			$series3['name'] = 'Household';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->male;
			$series2['data'][] = $row->female;
			$series3['data'][] = $row->households;
		
		

			}
			 
			$result = array();
	        array_push($result,$county);
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
	
		
         
          
          
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


      // @George Muchiri 
      // get population_kihibs_marital_status_above_18_years

    public function get_population_kihibs_marital_status_above_18_years(){
    
           $data= DB::table('population_kihibs_marital_status_above_18_years')
           ->join('health_counties', 
           	'population_kihibs_marital_status_above_18_years.county_id', '=', 'health_counties.county_id')
               
            
                ->get();

    	

            $county = array();
			$county['name'] = 'County';
		
		    $series1 = array();
			$series1['name'] = 'Monogamous ';

			$series2 = array();
			$series2['name'] = 'Polygamous';

           
	        $series3 = array();
			$series3['name'] = 'Living Together';

			$series4 = array();
			$series4['name'] = 'Seperated';

            $series5 = array();
			$series5['name'] = 'Divorced';
			 
            $series6 = array();
			$series6['name'] = 'Widow/Widower';

            $series7 = array();
			$series7['name'] = 'Never Married';


			$series8 = array();
			$series8['name'] = 'Individuals';

			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->monogamous;
			$series2['data'][] = $row->polygamous;
			$series3['data'][] = $row->living_together;
			$series4['data'][] = $row->seperated;
			$series5['data'][] = $row->divorced;
			$series6['data'][] = $row->widow_widower;
		    $series7['data'][] = $row->never_married;	
			$series8['data'][] = $row->individuals;

			}
			 
			$result = array();
	        array_push($result,$county);
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
		
         
          
          
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 



}
