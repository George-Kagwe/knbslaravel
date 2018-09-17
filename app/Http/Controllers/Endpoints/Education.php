<?php

namespace App\Http\Controllers\Endpoints;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Education extends Controller
{
     //function to get data from education_approved_degree_diploma_programs

    public function education_approved_degree_diploma_programs(){
    	$data = DB::table('education_approved_degree_diploma_programs')->get();

    	    $year = array();
			$year['name'] = 'year';
				 
			$series1 = array();
			$series1['name'] = 'approved degree programmes';
			
			$series2 = array();
			$series2['name'] = 'approved private university degreeprogrammes';

			$series3 = array();
			$series3['name'] = 'validated diploma programmes';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->approved_degree_programmes;
			$series2['data'][] = $row->approved_private_university_degreeprogrammes;
			$series3['data'][] = $row->validated_diploma_programmes;			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
     //function to get data from education_csa_adulteducationcentresbysubcounty

    public function education_csa_adulteducationcentresbysubcounty(){
    	$data = DB::table('education_csa_adulteducationcentresbysubcounty')
    	            ->join('health_counties', 'education_csa_adulteducationcentresbysubcounty.county_id', '=', 'health_counties.county_id')
    	            ->join('health_subcounty', 'education_csa_adulteducationcentresbysubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();




    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'centres';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->centres;			}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
     //function to get data from education_csa_adulteducationenrolmentbysexandsubcounty

    public function education_csa_adulteducationenrolmentbysexandsubcounty(){
    	$data = DB::table('education_csa_adulteducationenrolmentbysexandsubcounty')
    	            ->join('health_counties', 'education_csa_adulteducationenrolmentbysexandsubcounty.county_id', '=', 'health_counties.county_id')
    	            ->join('health_subcounty', 'education_csa_adulteducationenrolmentbysexandsubcounty.subcounty_id', '=', 'health_subcounty.subcounty_id')->get();


    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'number';

			$series4 = array();
			$series4['name'] = 'gender';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->number;
			$series4['data'][] = $row->gender;
						}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }

     //function to get data from education_csa_adulteducationproficiencytestresults

    public function education_csa_adulteducationproficiencytestresults(){
    $data = DB::table('education_csa_adulteducationproficiencytestresults')
               ->join('health_counties', 'education_csa_adulteducationproficiencytestresults.county_id', '=', 'health_counties.county_id')
               ->join('health_subcounty', 'education_csa_adulteducationproficiencytestresults.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();


    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'no sat';

			$series4 = array();
			$series4['name'] = 'no passed';

			$series5 = array();
			$series5['name'] = 'gender';

			 
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->no_sat;
			$series4['data'][] = $row->no_passed;
			$series5['data'][] = $row->gender;
						}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
     //function to get data from education_csa_ecdecentresbycategoryandsubcounty

    public function education_csa_ecdecentresbycategoryandsubcounty(){
    	 $data = DB::table('education_csa_ecdecentresbycategoryandsubcounty')
    	            ->join('health_counties', 'education_csa_ecdecentresbycategoryandsubcounty.county_id', '=', 'health_counties.county_id')
    	            ->join('health_subcounty', 'education_csa_ecdecentresbycategoryandsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();



    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'no of centres';

			$series4 = array();
			$series4['name'] = 'category';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->no_of_centres;
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
    
 //function to get data from education_csa_primaryenrolmentandaccessindicators

    public function education_csa_primaryenrolmentandaccessindicators(){
    	$data = DB::table('education_csa_primaryenrolmentandaccessindicators')
    	          ->join('health_counties', 'education_csa_primaryenrolmentandaccessindicators.county_id', '=', 'education_csa_primaryenrolmentandaccessindicators.county_id')->get();


    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'enrolment';

			$series3 = array();
			$series3['name'] = 'ger';

			$series4 = array();
			$series4['name'] = 'ner';

			$series5 = array();
			$series5['name'] = 'gender';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->enrolment;
			$series3['data'][] = $row->ger;
			$series4['data'][] = $row->ner;
			$series5['data'][] = $row->gender;
						}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
					
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
 //function to get data from education_csa_primaryschoolenrollmentbyclasssexandsubcounty

    public function education_csa_primaryschoolenrollmentbyclasssexandsubcounty(){
    	 $data = DB::table('education_csa_primaryschoolenrollmentbyclasssexandsubcounty')
    	           ->join('health_counties', 'education_csa_primaryschoolenrollmentbyclasssexandsubcounty.county_id', '=', 'health_counties.county_id')
    	             ->join('health_subcounty', 'education_csa_primaryschoolenrollmentbyclasssexandsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();

    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'class 1';

			$series4 = array();
			$series4['name'] = 'class 2';

			$series5 = array();
			$series5['name'] = 'class 3';

			$series6 = array();
			$series6['name'] = 'class 4';

			$series7 = array();
			$series7['name'] = 'class 5';

			$series8 = array();
			$series8['name'] = 'class 6';

			$series9 = array();
			$series9['name'] = 'class 7';

			$series10 = array();
			$series10['name'] = 'class 8';

			$series11 = array();
			$series11['name'] = 'gender';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->class_1;
			$series4['data'][] = $row->class_2;
			$series5['data'][] = $row->class_3;
			$series6['data'][] = $row->class_4;
			$series7['data'][] = $row->class_5;
			$series8['data'][] = $row->class_6;
			$series9['data'][] = $row->class_7;
			$series10['data'][] = $row->class_8;
			$series11['data'][] = $row->gender;
		
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
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_csa_primaryschoolsbycategoryandsubcounty

    public function education_csa_primaryschoolsbycategoryandsubcounty(){
    	 $data = DB::table('education_csa_primaryschoolsbycategoryandsubcounty')
    	            ->join('health_counties', 'education_csa_primaryschoolsbycategoryandsubcounty.county_id', '=', 'health_counties.county_id')
    	            ->join('health_subcounty', 'education_csa_primaryschoolsbycategoryandsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();

    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'no of schools';

			$series4 = array();
			$series4['name'] = 'category';

	
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->no_of_schools;
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
    

//function to get data from education_csa_secondaryenrolmentandaccessindicators

    public function education_csa_secondaryenrolmentandaccessindicators(){
    	 $data = DB::table('education_csa_secondaryenrolmentandaccessindicators')
    	            ->join('health_counties', 'education_csa_secondaryenrolmentandaccessindicators.county_id', '=', 'education_csa_secondaryenrolmentandaccessindicators.county_id')->get();

    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'enrolment';

			$series3 = array();
			$series3['name'] = 'ger';

			$series4 = array();
			$series4['name'] = 'ner';

			$series5 = array();
			$series5['name'] = 'gender';

	
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->enrolment;
			$series3['data'][] = $row->ger;
			$series4['data'][] = $row->ner;
			$series5['data'][] = $row->gender;
						}
			 
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
				
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
//function to get data from education_csa_secondaryschoolenrollmentbyclasssexsubcounty

    public function education_csa_secondaryschoolenrollmentbyclasssexsubcounty(){
   	 $data = DB::table('education_csa_secondaryschoolenrollmentbyclasssexsubcounty')
   	            ->join('health_counties', 'education_csa_secondaryschoolenrollmentbyclasssexsubcounty.county_id', '=', 'health_counties.county_id')
   	            ->join('health_subcounty', 'education_csa_secondaryschoolenrollmentbyclasssexsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();

    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'form 1';

			$series4 = array();
			$series4['name'] = 'form 2';

			$series5 = array();
			$series5['name'] = 'form 3';

			$series6 = array();
			$series6['name'] = 'form 4';

			$series7 = array();
			$series7['name'] = 'gender';

	
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->form_1;
			$series4['data'][] = $row->form_2;
			$series5['data'][] = $row->form_3;
			$series6['data'][] = $row->form_4;
			$series7['data'][] = $row->gender;
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
    
//function to get data from education_csa_studentenrolmentinyouthpolytechnics

    public function education_csa_studentenrolmentinyouthpolytechnics(){
   	 $data = DB::table('education_csa_studentenrolmentinyouthpolytechnics')
   	           ->join('health_counties', 'education_csa_studentenrolmentinyouthpolytechnics.county_id', '=', 'health_counties.county_id')

   	           ->join('health_subcounty', 'education_csa_studentenrolmentinyouthpolytechnics.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();

    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'institution name';

			$series4 = array();
			$series4['name'] = 'category';

			$series5 = array();
			$series5['name'] = 'male';

			$series6 = array();
			$series6['name'] = 'female';

	
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->institution_name;
			$series4['data'][] = $row->category;
			$series5['data'][] = $row->male;
			$series6['data'][] = $row->female;
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
    
//function to get data from education_csa_teachertrainingcolleges

    public function education_csa_teachertrainingcolleges(){
   	 $data = DB::table('education_csa_teachertrainingcolleges')
   	           ->join('health_counties', 'education_csa_teachertrainingcolleges.county_id', '=', 'education_csa_teachertrainingcolleges.county_id')->get();


    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'category';

			$series3 = array();
			$series3['name'] = 'pre primary';

			$series4 = array();
			$series4['name'] = 'primary sc';

			$series5 = array();
			$series5['name'] = 'secondary';

	
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->category;
			$series3['data'][] = $row->pre_primary;
			$series4['data'][] = $row->primary_sc;
			$series5['data'][] = $row->secondary;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
				
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_csa_youthpolytechnicsbycategoryandsubcounty

    public function education_csa_youthpolytechnicsbycategoryandsubcounty(){
   	 $data = DB::table('education_csa_youthpolytechnicsbycategoryandsubcounty')
   	            ->join('health_counties', 'education_csa_youthpolytechnicsbycategoryandsubcounty.county_id', '=', 'health_counties.county_id')
   	            ->join('health_subcounty', 'education_csa_youthpolytechnicsbycategoryandsubcounty.sub_county_id', '=', 'health_subcounty.subcounty_id')->get();


    	    $year = array();
			$year['name'] = 'year';
				  
			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'subcounty name';

			$series3 = array();
			$series3['name'] = 'public';

			$series4 = array();
			$series4['name'] = 'private';

	
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->subcounty_name;
			$series3['data'][] = $row->public;
			$series4['data'][] = $row->private;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
				
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
//function to get data from education_distribution_abovefifteen_ability_readwrite

    public function education_distribution_abovefifteen_ability_readwrite(){
    $data = DB::table('education_distribution_abovefifteen_ability_readwrite')
              ->join('health_counties', 'education_distribution_abovefifteen_ability_readwrite.county_id', '=', 'education_distribution_abovefifteen_ability_readwrite.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'literate';

			$series2 = array();
			$series2['name'] = 'illiterate';

			$series3 = array();
			$series3['name'] = 'not stated';

			$series4 = array();
			$series4['name'] = 'no of individuals';

			$series5 = array();
			$series5['name'] = 'gender';

	
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->literate;
			$series2['data'][] = $row->illiterate;
			$series3['data'][] = $row->not_stated;
			$series4['data'][] = $row->no_of_individuals;
			$series5['data'][] = $row->gender;
			}
	
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
				
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
//function to get data from education_distribution_abovethreeyears_highestlevel_reached

    public function education_distribution_abovethreeyears_highestlevel_reached(){
    $data = DB::table('education_distribution_abovethreeyears_highestlevel_reached')
              ->join('health_counties', 'education_distribution_abovethreeyears_highestlevel_reached.county_id', '=', 'education_distribution_abovethreeyears_highestlevel_reached.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'pre primary';

			$series2 = array();
			$series2['name'] = 'primary';

			$series3 = array();
			$series3['name'] = 'post primary';

			$series4 = array();
			$series4['name'] = 'secondary';

			$series5 = array();
			$series5['name'] = 'college';

			$series6 = array();
			$series6['name'] = 'university';

			$series7 = array();
			$series7['name'] = 'madrassa duksi';

			$series8 = array();
			$series8['name'] = 'other';

			$series9 = array();
			$series9['name'] = 'not stated';

			$series10 = array();
			$series10['name'] = 'no of individuals';

	
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->pre_primary;
			$series2['data'][] = $row->primary;
			$series3['data'][] = $row->post_primary;
			$series4['data'][] = $row->secondary;
			$series5['data'][] = $row->college;
			$series6['data'][] = $row->university;
			$series7['data'][] = $row->madrassa_duksi;
			$series8['data'][] = $row->other;
			$series9['data'][] = $row->not_stated;
			$series10['data'][] = $row->no_of_individuals;
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
				
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_distribution_abovethreeyears_training

    public function education_distribution_abovethreeyears_training(){
    $data = DB::table('education_distribution_abovethreeyears_training')
              ->join('health_counties', 'education_distribution_abovethreeyears_training.county_id', '=', 'education_distribution_abovethreeyears_training.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'ever attended';

			$series2 = array();
			$series2['name'] = 'never attended';

			$series3 = array();
			$series3['name'] = 'not stated';

			$series4 = array();
			$series4['name'] = 'no of individuals';

			
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->ever_attended;
			$series2['data'][] = $row->never_attended;
			$series3['data'][] = $row->not_stated;
			$series4['data'][] = $row->no_of_individuals;
			}
	
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
				
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_distribution_highest_education_qualification

    public function education_distribution_highest_education_qualification(){
    $data = DB::table('education_distribution_highest_education_qualification')
              ->join('health_counties', 'education_distribution_highest_education_qualification.county_id', '=', 'education_distribution_highest_education_qualification.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'none';

			$series2 = array();
			$series2['name'] = 'cpe kcpe';

			$series3 = array();
			$series3['name'] = 'kape';

			$series4 = array();
			$series4['name'] = 'kjse';

			$series5 = array();
			$series5['name'] = 'kce kcse';

			$series6 = array();
			$series6['name'] = 'kace eaace';

			$series7 = array();
			$series7['name'] = 'certificate';

			$series8 = array();
			$series8['name'] = 'diploma';

			$series9 = array();
			$series9['name'] = 'degree';

			$series10 = array();
			$series10['name'] = 'post literacy cert';

			$series11 = array();
			$series11['name'] = 'other';

			$series12 = array();
			$series12['name'] = 'not stated';

			$series13 = array();
			$series13['name'] = 'no of individuals';

			
			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->none;
			$series2['data'][] = $row->cpe_kcpe;
			$series3['data'][] = $row->kape;
			$series4['data'][] = $row->kjse;
			$series5['data'][] = $row->kce_kcse;
			$series6['data'][] = $row->kace_eaace;
			$series7['data'][] = $row->certificate;
			$series8['data'][] = $row->diploma;
			$series9['data'][] = $row->degree;
			$series10['data'][] = $row->post_literacy_cert;
			$series11['data'][] = $row->other;
			$series12['data'][] = $row->not_stated;
			$series13['data'][] = $row->no_of_individuals;
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

			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
//function to get data from education_distribution_sixthirteen_by_schooltype

    public function education_distribution_sixthirteen_by_schooltype(){
    $data = DB::table('education_distribution_sixthirteen_by_schooltype')
              ->join('health_counties', 'education_distribution_sixthirteen_by_schooltype.county_id', '=', 'education_distribution_sixthirteen_by_schooltype.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'day';

			$series2 = array();
			$series2['name'] = 'boarding';

			$series3 = array();
			$series3['name'] = 'not stated';

			$series4 = array();
			$series4['name'] = 'type';


			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->day;
			$series2['data'][] = $row->boarding;
			$series3['data'][] = $row->not_stated;
			$series4['data'][] = $row->type;
			}
	
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_distribution_three_twentyfour_schoolattendance

    public function education_distribution_three_twentyfour_schoolattendance(){
    $data = DB::table('education_distribution_three_twentyfour_schoolattendance')
              ->join('health_counties', 'education_distribution_three_twentyfour_schoolattendance.county_id', '=', 'education_distribution_three_twentyfour_schoolattendance.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'currently attending';

			$series2 = array();
			$series2['name'] = 'not attending';

			$series3 = array();
			$series3['name'] = 'no of individuals';

			$series4 = array();
			$series4['name'] = 'age group';


			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->currently_attending;
			$series2['data'][] = $row->not_attending;
			$series3['data'][] = $row->no_of_individuals;
			$series4['data'][] = $row->age_group;
			}
	
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_edstat_ecde_enrollment_and_enrollment_rates_by_county

    public function education_edstat_ecde_enrollment_and_enrollment_rates_by_county(){
    $data = DB::table('education_edstat_ecde_enrollment_and_enrollment_rates_by_county')
              ->join('health_counties', 'education_edstat_ecde_enrollment_and_enrollment_rates_by_county.county_id', '=', 'education_edstat_ecde_enrollment_and_enrollment_rates_by_county.county_id')->get(); 	
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'ecde enrollment';

			$series3 = array();
			$series3['name'] = 'gross enrollment rate';

			$series4 = array();
			$series4['name'] = 'net enrollment rate';

			$series5 = array();
			$series5['name'] = 'gender';


			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->ecde_enrollment;
			$series3['data'][] = $row->gross_enrollment_rate;
			$series4['data'][] = $row->net_enrollment_rate;
			$series5['data'][] = $row->gender;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    


//function to get data from education_edstat_kcpe_examination_candidature

   public function education_edstat_kcpe_examination_candidature(){
    $data = DB::table('education_edstat_kcpe_examination_candidature')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'kcpe candidature';
			
			$series2 = array();
			$series2['name'] = 'gender';

			
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->kcpe_candidature;
			$series2['data'][] = $row->gender;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_edstat_kcpe_examination_results_by_subject

   public function education_edstat_kcpe_examination_results_by_subject(){
    $data = DB::table('education_edstat_kcpe_examination_results_by_subject')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'kcpe result';

			$series2 = array();
			$series2['name'] = 'subject';


			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->kcpe_result;
			$series2['data'][] = $row->subject;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
//function to get data from education_edstat_kcse_examination_results

   public function education_edstat_kcse_examination_results(){
    $data = DB::table('education_edstat_kcse_examination_results')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'number of candidates';

			$series2 = array();
			$series2['name'] = 'kcse grade';

			$series3 = array();
			$series3['name'] = 'sex';
            
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->number_of_candidates;
			$series2['data'][] = $row->kcse_grade;
			$series3['data'][] = $row->sex;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);

			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_edstat_primary_enrollment_enrollment_rates_county

    public function education_edstat_primary_enrollment_enrollment_rates_county(){
    $data = DB::table('education_edstat_primary_enrollment_enrollment_rates_county')
              ->join('health_counties', 'education_edstat_primary_enrollment_enrollment_rates_county.county_id', '=', 'education_edstat_primary_enrollment_enrollment_rates_county.county_id')->get(); 	
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'primary enrollment';

			$series3 = array();
			$series3['name'] = 'gross enrollment rate';

			$series4 = array();
			$series4['name'] = 'net enrollment rate';

			$series5 = array();
			$series5['name'] = 'gender';


			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->primary_enrollment;
			$series3['data'][] = $row->gross_enrollment_rate;
			$series4['data'][] = $row->net_enrollment_rate;
			$series5['data'][] = $row->gender;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_edstat_secondary_enrollment_enrollment_rates_county

    public function education_edstat_secondary_enrollment_enrollment_rates_county(){
    $data = DB::table('education_edstat_secondary_enrollment_enrollment_rates_county')
              ->join('health_counties', 'education_edstat_secondary_enrollment_enrollment_rates_county.county_id', '=', 'education_edstat_secondary_enrollment_enrollment_rates_county.county_id')->get(); 	
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'county name';
			
			$series2 = array();
			$series2['name'] = 'secondary enrollment';

			$series3 = array();
			$series3['name'] = 'gross enrollment rate';

			$series4 = array();
			$series4['name'] = 'net enrollment rate';

			$series5 = array();
			$series5['name'] = 'gender';


			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->county_name;
			$series2['data'][] = $row->secondary_enrollment;
			$series3['data'][] = $row->gross_enrollment_rate;
			$series4['data'][] = $row->net_enrollment_rate;
			$series5['data'][] = $row->gender;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_gross_attendance_ratio_by_level

    public function education_gross_attendance_ratio_by_level(){
    $data = DB::table('education_gross_attendance_ratio_by_level')
              ->join('health_counties', 'education_gross_attendance_ratio_by_level.county_id', '=', 'education_gross_attendance_ratio_by_level.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'pre primary';

			$series2 = array();
			$series2['name'] = 'primary';

			$series3 = array();
			$series3['name'] = 'secondary';

			$series4 = array();
			$series4['name'] = 'gender';


			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->pre_primary;
			$series2['data'][] = $row->primary;
			$series3['data'][] = $row->secondary;
			$series4['data'][] = $row->gender;
			}
	
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    

//function to get data from education_net_attendance_ratio_by_level

    public function education_net_attendance_ratio_by_level(){
    $data = DB::table('education_net_attendance_ratio_by_level')
              ->join('health_counties', 'education_net_attendance_ratio_by_level.county_id', '=', 'education_net_attendance_ratio_by_level.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'pre primary';

			$series2 = array();
			$series2['name'] = 'primary';

			$series3 = array();
			$series3['name'] = 'secondary';

			$series4 = array();
			$series4['name'] = 'gender';


			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->pre_primary;
			$series2['data'][] = $row->primary;
			$series3['data'][] = $row->secondary;
			$series4['data'][] = $row->gender;
			}
	
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
//function to get data from education_number_of_candidates_by_sex_in_kcse

   public function education_number_of_candidates_by_sex_in_kcse(){
    $data = DB::table('education_number_of_candidates_by_sex_in_kcse')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'number';

			$series2 = array();
			$series2['name'] = 'proportion';

			$series3 = array();
			$series3['name'] = 'gender';
            
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
    //function to get data from education_population_distribution_above_three_school_attendance

    public function education_population_distribution_above_three_school_attendance(){
    $data = DB::table('education_population_distribution_above_three_school_attendance')
              ->join('health_counties', 'education_population_distribution_above_three_school_attendance.county_id', '=', 'education_population_distribution_above_three_school_attendance.county_id')->get(); 	
   

			$county = array();
			$county['name'] = 'county name';
			
			$series1 = array();
			$series1['name'] = 'currently attending';

			$series2 = array();
			$series2['name'] = 'not attending';

			$series3 = array();
			$series3['name'] = 'no of individuals';


			foreach ($data as $row)
			{
			$county['data'][] = $row->county_name;
			$series1['data'][] = $row->currently_attending;
			$series2['data'][] = $row->not_attending;
			$series3['data'][] = $row->no_of_individuals;
			}
	
			$result = array();
			array_push($result,$county);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
			print json_encode($result, JSON_NUMERIC_CHECK);
    }
    
//function to get data from education_primary_school_enrolments_by_sex

   public function education_primary_school_enrolments_by_sex(){
    $data = DB::table('education_primary_school_enrolments_by_sex')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'boys';

			$series2 = array();
			$series2['name'] = 'girls';

			$series3 = array();
			$series3['name'] = 'total';

			$series4 = array();
			$series4['name'] = 'percentage girls';

			$series5 = array();
			$series5['name'] = 'parity index';
            
			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->boys;
			$series2['data'][] = $row->girls;
			$series3['data'][] = $row->total;
			$series4['data'][] = $row->percentage_girls;
			$series5['data'][] = $row->parity_index;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);

			print json_encode($result, JSON_NUMERIC_CHECK);
    }

    //function to get data from education_public_primaryteachers_trainingcollege_enrolment

   public function education_public_primaryteachers_trainingcollege_enrolment(){
    $data = DB::table('education_public_primaryteachers_trainingcollege_enrolment')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'number';

			$series2 = array();
			$series2['name'] = 'proportion';

			$series3 = array();
			$series3['name'] = 'gender';

			
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

     //function to get data from education_public_primary_school_teachers_by_sex

   public function education_public_primary_school_teachers_by_sex(){
    $data = DB::table('education_public_primary_school_teachers_by_sex')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'number';

			$series2 = array();
			$series2['name'] = 'proportion';

			$series3 = array();
			$series3['name'] = 'gender';

			
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
    //function to get data from education_public_secondary_school_teachers_by_sex

   public function education_public_secondary_school_teachers_by_sex(){
    $data = DB::table('education_public_secondary_school_teachers_by_sex')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'number';

			$series2 = array();
			$series2['name'] = 'proportion';

			$series3 = array();
			$series3['name'] = 'gender';

			
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
    //function to get data from education_secondary_school_enrolment_by_sex

   public function education_secondary_school_enrolment_by_sex(){
    $data = DB::table('education_secondary_school_enrolment_by_sex')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'boys';

			$series2 = array();
			$series2['name'] = 'girls';

			$series3 = array();
			$series3['name'] = 'total';

			$series4 = array();
			$series4['name'] = 'percentage girls';

			$series5 = array();
			$series5['name'] = 'parity index';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->boys;
			$series2['data'][] = $row->girls;
			$series3['data'][] = $row->total;
			$series4['data'][] = $row->percentage_girls;
			$series5['data'][] = $row->parity_index;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);

			print json_encode($result, JSON_NUMERIC_CHECK);
    }

//function to get data from education_studentenrollmentbysextechnicalinstitutions

   public function education_studentenrollmentbysextechnicalinstitutions(){
    $data = DB::table('education_studentenrollmentbysextechnicalinstitutions')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'institution';

			$series2 = array();
			$series2['name'] = 'male';

			$series3 = array();
			$series3['name'] = 'female';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->institution;
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
//function to get data from education_studentenrollmentpublicuniversities

   public function education_studentenrollmentpublicuniversities(){
    $data = DB::table('education_studentenrollmentpublicuniversities')->get();
   

    	    $year = array();
			$year['name'] = 'year';

			$series1 = array();
			$series1['name'] = 'undergraduates';

			$series2 = array();
			$series2['name'] = 'postgraduates';

			$series3 = array();
			$series3['name'] = 'other';

			foreach ($data as $row)
			{
			$year['data'][] = $row->year;
			$series1['data'][] = $row->undergraduates;
			$series2['data'][] = $row->postgraduates;
			$series3['data'][] = $row->other;
			}
	
			$result = array();
			array_push($result,$year);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);

			print json_encode($result, JSON_NUMERIC_CHECK);
    }


}


