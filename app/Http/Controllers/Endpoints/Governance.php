<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Governance extends Controller
{
    //@ George Muchiri
    // function to get governance_cases_forwarded_and_action_taken


    public function get_governance_cases_forwarded_and_action_taken(){

    	$data= DB::table('governance_cases_forwarded_and_action_taken')->get();

    	$year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Action taken';
			
			$series2 = array();
			$series2['name'] = 'No of recommendations';

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->action_taken;
			$series2['data'][] = $row->no_of_recommendations;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);

    }

    // @George Muchiri
    // get governance_cases_handled_by_ethics_commision 
    
    public function get_governance_cases_handled_by_ethics_commision(){
    
           $data= DB::table('governance_cases_handled_by_ethics_commision')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Action ';
			
			$series2 = array();
			$series2['name'] = 'No of cases';

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->action;
			$series2['data'][] = $row->no_cases;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }

           
    // @George Muchiri
    // get governance_cases_handled_by_various_courts

    public function get_governance_cases_handled_by_various_courts(){
    
           $data= DB::table('governance_cases_handled_by_various_courts')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Category ';
			
			$series2 = array();
			$series2['name'] = 'Kadhis Court';

			$series3 = array();
			$series3['name'] = 'Magistrate Court';


			$series4 = array();
			$series4['name'] = 'High Court';


			$series5 = array();
			$series5['name'] = 'Court of Appeal';

			$series6 = array();
			$series6['name'] = 'Supreme Court';


			


			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
	        $series1['data'][] = $row->category;
			$series2['data'][] = $row->kadhis_court;
			$series3['data'][] = $row->magistrate_court;
			$series4['data'][] = $row->high_court;
			$series5['data'][] = $row->court_of_appeal;
			$series6['data'][] = $row->supreme_court;

						
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

   // @George Muchiri 
   // get governance_convicted_prisoners_by_type_of_offence_and_sex

    public function get_governance_convicted_prisoners_by_type_of_offence_and_sex(){
    
           $data= DB::table('governance_convicted_prisoners_by_type_of_offence_and_sex')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Offence ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->offence;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }

   // @George Muchiri 
   // get governance_convicted_prison_population_by_age_and_sex

    public function get_governance_convicted_prison_population_by_age_and_sex(){
    
           $data= DB::table('governance_convicted_prison_population_by_age_and_sex')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Category ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }     

   // @George Muchiri 
   // get  governance_crimes_reported_to_police_by_command_stations

    public function get_governance_crimes_reported_to_police_by_command_stations(){
    
           $data= DB::table('governance_crimes_reported_to_police_by_command_stations')->join('health_counties',
            'governance_crimes_reported_to_police_by_command_stations.county_id', '=', 'health_counties.county_id')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
		    $county = array();
			$county['name'] = 'County';
			
			$series2 = array();
			$series2['name'] = 'Crimes';

       
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
		    $county['data'][] = $row->county_name;
			$series2['data'][] = $row->crimes;
		
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$county);
			array_push($result,$series2);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


   // @George Muchiri 
   // get governance_daily_average_population_of_prisoners_by_sex

    public function get_governance_daily_average_population_of_prisoners_by_sex(){
    
           $data= DB::table('governance_daily_average_population_of_prisoners_by_sex')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Category ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  



   // @George Muchiri 
   // get governance_daily_average_population_of_prisoners_by_sex

    public function get_governance_environmental_crimes_reported_to_nema(){
    
           $data= DB::table('governance_environmental_crimes_reported_to_nema')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Type of Case ';
			
			$series2 = array();
			$series2['name'] = 'No of Cases';

           
			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->type_of_case;
			$series2['data'][] = $row->no_of_cases;
			
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  


   // @George Muchiri 
   // get governance_experienceof_domestic_violence_by_age

    public function get_governance_experienceof_domestic_violence_by_age(){
    
           $data= DB::table('governance_experienceof_domestic_violence_by_age')->get();

   
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Age ';
			
			$series2 = array();
			$series2['name'] = 'Percentage Experienced Physical Violence';

           

           	$series3 = array();
			$series3['name'] = 'Percentage Experienced Sexual Violence ';
			
			$series4 = array();
			$series4['name'] = 'Percentage Experienced Physical & Sexual Violence';

			$series5 = array();
			$series5['name'] = 'Gender ';
			
		
			foreach ($data as $row)
			{
			$series1['data'][] = $row->age;
			$series2['data'][] = $row->percentage_experienced_physical_violence;
			$series3['data'][] = $row->percentage_experienced_sexual_violence;
            $series4['data'][] = $row->percentage_experienced_physical_and_sexual_violence;
			$series5['data'][] = $row->gender;
			
						
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  

 

    // @George Muchiri 
    // get governance_experienceof_domestic_violence_by_marital_success

    public function get_governance_experienceof_domestic_violence_by_marital_success(){
    
           $data= DB::table('governance_experienceof_domestic_violence_by_marital_success')->get();

   
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Marital Status';
			
			$series2 = array();
			$series2['name'] = 'Percentage Experienced Physical Violence';

           

           	$series3 = array();
			$series3['name'] = 'Percentage Experienced Sexual Violence ';
			
			$series4 = array();
			$series4['name'] = 'Percentage Experienced Physical & Sexual Violence';

			$series5 = array();
			$series5['name'] = 'Gender ';
			
		
			foreach ($data as $row)
			{
			$series1['data'][] = $row->marital_status;
			$series2['data'][] = $row->percentage_experienced_physical_violence;
			$series3['data'][] = $row->percentage_experienced_sexual_violence;
            $series4['data'][] = $row->percentage_experienced_physical_and_sexual_violence;
			$series5['data'][] = $row->gender;
			
						
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  

    // @George Muchiri 
    // get governance_experienceof_domestic_violence_by_residence

    public function get_governance_experienceof_domestic_violence_by_residence(){
    
           $data= DB::table('governance_experienceof_domestic_violence_by_residence')->get();

   
				 
			$series1 = array();
			$series1['name'] = 'Residence';
			
			$series2 = array();
			$series2['name'] = 'Percentage Experienced Physical Violence';

           

           	$series3 = array();
			$series3['name'] = 'Percentage Experienced Sexual Violence ';
			
			$series4 = array();
			$series4['name'] = 'Percentage Experienced Physical & Sexual Violence';

			$series5 = array();
			$series5['name'] = 'Gender ';
			
		
			foreach ($data as $row)
			{
			$series1['data'][] = $row->residence;
			$series2['data'][] = $row->percentage_experienced_physical_violence;
			$series3['data'][] = $row->percentage_experienced_sexual_violence;
            $series4['data'][] = $row->percentage_experienced_physical_and_sexual_violence;
			$series5['data'][] = $row->gender;
			
						
			}
			 
			$result = array();
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  



    //@George Muchiri 
    //get governance_firearms_and_ammunition_recovered_or_surrendered

    public function get_governance_firearms_and_ammunition_recovered_or_surrendered(){
    
           $data= DB::table('governance_firearms_and_ammunition_recovered_or_surrendered')->get();

   
           $year = array();
			$year['name'] = 'Year';
				 
			$series1 = array();
			$series1['name'] = 'Category';
			
			$series2 = array();
			$series2['name'] = 'Rifles';

           

           	$series3 = array();
			$series3['name'] = 'Pistols ';
			
			$series4 = array();
			$series4['name'] = 'Toy Pistols';

			$series5 = array();
			$series5['name'] = 'Ammunition ';
			
		
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->pistols;
			$series3['data'][] = $row->toy_pistols;
            $series4['data'][] = $row->ammunition;
			
			
						
			}
			 
			$result = array();

			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  



    //@George Muchiri 
    //get governance_identity_cards_made_processed_and_collected

    public function get_governance_identity_cards_made_processed_and_collected(){
    
           $data= DB::table('governance_identity_cards_made_processed_and_collected')  ->join('health_counties', 'governance_identity_cards_made_processed_and_collected.county_id', '=', 'health_counties.county_id')->get();

   
            $year = array();
			$year['name'] = 'Year';

            $county = array();
            $county['name'] = 'County';


		
				 
			$series1 = array();
			$series1['name'] = 'Npr apps made';
			
			$series2 = array();
			$series2['name'] = 'Npr ids produced';

           	$series3 = array();
			$series3['name'] = 'Npr ids collected ';
			
		
		
			foreach ($data as $row)
			{
	        $year['data'][] = $row->year;
			$county['data'][] = $row->county_name;
		    $series1['data'][] = $row->npr_apps_made;
			$series2['data'][] = $row->npr_ids_prod;
			$series3['data'][] = $row->npr_ids_collected;
         
			
			
						
			}
			 
			$result = array();
			array_push($result,$year);
            array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
	
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  


    //@George Muchiri 
    //get governance_knowledge_and_prevalence_of_female_circumcision

    public function get_governance_knowledge_and_prevalence_of_female_circumcision(){
    
           $data= DB::table('governance_knowledge_and_prevalence_of_female_circumcision')->get();

   
           $year = array();
			$year['name'] = 'Year';
				 
			$series1 = array();
			$series1['name'] = 'Age';
			
			$series2 = array();
			$series2['name'] = 'Percentage of women heard of FC';

           

           	$series3 = array();
			$series3['name'] = 'Percentage of women not heard of FC';
			
			
		
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->age;
			$series2['data'][] = $row->percentage_women_heard_of_FC;
			$series3['data'][] = $row->percentage_women_not_heard_of_FC;
           
			
			
						
			}
			 
			$result = array();

			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
		
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  


    // @George Muchiri 
    // get governance_magistrates_judges_and_practicing_lawyers

    public function get_governance_magistrates_judges_and_practicing_lawyers(){
    
           $data= DB::table('governance_magistrates_judges_and_practicing_lawyers')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Category ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 




       // @George Muchiri 
       // get governance_members_of_nationalassembly_and_senators

    public function get_governance_members_of_nationalassembly_and_senators(){
    
           $data= DB::table('governance_members_of_nationalassembly_and_senators')->get();

         
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Status';
			
			$series2 = array();
			$series2['name'] = 'Men';

            $series3 = array();
			$series3['name'] = 'Women';

   			$series4 = array();
			$series4['name'] = 'Total';


   		    $series5 = array();
			$series5['name'] = 'Women Percentage';

		

			 
			foreach ($data as $row)
			{
			
			$series1['data'][] = $row->status;
			$series2['data'][] = $row->men;
			$series3['data'][] = $row->women;
			$series4['data'][] = $row->total;
			$series5['data'][] = $row->women_percentage;		
			}
			 
			$result = array();
		
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


    // @George Muchiri 
    // get governance_murder_cases_and_convictions_obtained_by_high_court

    public function get_governance_murder_cases_and_convictions_obtained_by_high_court(){
    
           $data= DB::table('governance_murder_cases_and_convictions_obtained_by_high_court')->get();

 
				 
		    $year = array();
			$year['name'] = 'Year';
			 
			$series1 = array();
			$series1['name'] = 'Court Station ';
			
			$series2 = array();
			$series2['name'] = 'Registered Murder Cases';

            $series3 = array();
			$series3['name'] = 'Murder Convictions Obtained';

  
			foreach ($data as $row)
			{
		    $year['data'][] = $row->year;
			$series1['data'][] = $row->court_station;
			$series2['data'][] = $row->registered_murder_cases;
			$series3['data'][] = $row->murder_convictions_obtained;
	
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
		
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


    // @George Muchiri 
    // get governance_number_of_police_prisons_and_probation_officers

    public function get_governance_number_of_police_prisons_and_probation_officers(){
    
           $data= DB::table('governance_number_of_police_prisons_and_probation_officers')->get();

            $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Category ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

   // @George Muchiri 
    // get governance_number_of_refugees_by_age_and_sex

    public function get_governance_number_of_refugees_by_age_and_sex(){
    
           $data= DB::table('governance_number_of_refugees_by_age_and_sex')->get();

            $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Children ';
			
			$series2 = array();
			$series2['name'] = 'Adult';

            $series3 = array();
			$series3['name'] = 'Gender';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->children;
			$series2['data'][] = $row->adult;
			$series3['data'][] = $row->gender;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 





    // @George Muchiri 
    // get governance_offences_committed_against_morality
 
    public function get_governance_offences_committed_against_morality(){
    
           $data= DB::table('governance_offences_committed_against_morality')->get();

            $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Category ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 



    // @George Muchiri 
    // get get governance_offence_by_sex_and_command_stations
   public function get_governance_offence_by_sex_and_command_stations(){
    
           $data= DB::table('governance_offence_by_sex_and_command_stations')  ->join('health_counties', 'governance_offence_by_sex_and_command_stations.county_id', '=', 'health_counties.county_id')
               
            
                ->get();

    	

            $year = array();
			$year['name'] = 'Year';
				 
            $county = array();
			$county['name'] = 'County';
				 
		

			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$county['data'][] = $row->county_name;
		
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
	        array_push($result,$county);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

    // @George Muchiri 
    // get governance_offenders_serving
    public function get_governance_offenders_serving(){
    
           $data= DB::table('governance_offenders_serving')->get();

    	

            $year = array();
			$year['name'] = 'Year';
				 
            $series1 = array();
			$series1['name'] = 'Offence';
				 
		

			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


			$series4 = array();
			$series4['name'] = 'Category ';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->offence;
		    $series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
			$series4['data'][] = $row->category;
						
			}
			 
			$result = array();
			array_push($result,$year);
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     // @George Muchiri 
    // get governance_participation_in_key_decision_making_positions_by_sex
    public function get_governance_participation_in_key_decision_making_positions_by_sex(){
    
           $data= DB::table('governance_participation_in_key_decision_making_positions_by_sex')->get();

    	

            $year = array();
			$year['name'] = 'Year';

		    $series1 = array();
			$series1['name'] = 'Category ';
		

			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';

            $series4 = array();
			$series4['name'] = 'Percentage';
		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
		    $series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
			$series4['data'][] = $row->percentage;	
			}
			 
			$result = array();
			array_push($result,$year);
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 

     // @George Muchiri 
    // get governance_passports_work_permits_and_foreigners_registered
    public function get_governance_passports_work_permits_and_foreigners_registered(){
    
           $data= DB::table('governance_passports_work_permits_and_foreigners_registered')->get();

    	

            $year = array();
			$year['name'] = 'Year';

		    $series1 = array();
			$series1['name'] = 'Passport Issued ';
		

			$series2 = array();
			$series2['name'] = 'Foreign National Reg';

            $series3 = array();
			$series3['name'] = 'Work Permit Issued';

            $series4 = array();
			$series4['name'] = 'Work Permit Ren';
		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->passport_issued;
		    $series2['data'][] = $row->foreign_nat_reg;
			$series3['data'][] = $row->work_permit_issued;
			$series4['data'][] = $row->work_permit_ren;	
			}
			 
			$result = array();
			array_push($result,$year);
	        array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    } 


    // @George Muchiri 
   // get governance_persons_reported_committed_offences_related_to_drugs

    public function get_governance_persons_reported_committed_offences_related_to_drugs(){
    
           $data= DB::table('governance_persons_reported_committed_offences_related_to_drugs')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Offence ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->offence;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }



    // @George Muchiri 
   // get governance_persons_reported_tohave_committed_defilement

    public function get_governance_persons_reported_tohave_committed_defilement(){
    
           $data= DB::table('governance_persons_reported_tohave_committed_defilement')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Number ';
			
			$series2 = array();
			$series2['name'] = 'Proportion';

            $series3 = array();
			$series3['name'] = 'Gender';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->number;
			$series2['data'][] = $row->proportion;
			$series3['data'][] = $row->gender;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


    // @George Muchiri 
   // get governance_persons_reported_tohave_committed_rape

    public function get_governance_persons_reported_tohave_committed_rape(){
    
           $data= DB::table('governance_persons_reported_tohave_committed_rape')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Number ';
			
			$series2 = array();
			$series2['name'] = 'Proportion';

            $series3 = array();
			$series3['name'] = 'Gender';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->number;
			$series2['data'][] = $row->proportion;
			$series3['data'][] = $row->gender;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }
    // @George Muchiri 
   // get governance_persons_reported_to_have_committed_homicide_by_sex

    public function get_governance_persons_reported_to_have_committed_homicide_by_sex(){
    
           $data= DB::table('governance_persons_reported_to_have_committed_homicide_by_sex')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Offence ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->offence;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }

    // @George Muchiri 
   // get governance_persons_reported_to_have_committed_robbery_and_theft

    public function get_governance_persons_reported_to_have_committed_robbery_and_theft(){
    
           $data= DB::table('governance_persons_reported_to_have_committed_robbery_and_theft')->get();
           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Offence ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->offence;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }
  // @George Muchiri 
   // get governance_prevalence_female_circumcision_and_type

    public function get_governance_prevalence_female_circumcision_and_type(){
    
           $data= DB::table('governance_prevalence_female_circumcision_and_type')->get();
         
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Age ';
			
			$series2 = array();
			$series2['name'] = 'Cut no flesh removed';

            $series3 = array();
			$series3['name'] = 'Cut flesh removed';


		    $series4 = array();
			$series4['name'] = 'Sewn closed ';
			
			$series5 = array();
			$series5['name'] = 'Others';

            $series6 = array();
			$series6['name'] = 'Percentage of women circumcised';

			 
			foreach ($data as $row)
			{
			$series1['data'][] = $row->age;
			$series2['data'][] = $row->cut_no_flesh_removed;
			$series3['data'][] = $row->cut_no_flesh_removed;
			$series4['data'][] = $row->sewn_closed;
			$series5['data'][] = $row->others;
			$series6['data'][] = $row->percentage_women_circumcised	;
			
			}
			 
			$result = array();
			
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }



   // @George Muchiri 
   // get governance_prison_population_by_sentence_duration_and_sex

    public function get_governance_prison_population_by_sentence_duration_and_sex(){
    
           $data= DB::table('governance_prison_population_by_sentence_duration_and_sex')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Category ';
			
			$series2 = array();
			$series2['name'] = 'Male';

            $series3 = array();
			$series3['name'] = 'Female';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->category;
			$series2['data'][] = $row->male;
			$series3['data'][] = $row->female;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }     

   // @George Muchiri 
   // get governance_public_assets_traced_recovered_and_loss_averted

    public function get_governance_public_assets_traced_recovered_and_loss_averted(){
    
           $data= DB::table('governance_public_assets_traced_recovered_and_loss_averted')->get();

           $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Public assets traced ';
			
			$series2 = array();
			$series2['name'] = 'Public assets recovered';

            $series3 = array();
			$series3['name'] = 'Loss Averted';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->public_assets_traced;
			$series2['data'][] = $row->public_assets_recovered	;
			$series3['data'][] = $row->loss_averted;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }  

   // @George Muchiri 
   // get governance_registered_voters_by_county_and_by_sex

    public function get_governance_registered_voters_by_county_and_by_sex(){
    
           $data= DB::table('governance_registered_voters_by_county_and_by_sex')->join('health_counties','governance_registered_voters_by_county_and_by_sex.county_id', '=', 'health_counties.county_id')->join('health_subcounty',
            'governance_registered_voters_by_county_and_by_sex.subcounty_id', '=', 'health_subcounty.subcounty_id')->get();

     
				 
		
			 
		    $county = array();
			$county['name'] = 'County';


			$subcounty = array();
			$subcounty['name'] = 'Sub County';
			
			$series2 = array();
			$series2['name'] = 'Registered Voters';


			$series3 = array();
			$series3['name'] = 'Gender';
       
			foreach ($data as $row)
			{
		
		    $county['data'][] = $row->county_name;
		    $subcounty['data'][] = $row->subcounty_name;
            $series2['data'][] = $row->reg_voters;
			$series3['data'][] = $row->gender;
		
						
			}
			 
			$result = array();
		
			array_push($result,$county);
			array_push($result,$subcounty);
			array_push($result,$series2);
			array_push($result,$series3);
		
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


    // @George Muchiri 
   // get governance_total_prisoners_committed_for_debt_bysex

    public function get_governance_total_prisoners_committed_for_debt_bysex(){
    
           $data= DB::table('governance_total_prisoners_committed_for_debt_bysex')->get();

            $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Number ';
			
			$series2 = array();
			$series2['name'] = 'Proportion';

            $series3 = array();
			$series3['name'] = 'Gender';


		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->number;
			$series2['data'][] = $row->proportion;
			$series3['data'][] = $row->gender;
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }

    // @George Muchiri 
   // get governance_women_groups_registration_contributions_uwezo_funds

    public function get_governance_women_groups_registration_contributions_uwezo_funds(){
    
           $data= DB::table('governance_women_groups_registration_contributions_uwezo_funds')->get();

            $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'No of Beneficiaries';
			
			$series2 = array();
			$series2['name'] = 'Uwezo fund disbursed';
		

       

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->no_of_beneficiaries ;
			$series2['data'][] = $row->uwezo_fund_disbursed;
	
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
	
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }


    // @George Muchiri 
   // get governance_women_groups_registration_contributions_women_groups

    public function get_governance_women_groups_registration_contributions_women_groups(){
    
           $data= DB::table('governance_women_groups_registration_contributions_women_groups')->get();

            $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'Number';


			$series2 = array();
			$series2['name'] = 'Membership';
			
			$series3 = array();
			$series3['name'] = 'Group Contributions';


       

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->number;
			$series2['data'][] = $row->membership;
			$series2['data'][] = $row->group_contributions;
	
	
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
	
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }

   // @George Muchiri 
   // get governance_women_groups_registration_cont_women_enterprise_fund

    public function get_governance_women_groups_registration_cont_women_enterprise_fund(){
    
           $data= DB::table('governance_women_groups_registration_cont_women_enterprise_fund')->get();

            $year = array();
			$year['name'] = 'Year';
				 
		
			 
			$series1 = array();
			$series1['name'] = 'No of Beneficiaries';

			
			$series2 = array();
			$series2['name'] = 'Women Enterprise Fund	';
			
		


       

		

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->no_of_beneficiaries ;
			$series2['data'][] = $row->women_enterprise_fund;
			
	
						
			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
	
			
					
			print json_encode($result, JSON_NUMERIC_CHECK);


    }



}
      