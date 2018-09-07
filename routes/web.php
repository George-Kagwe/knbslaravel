<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('layouts.admin');
});
//load home pages for each sector
Route::get('Finance/home', 'Forms\AllFormsController@finance')->name('Finance/home');
Route::get('Education/home', 'Forms\AllFormsController@education')->name('Education/home');
Route::get('Health/home', 'Forms\AllFormsController@health')->name('Health/home');
Route::get('Population/home', 'Forms\AllFormsController@population')->name('Population/home');
Route::get('Agriculture/home', 'Forms\AllFormsController@agriculture')->name('Agriculture/home');
Route::get('Governance/home', 'Forms\AllFormsController@governance')->name('Governance/home');
Route::get('ICT/home', 'Forms\AllFormsController@ict')->name('ICT/home');
Route::get('Environment/home', 'Forms\AllFormsController@environment')->name('Environment/home');
Route::get('Energy/home', 'Forms\AllFormsController@energy')->name('Energy/home');
Route::get('Labour/home', 'Forms\AllFormsController@labour')->name('Labour/home');
Route::get('Trade/home', 'Forms\AllFormsController@trade')->name('Trade/home');
Route::get('Tourism/home', 'Forms\AllFormsController@tourism')->name('Tourism/home');
Route::get('CPI/home', 'Forms\AllFormsController@cpi')->name('CPI/home');
Route::get('Administrative/home', 'Forms\AllFormsController@administrative')->name('Administrative/home');
Route::get('Building/home', 'Forms\AllFormsController@building')->name('Building/home');
Route::get('Money/home', 'Forms\AllFormsController@money')->name('Money/home');
Route::get('Transport/home', 'Forms\AllFormsController@transport')->name('Transport/home');
Route::get('Manufacturing/home', 'Forms\AllFormsController@manufacturing')->name('Manufacturing/home');

//Begining of crud functions
//Route::get('Agriculture/sugar_yield/{id}', array('as' => 'search_id', 'uses' =>'Forms\Agriculture@show'));
Route::get('Agriculture/', 'Forms\Agriculture@index')->name('Agriculture');
Route::resource('agriculture','Forms\Agriculture');
Route::get('agriculture/sugar_yield/{id}', array('as' => 'fetchSugar', 'uses' => 'Forms\Agriculture@show'));


Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture@store'));
Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture@update'));


//End of crud functions

//@George Kagwe
//route to fetch get_agriculture_area_under_sugarcane_harvested_production_avg_yield
Route::get('agriculture/all_sugarcane_harvested', 'Endpoints\Agriculture@get_agriculture_area_under_sugarcane_harvested_production_avg_yield')->name('Agriculture');
Route::get('Poverty/home', 'Forms\AllFormsController@poverty')->name('Poverty/home');



Route::get('Poverty/home', 'Forms\AllFormsController@poverty')->name('Poverty/home');


Route::get('Poverty/home', 'Forms\AllFormsController@poverty')->name('Poverty/home');

//Begining of crud functions


Route::get('agriculture_area_under_sugarcane_harvested_production_avg_yield/', 'Forms\Agriculture\Agriculture_Sugar@index')->name('agriculture_area_under_sugarcane_harvested_production_avg_yield');
Route::get('agriculture/sugar_yield/{id}', array('as' => 'fetchSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@show'));

Route::get('agriculture_area_under_sugarcane_harvested_production_avg_yield/', 'Forms\Agriculture\Agriculture_Sugar@index')->name('agriculture_area_under_sugarcane_harvested_production_avg_yield');
Route::get('agriculture/sugar_yield/{id}', array('as' => 'fetchSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@show'));
// Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture@store'));
// Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture@update'));
Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@store'));
Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@update'));
//End of loading various sectors
// Begin loading various forms here as per the menu of the admin page
    //1. finance classification of revenue
    
    Route::get('finance_economic_classification_revenue/', 'Forms\Finance\ClassifficationOfRevenue@index')->name('ClassifficationOfRevenue');

   Route::get('finance_cdf_allocation_by_constituency/', 'Forms\Finance\CDFAllocation@index')->name('finance_cdf_allocation_by_constituency');
   Route::get('cdf/fetch/{id}', array('as' => 'fetchCDF', 'uses' => 'Forms\Finance\CDFAllocation@show'));

      


Route::get('agriculture_area_under_sugarcane_harvested_production_avg_yield/', 'Forms\Agriculture\Agriculture_Sugar@index')->name('agriculture_area_under_sugarcane_harvested_production_avg_yield');
Route::get('agriculture/sugar_yield/{id}', array('as' => 'fetchSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@show'));




// Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture@store'));
// Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture@update'));



Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@store'));
Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@update'));

//@Charles

//feetch
Route::get('education_approved_degree_diploma_programs/', 'Forms\Education\AprrovedDegreeDiplomaPrograms@index')->name('education_approved_degree_diploma_programs');
//post to save
Route::post('diploma/store', array('as' => 'storeDiploma', 'uses' => 'Forms\Education\AprrovedDegreeDiplomaPrograms@store'));
//post to update
Route::post('diploma/update', array('as' => 'updateDiploma', 'uses' => 'Forms\Education\AprrovedDegreeDiplomaPrograms@update'));


//show a specific id
Route::get('diploma/approved/{id}', array('as' => 'fetchDiploma', 'uses' => 'Forms\Education\AprrovedDegreeDiplomaPrograms@show'));


// Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture@store'));
// Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture@update'));

Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@store'));
Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@update'));



//End of loading various sectors

// Begin loading various forms here as per the menu of the admin page

    //1. finance classification of revenue
    
    Route::get('ClassifficationOfRevenue/', 'Forms\Finance\ClassifficationOfRevenue@index')->name('ClassifficationOfRevenue');

      



//@George Kagwe
//route to fetch get_agriculture_area_under_sugarcane_harvested_production_avg_yield
Route::get('agriculture/all_sugarcane_harvested', 'Endpoints\Agriculture@get_agriculture_area_under_sugarcane_harvested_production_avg_yield')->name('Agriculture');
//route to fetch get_categories_of_land
Route::get('agriculture/all_categories_of_land', 'Endpoints\Agriculture@get_categories_of_land')->name('Agriculture');
// route to fetch get_agriculture_chemical_med_feed_input
Route::get('agriculture/all_chemical_feeds', 'Endpoints\Agriculture@get_agriculture_chemical_med_feed_input')->name('Agriculture');
//route to fetch get_cooperatives
Route::get('agriculture/all_cooperatives', 'Endpoints\Agriculture@get_cooperatives')->name('Agriculture');
//route to fetch agriculture_gross_market_production
Route::get('agriculture/all_market_production', 'Endpoints\Agriculture@agriculture_gross_market_production')->name('Agriculture');
//route to fetch get_irrigation_schemes
Route::get('agriculture/all_irrigation_schemes', 'Endpoints\Agriculture@get_irrigation_schemes')->name('Agriculture');
// route to fetch get_agriculture_land_potential
Route::get('agriculture/all_land_potential', 'Endpoints\Agriculture@get_agriculture_land_potential')->name('Agriculture');
//route to fetch agriculture_pricetoproducersformeatmilk
Route::get('agriculture/all_price_meat_milk', 'Endpoints\Agriculture@agriculture_pricetoproducersformeatmilk')->name('Agriculture');
//route to fetch agriculture_production_area_average_yield_coffee_type_of_grower
Route::get('agriculture/all_coffee_production', 'Endpoints\Agriculture@agriculture_production_area_average_yield_coffee_type_of_grower')->name('Agriculture');
//route to fetch agriculture_production_area_average_yield_tea_type_grower
Route::get('agriculture/all_tea_production', 'Endpoints\Agriculture@agriculture_production_area_average_yield_tea_type_grower')->name('Agriculture');
//route to fetch agriculture_production_of_livestock_and_dairy_products
Route::get('Agriculture/agriculture_production_of_livestock_and_dairy_products', 'Endpoints\Agriculture@agriculture_production_of_livestock_and_dairy_products')->name('Agriculture');
//route to fetch agriculture_production_of_livestock_and_dairy_products
Route::get('agriculture/all_share_capital', 'Endpoints\Agriculture@agriculture_totalsharecapital')->name('Agriculture');
//route to fetch agriculture_valueofagriculturalinput
Route::get('agriculture/all_agricultural_input', 'Endpoints\Agriculture@agriculture_valueofagriculturalinput')->name('Agriculture');

// Health Sectors shows all the tables and all the apis @George Kagwe
Route::get('health/all_sectors', 
     'Endpoints\Health_Sectors@index')->
      name('Health_Sectors');
// environment `environment_and_natural_resources_average_export_prices_ash` @david
Route::get('environment/all_environment_and_natural_resources_average_export_prices_ash', 
     'Endpoints\Environment@get_environment_and_natural_resources_average_export_prices_ash')->
      name('environment_and_natural_resources_average_export_prices_ash');
//environment environment_and_natural_resources_development_expenditure_water @david
Route::get('environment/all_environment_and_natural_resources_development_expenditure_water', 
     'Endpoints\Environment@get_environment_and_natural_resources_development_expenditure_water')->
       name('environment_and_natural_resources_development_expenditure_water');
//environment environment_and_natural_resources_expenditure_cleaning_refuse @david
Route::get('Environment/environment_and_natural_resources_expenditure_cleaning_refuse', 
  'Endpoints\Environment@get_environment_and_natural_resources_expenditure_cleaning_refuse')->
     name('environment_and_natural_resources_expenditure_cleaning_refuse');
 //environment environment_and_natural_resources_government_forest @david
Route::get('environment/all_environment_and_natural_resources_government_forest', 
  'Endpoints\Environment@get_environment_and_natural_resources_government_forest')->
    name('environment_and_natural_resources_government_forest');
 //environment  environment_and_natural_resources_num_high_risk_environ_impact @david
Route::get('Environment/environment_and_natural_resources_num_high_risk_environ_impact', 
   'Endpoints\Environment@get_environment_and_natural_resources_num_high_risk_environ_impact')->
     name('environment_and_natural_resources_num_high_risk_environ_impact');
//environment  environment_and_natural_resources_population_wildlife @david
Route::get('environment/all_environment_and_natural_resources_population_wildlife', 
  'Endpoints\Environment@get_environment_and_natural_resources_population_wildlife')->
    name('environment_and_natural_resources_population_wildlife');
//environment  environment_and_natural_resources_quantity_of_total_mineral @david
Route::get('environment/all_environment_and_natural_resources_quantity_of_total_mineral', 
  'Endpoints\Environment@get_environment_and_natural_resources_quantity_of_total_mineral')->
    name('environment_and_natural_resources_quantity_of_total_mineral');
//environment  environment_and_natural_resources_quantity_value_fish_landed @david
Route::get('environment/all_environment_and_natural_resources_quantity_value_fish_landed', 
     'Endpoints\Environment@get_environment_and_natural_resources_quantity_value_fish_landed')->
    name('environment_and_natural_resources_quantity_value_fish_landed');
//environment  environment_and_natural_resources_record_sale_goverment_products @david
Route::get('environment/all_environment_and_natural_resources_record_sale_goverment_products', 
  'Endpoints\Environment@get_environment_and_natural_resources_record_sale_goverment_products')->
    name('environment_and_natural_resources_record_sale_goverment_products');
//environment  environment_and_natural_resources_trends_envi_natural_resources @david
Route::get('environment/all_environment_and_natural_resources_trends_envi_natural_resources', 
  'Endpoints\Environment@get_environment_and_natural_resources_trends_envi_natural_resources')->
    name('environment_and_natural_resources_trends_envi_natural_resources');
  //environment   environment_and_natural_resources_value_of_total_mineral @david
Route::get('environment/all_environment_and_natural_resources_value_of_total_mineral', 
  'Endpoints\Environment@get_environment_and_natural_resources_value_of_total_mineral')->
    name('environment_and_natural_resources_value_of_total_mineral');
//environment   environment_and_natural_resources_water_purification_points @david
Route::get('environment/all_environment_and_natural_resources_water_purification_points', 
  'Endpoints\Environment@get_environment_and_natural_resources_water_purification_points')->
    name( 'environment_and_natural_resources_water_purification_points');

//@George Muchiri
//land_and_climate_rainfall

Route::get('environment/all_land_and_climate_rainfall', 
  'Endpoints\Environment@get_land_and_climate_rainfall')->
    name( 'environment_and_natural_resources_water_purification_points');

//@George Muchiri
//land_and_climate_surface_area_by_category

Route::get('environment/all_land_and_climate_surface_area_by_category', 
  'Endpoints\Environment@get_land_and_climate_surface_area_by_category')->
    name( ' land_and_climate_surface_area_by_category');

//@George Muchiri
//land_and_climate_temperature

Route::get('environment/all_land_and_climate_temperature', 
  'Endpoints\Environment@get_land_and_climate_temperature')->
    name( ' land_and_climate_temperature');

 //@George Muchiri
//land_and_climate_temperature

Route::get('environment/all_land_and_climate_topography_altitude',
  'Endpoints\Environment@get_land_and_climate_topography_altitude')->
    name( 'land_and_climate_topography_altitude');

   
//@George Muchiri
//land_and_climate_rainfall
Route::get('environment/all_land_and_climate_rainfall', 
  'Endpoints\Environment@get_land_and_climate_rainfall')->
    name( 'environment_and_natural_resources_water_purification_points');
//@George Muchiri
//land_and_climate_surface_area_by_category
Route::get('environment/all_land_and_climate_surface_area_by_category', 
  'Endpoints\Environment@get_land_and_climate_surface_area_by_category')->
    name( ' land_and_climate_surface_area_by_category');
//@George Muchiri
//land_and_climate_temperature
Route::get('environment/all_land_and_climate_temperature', 
  'Endpoints\Environment@get_land_and_climate_temperature')->
    name( ' land_and_climate_temperature');
 //@George Muchiri
//land_and_climate_temperature
Route::get('environment/all_land_and_climate_topography_altitude',
  'Endpoints\Environment@get_land_and_climate_topography_altitude')->
    name( 'land_and_climate_topography_altitude');

//Manufacturing  manufacturing_per_change_in_quantum_indices_of_man_production @david
Route::get('manufacturing/all_per_change_in_quantum_indices_of_man_production', 
  'Endpoints\Manufacturing@get_manufacturing_per_change_in_quantum_indices_of_man_production')->
    name('manufacturing_per_change_in_quantum_indices_of_man_production');
//Manufacturing  manufacturing_quantum_indices_of_manufacturing_production @david
Route::get('manufacturing/all_quantum_indices_of_manufacturing_production', 
  'Endpoints\Manufacturing@get_manufacturing_quantum_indices_of_manufacturing_production')->
    name('manufacturing_quantum_indices_of_manufacturing_production');
 //Energy energy_averagemonthlypumppricesforfuelbycategory @david
    Route::get('energy/all_pump_prices_fuel', 
  'Endpoints\Energy@get_energy_averagemonthlypumppricesforfuelbycategory')->
    name('energy_averagemonthlypumppricesforfuelbycategory');
//Energy energy_average_retail_prices_of_selected_petroleum_products @david
  Route::get('energy/all_average_retail_prices_of_selected_petroleum_products', 
  'Endpoints\Energy@get_energy_average_retail_prices_of_selected_petroleum_products')->
    name('energy_energy_average_retail_prices_of_selected_petroleum_products');
//Energy energy_electricity_demand_and_supply @david
  Route::get('energy/all_electricity_demand_and_supply', 
  'Endpoints\Energy@get_energy_electricity_demand_and_supply')->
    name('energy_electricity_demand_and_supply');
 //Energy energy_generation_and_imports_of_electricity @david
  Route::get('Energy/all_generation_and_imports_of_electricity', 
  'Endpoints\Energy@get_energy_generation_and_imports_of_electricity')->
    name('energy_generation_and_imports_of_electricity');
    //Energy energy_installed_and_effective_capacity_of_electricity  @david
  Route::get('energy/all_installed_and_effective_capacity_of_electricity', 
  'Endpoints\Energy@get_energy_installed_and_effective_capacity_of_electricity')->
    name('energy_installed_and_effective_capacity_of_electricity');
    //Energy energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category  @david
  Route::get('energy/all_net_domestic_sale_of_petroleum_fuels_by_consumer_category', 
  'Endpoints\Energy@get_energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category')->
    name('energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category');
  //Energy energy_petroleum_supply_and_demand  @david
  Route::get('energy/all_petroleum_supply_and_demand', 
  'Endpoints\Energy@get_energy_petroleum_supply_and_demand')->
    name('energy_petroleum_supply_and_demand');
 //Energy energy_value_and_quantity_of_imports_exportsand  @david
  Route::get('energy/all_value_and_quantity_of_imports_exports', 
  'Endpoints\Energy@get_energy_value_and_quantity_of_imports_exports')->
    name('energy_value_and_quantity_of_imports_exports');
  //Labour labour_average_wage_earnings_per_employee_private_sector  @david
  Route::get('labour/all_labour_average_wage_earnings_per_employee_private_sector', 
  'Endpoints\Labour@get_labour_average_wage_earnings_per_employee_private_sector')->
    name('labour_average_wage_earnings_per_employee_private_sector');
 //Labour  labour_average_wage_earnings_per_employee_public_sector  @david
  Route::get('labour/all_labour_average_wage_earnings_per_employee_public_sector', 
  'Endpoints\Labour@get_labour_average_wage_earnings_per_employee_public_sector')->
    name('labour_average_wage_earnings_per_employee_public_sector');
 //Labour  labour_employment_public_sector  @david
  Route::get('labour/all_labour_employment_public_sector', 
  'Endpoints\Labour@get_labour_employment_public_sector')->
    name('labour_employment_public_sector');
 //Labour  labour_memorandum_items_in_public_sector  @david
  Route::get('labour/all_labour_memorandum_items_in_public_sector', 
  'Endpoints\Labour@get_labour_memorandum_items_in_public_sector')->
    name('labour_memorandum_items_in_public_sector');
  //Labour  labour_sectors  @david
  Route::get('labour/all_labour_sectors', 
  'Endpoints\Labour@get_labour_sectors')->
    name('labour_sectors');
  // labour    labour_total_recorded_employment   @david
    Route::get('labour/all_labour_total_recorded_employment', 
  'Endpoints\Labour@get_labour_total_recorded_employment')->
    name('labour_total_recorded_employment');
 // labour    labour_wage_employment_by_industry_and_sex   @david
    Route::get('labour/all_labour_wage_employment_by_industry_and_sex', 
  'Endpoints\Labour@get_labour_wage_employment_by_industry_and_sex')->
    name('labour_wage_employment_by_industry_and_sex');
 // labour    labour_wage_employment_by_industry_in_private_sector   @david
    Route::get('labour/all_labour_wage_employment_by_industry_in_private_sector', 
  'Endpoints\Labour@get_labour_wage_employment_by_industry_in_private_sector')->
    name(' labour_wage_employment_by_industry_in_private_sector');
 // labour   labour_wage_employment_by_industry_in_public_sector   @david
    Route::get('labour/all_labour_wage_employment_by_industry_in_public_sector', 
  'Endpoints\Labour@get_labour_wage_employment_by_industry_in_public_sector')->
    name('labour_wage_employment_by_industry_in_public_sector');


//Education
//education_approved_degree_diploma_programs @fredrick muiruri
Route::get('education/all_diploma_degree', 'Endpoints\Education@education_approved_degree_diploma_programs')->name('education_approved_degree_diploma_programs');
//Education
//education_csa_adulteducationcentresbysubcounty @fredrick muiruri
Route::get('education/all_adult_edu_centres_subcounty', 'Endpoints\Education@education_csa_adulteducationcentresbysubcounty')->name('education_csa_adulteducationcentresbysubcounty');
//Education
//education_csa_adulteducationenrolmentbysexandsubcounty @fredrick muiruri
Route::get('education/all_adult_education_enrollment', 'Endpoints\Education@education_csa_adulteducationenrolmentbysexandsubcounty')->name('education_csa_adulteducationenrolmentbysexandsubcounty');
//Education
//education_csa_adulteducationproficiencytestresults @fredrick muiruri
Route::get('education/all_adult_education_proficiency', 'Endpoints\Education@education_csa_adulteducationproficiencytestresults')->name('education_csa_adulteducationproficiencytestresults');
//Education
//education_csa_ecdecentresbycategoryandsubcounty @fredrick muiruri
Route::get('education/all_ecde_centres_category_subcounty', 'Endpoints\Education@education_csa_ecdecentresbycategoryandsubcounty')->name('education_csa_ecdecentresbycategoryandsubcounty');
//Education
//education_csa_primaryenrolmentandaccessindicators @fredrick muiruri
Route::get('Education/education_csa_primaryenrolmentandaccessindicators', 'Endpoints\Education@education_csa_primaryenrolmentandaccessindicators')->name('education_csa_primaryenrolmentandaccessindicators');
//Education
//education_csa_primaryschoolenrollmentbyclasssexandsubcounty @fredrick muiruri
Route::get('education/all_primary_enrollment_sex_county', 'Endpoints\Education@education_csa_primaryschoolenrollmentbyclasssexandsubcounty')->name('education_csa_primaryschoolenrollmentbyclasssexandsubcounty');
//Education
//education_csa_primaryschoolsbycategoryandsubcounty @fredrick muiruri
Route::get('education/all_primary_category_subcounty', 'Endpoints\Education@education_csa_primaryschoolsbycategoryandsubcounty')->name('education_csa_primaryschoolsbycategoryandsubcounty');
//Education
//education_csa_secondaryenrolmentandaccessindicators @fredrick muiruri
Route::get('Education/education_csa_secondaryenrolmentandaccessindicators', 'Endpoints\Education@education_csa_secondaryenrolmentandaccessindicators')->name('education_csa_secondaryenrolmentandaccessindicators');
//Education
//education_csa_secondaryschoolenrollmentbyclasssexsubcounty @fredrick muiruri
Route::get('education/all_education_csa_secondaryschoolenrollmentbyclasssexsubcounty', 'Endpoints\Education@education_csa_secondaryschoolenrollmentbyclasssexsubcounty')->name('education_csa_secondaryschoolenrollmentbyclasssexsubcounty');
//Education
//education_csa_studentenrolmentinyouthpolytechnics @fredrick muiruri
Route::get('education/all_student_enrollment_polytechnics', 'Endpoints\Education@education_csa_studentenrolmentinyouthpolytechnics')->name('education_csa_studentenrolmentinyouthpolytechnics');
//Education
//education_csa_teachertrainingcolleges @fredrick muiruri
Route::get('education/all_teachertrainingcolleges', 'Endpoints\Education@education_csa_teachertrainingcolleges')->name('education_csa_teachertrainingcolleges');
//Education
//education_csa_youthpolytechnicsbycategoryandsubcounty @fredrick muiruri
Route::get('education/all_polytechnic_category_subcounty', 'Endpoints\Education@education_csa_youthpolytechnicsbycategoryandsubcounty')->name('education_csa_youthpolytechnicsbycategoryandsubcounty');
//Education
//education_distribution_abovefifteen_ability_readwrite @fredrick muiruri
Route::get('Education/education_distribution_abovefifteen_ability_readwrite', 'Endpoints\Education@education_distribution_abovefifteen_ability_readwrite')->name('education_distribution_abovefifteen_ability_readwrite');
//Education
//education_distribution_abovethreeyears_highestlevel_reached @fredrick muiruri
Route::get('Education/education_distribution_abovethreeyears_highestlevel_reached', 'Endpoints\Education@education_distribution_abovethreeyears_highestlevel_reached')->name('education_distribution_abovethreeyears_highestlevel_reached');
//Education
//education_distribution_abovethreeyears_training @fredrick muiruri
Route::get('Education/education_distribution_abovethreeyears_training', 'Endpoints\Education@education_distribution_abovethreeyears_training')->name('education_distribution_abovethreeyears_training');
//Education
//education_distribution_highest_education_qualification @fredrick muiruri
Route::get('Education/education_distribution_highest_education_qualification', 'Endpoints\Education@education_distribution_highest_education_qualification')->name('education_distribution_highest_education_qualification');
//Education
//education_distribution_sixthirteen_by_schooltype @fredrick muiruri
Route::get('Education/education_distribution_sixthirteen_by_schooltype', 'Endpoints\Education@education_distribution_sixthirteen_by_schooltype')->name('education_distribution_sixthirteen_by_schooltype');
//Education
//education_distribution_three_twentyfour_schoolattendance @fredrick muiruri
Route::get('Education/education_distribution_three_twentyfour_schoolattendance', 'Endpoints\Education@education_distribution_three_twentyfour_schoolattendance')->name('education_distribution_three_twentyfour_schoolattendance');
//Education
//education_edstat_ecde_enrollment_and_enrollment_rates_by_county @fredrick muiruri
Route::get('education/all_education_edstat_ecde_enrollment_and_enrollment_rates_by_county', 'Endpoints\Education@education_edstat_ecde_enrollment_and_enrollment_rates_by_county')->name('education_edstat_ecde_enrollment_and_enrollment_rates_by_county');
//Education
//education_edstat_kcpe_examination_candidature @fredrick muiruri
Route::get('education/all_edstat_kcpe_examination_candidature', 'Endpoints\Education@education_edstat_kcpe_examination_candidature')->name('education_edstat_kcpe_examination_candidature');
//Education
//education_edstat_kcpe_examination_results_by_subject @fredrick muiruri
Route::get('education/all_edstat_kcpe_examination_results_by_subject', 'Endpoints\Education@education_edstat_kcpe_examination_results_by_subject')->name('education_edstat_kcpe_examination_results_by_subject');
//Education
//education_edstat_kcse_examination_results @fredrick muiruri
Route::get('education/all_edstat_kcse_examination_results', 'Endpoints\Education@education_edstat_kcse_examination_results')->name('education_edstat_kcse_examination_results');
//Education
//education_edstat_primary_enrollment_enrollment_rates_county @fredrick muiruri
Route::get('education/all_education_edstat_primary_enrollment_enrollment_rates_county', 'Endpoints\Education@education_edstat_primary_enrollment_enrollment_rates_county')->name('education_edstat_primary_enrollment_enrollment_rates_county');
//Education
//education_edstat_secondary_enrollment_enrollment_rates_county @fredrick muiruri
Route::get('education/all_education_edstat_secondary_enrollment_enrollment_rates_county', 'Endpoints\Education@education_edstat_secondary_enrollment_enrollment_rates_county')->name('education_edstat_secondary_enrollment_enrollment_rates_county');
//Education
//education_gross_attendance_ratio_by_level @fredrick muiruri
Route::get('Education/education_gross_attendance_ratio_by_level', 'Endpoints\Education@education_gross_attendance_ratio_by_level')->name('education_gross_attendance_ratio_by_level');
//Education
//education_net_attendance_ratio_by_level @fredrick muiruri
Route::get('Education/education_net_attendance_ratio_by_level', 'Endpoints\Education@education_net_attendance_ratio_by_level')->name('education_net_attendance_ratio_by_level');
//Education
//education_number_of_candidates_by_sex_in_kcse @fredrick muiruri
Route::get('education/all_education_number_of_candidates_by_sex_in_kcse', 'Endpoints\Education@education_number_of_candidates_by_sex_in_kcse')->name('education_number_of_candidates_by_sex_in_kcse');
//Education
//education_population_distribution_above_three_school_attendance @fredrick muiruri
Route::get('Education/education_population_distribution_above_three_school_attendance', 'Endpoints\Education@education_population_distribution_above_three_school_attendance')->name('education_population_distribution_above_three_school_attendance');
//Education
//education_primary_school_enrolments_by_sex @fredrick muiruri
Route::get('education/all_education_primary_school_enrolments_by_sex', 'Endpoints\Education@education_primary_school_enrolments_by_sex')->name('education_primary_school_enrolments_by_sex');
//Education
//education_public_primaryteachers_trainingcollege_enrolment @fredrick muiruri
Route::get('education/all_education_public_primaryteachers_trainingcollege_enrolment', 'Endpoints\Education@education_public_primaryteachers_trainingcollege_enrolment')->name('education_public_primaryteachers_trainingcollege_enrolment');
//Education
//education_public_primary_school_teachers_by_sex @fredrick muiruri
Route::get('education/all_education_public_primary_school_teachers_by_sex', 'Endpoints\Education@education_public_primary_school_teachers_by_sex')->name('education_public_primary_school_teachers_by_sex');
//Education
//education_public_secondary_school_teachers_by_sex @fredrick muiruri
Route::get('education/all_education_public_secondary_school_teachers_by_sex', 'Endpoints\Education@education_public_secondary_school_teachers_by_sex')->name('education_public_secondary_school_teachers_by_sex');
//Education
//education_secondary_school_enrolment_by_sex @fredrick muiruri
Route::get('education/all_secondary_enrollment_sex_county', 'Endpoints\Education@education_secondary_school_enrolment_by_sex')->name('education_secondary_school_enrolment_by_sex');
//Education
//education_studentenrollmentbysextechnicalinstitutions @fredrick muiruri
Route::get('education/all_student_enrollment_sex', 'Endpoints\Education@education_studentenrollmentbysextechnicalinstitutions')->name('education_studentenrollmentbysextechnicalinstitutions');
//Education
//education_studentenrollmentpublicuniversities @fredrick muiruri
Route::get('education/all_student_enrollment_public_universities', 'Endpoints\Education@education_studentenrollmentpublicuniversities')->name('education_studentenrollmentpublicuniversities');
//Health
//health_counties @fredrick muiruri
Route::get('Health/health_counties', 'Endpoints\Health@health_counties')->name('health_counties');
//Health
//health_current_use_of_contraception_by_county @fredrick muiruri
Route::get('Health/health_current_use_of_contraception_by_county', 'Endpoints\Health@health_current_use_of_contraception_by_county')->name('health_current_use_of_contraception_by_county');
//Health
//health_distributionofoutpatientvisitsbytypeofhealthcareprovider @fredrick muiruri
Route::get('Health/health_distributionofoutpatientvisitsbytypeofhealthcareprovider', 'Endpoints\Health@health_distributionofoutpatientvisitsbytypeofhealthcareprovider')->name('health_distributionofoutpatientvisitsbytypeofhealthcareprovider');
//Health
//health_early_childhood_mortality_rates_by_sex @fredrick muiruri
Route::get('Health/health_early_childhood_mortality_rates_by_sex', 'Endpoints\Health@health_early_childhood_mortality_rates_by_sex')->name('health_early_childhood_mortality_rates_by_sex');
//Health
//health_fertility_by_education_status @fredrick muiruri
Route::get('Health/health_fertility_by_education_status', 'Endpoints\Health@health_fertility_by_education_status')->name('health_fertility_by_education_status');
//Health
//health_fertility_rate_by_age_and_residence @fredrick muiruri
Route::get('Health/health_fertility_rate_by_age_and_residence', 'Endpoints\Health@health_fertility_rate_by_age_and_residence')->name('health_fertility_rate_by_age_and_residence');
//Health
//health_hiv_aids_awareness_and_testing @fredrick muiruri
Route::get('Health/health_hiv_aids_awareness_and_testing', 'Endpoints\Health@health_hiv_aids_awareness_and_testing')->name('health_hiv_aids_awareness_and_testing');
//Health
//health_immunization_rate @fredrick muiruri
Route::get('Health/health_immunization_rate', 'Endpoints\Health@health_immunization_rate')->name('health_immunization_rate');
//Health
//health_insurance_coverage_by_counties_and_types @fredrick muiruri
Route::get('Health/health_insurance_coverage_by_counties_and_types', 'Endpoints\Health@health_insurance_coverage_by_counties_and_types')->name('health_insurance_coverage_by_counties_and_types');
//Health
//health_kihibs_children_by_additional_supplement @fredrick muiruri
Route::get('Health/health_kihibs_children_by_additional_supplement', 'Endpoints\Health@health_kihibs_children_by_additional_supplement')->name('health_kihibs_children_by_additional_supplement');
//Health
//health_kihibs_children_by_place_of_delivery @fredrick muiruri
Route::get('Health/health_kihibs_children_by_place_of_delivery', 'Endpoints\Health@health_kihibs_children_by_place_of_delivery')->name('health_kihibs_children_by_place_of_delivery');
//Health
//health_kihibs_children_by_who_assisted_at_birth @fredrick muiruri
Route::get('Health/health_kihibs_children_by_who_assisted_at_birth', 'Endpoints\Health@health_kihibs_children_by_who_assisted_at_birth')->name('health_kihibs_children_by_who_assisted_at_birth');
//Health
//health_kihibs_children_immmunized_against_measles @fredrick muiruri
Route::get('Health/health_kihibs_children_immmunized_against_measles', 'Endpoints\Health@health_kihibs_children_immmunized_against_measles')->name('health_kihibs_children_immmunized_against_measles');
//Health
//health_kihibs_children_that_had_diarrhoea @fredrick muiruri
Route::get('Health/health_kihibs_children_that_had_diarrhoea', 'Endpoints\Health@health_kihibs_children_that_had_diarrhoea')->name('health_kihibs_children_that_had_diarrhoea');
//Health
//health_kihibs_disability_by_type @fredrick muiruri
Route::get('Health/health_kihibs_disability_by_type', 'Endpoints\Health@health_kihibs_disability_by_type')->name('health_kihibs_disability_by_type');
//Health
//health_kihibs_disability_that_had_difficulty @fredrick muiruri
Route::get('Health/health_kihibs_disability_that_had_difficulty', 'Endpoints\Health@health_kihibs_disability_that_had_difficulty')->name('health_kihibs_disability_that_had_difficulty');
//Health
//health_kihibs_health_insurance_cover_by_type @fredrick muiruri
Route::get('Health/health_kihibs_health_insurance_cover_by_type', 'Endpoints\Health@health_kihibs_health_insurance_cover_by_type')->name('health_kihibs_health_insurance_cover_by_type');
//Health
//health_kihibs_incidence_of_sickness_injury @fredrick muiruri
Route::get('Health/health_kihibs_incidence_of_sickness_injury', 'Endpoints\Health@health_kihibs_incidence_of_sickness_injury')->name('health_kihibs_incidence_of_sickness_injury');

// @George Muchiri
// governance_cases_forwarded_and_action_taken route
Route::get('governance/all_governance_cases_forwarded_and_action_taken', 'Endpoints\Governance@get_governance_cases_forwarded_and_action_taken')->name('governance_cases_forwarded_and_action_taken');
// @George Muchiri
// governance_cases_forwarded_and_action_taken route
Route::get('governance/all_governance_cases_handled_by_ethics_commision', 'Endpoints\Governance@get_governance_cases_handled_by_ethics_commision')->name('governance_cases_handled_by_ethics_commision');
// @George Muchiri
// @governance_cases_handled_by_various_courts
Route::get('governance/all_governance_cases_handled_by_various_courts', 'Endpoints\Governance@get_governance_cases_handled_by_various_courts')->name('governance_cases_handled_by_various_courts');
// @George Muchiri
// @governance_convicted_prisoners_by_type_of_offence_and_sex
Route::get('governance/all_governance_convicted_prisoners_by_type_of_offence_and_sex', 'Endpoints\Governance@get_governance_convicted_prisoners_by_type_of_offence_and_sex')->name('governance_convicted_prisoners_by_type_of_offence_and_sex');
// @George Muchiri
// @governance_convicted_prison_population_by_age_and_sex
Route::get('governance/all_governance_convicted_prison_population_by_age_and_sex', 'Endpoints\Governance@get_governance_convicted_prison_population_by_age_and_sex')->name('governance_convicted_prison_population_by_age_and_sex'); 
// @George Muchiri
// @governance_crimes_reported_to_police_by_command_stations
Route::get('governance/all_governance_crimes_reported_to_police_by_command_stations', 'Endpoints\Governance@get_governance_crimes_reported_to_police_by_command_stations')->name('governance_crimes_reported_to_police_by_command_stations'); 
// @George Muchiri
// @governance_daily_average_population_of_prisoners_by_sex
Route::get('governance/all_governance_daily_average_population_of_prisoners_by_sex', 'Endpoints\Governance@get_governance_daily_average_population_of_prisoners_by_sex')->name('governance_daily_average_population_of_prisoners_by_sex'); 
// @George Muchiri
// @governance_environmental_crimes_reported_to_nema
Route::get('governance/all_governance_environmental_crimes_reported_to_nema', 'Endpoints\Governance@get_governance_environmental_crimes_reported_to_nema')->name('governance_environmental_crimes_reported_to_nema'); 
 
// @George Muchiri
// @governance_experienceof_domestic_violence_by_age
Route::get('governance/all_governance_experienceof_domestic_violence_by_age', 'Endpoints\Governance@get_governance_experienceof_domestic_violence_by_age')->name('governance_experienceof_domestic_violence_by_age'); 
// @George Muchiri
// @governance_experienceof_domestic_violence_by_marital_success
Route::get('governance/all_governance_experienceof_domestic_violence_by_marital_success', 'Endpoints\Governance@get_governance_experienceof_domestic_violence_by_marital_success')->name('governance_experienceof_domestic_violence_by_marital_success'); 
// @George Muchiri
// @governance_experienceof_domestic_violence_by_residence
Route::get('governance/all_governance_experienceof_domestic_violence_by_residence', 'Endpoints\Governance@get_governance_experienceof_domestic_violence_by_residence')->name('
governance_experienceof_domestic_violence_by_residence'); 
// @George Muchiri
// @governance_firearms_and_ammunition_recovered_or_surrendered
Route::get('governance/all_governance_firearms_and_ammunition_recovered_or_surrendered', 'Endpoints\Governance@get_governance_firearms_and_ammunition_recovered_or_surrendered')->name('governance_firearms_and_ammunition_recovered_or_surrendered'); 
// @George Muchiri
// @governance_firearms_and_ammunition_recovered_or_surrendered
Route::get('governance/all_governance_identity_cards_made_processed_and_collected', 'Endpoints\Governance@get_governance_identity_cards_made_processed_and_collected')->name('governance_identity_cards_made_processed_and_collected');
// @George Muchiri
// @governance_knowledge_and_prevalence_of_female_circumcision 
Route::get('governance/all_governance_knowledge_and_prevalence_of_female_circumcision', 'Endpoints\Governance@get_governance_knowledge_and_prevalence_of_female_circumcision')->name('governance_knowledge_and_prevalence_of_female_circumcision');
// @George Muchiri
// @governance_magistrates_judges_and_practicing_lawyers
Route::get('governance/all_governance_magistrates_judges_and_practicing_lawyers', 'Endpoints\Governance@get_governance_magistrates_judges_and_practicing_lawyers')->name('governance_magistrates_judges_and_practicing_lawyers');
// @George Muchiri
// @governance_members_of_nationalassembly_and_senators
Route::get('governance/all_governance_members_of_nationalassembly_and_senators', 
  'Endpoints\Governance@get_governance_members_of_nationalassembly_and_senators')->name('governance_members_of_nationalassembly_and_senators');

// @George Muchiri
// @governance_murder_cases_and_convictions_obtained_by_high_court
Route::get('governance/all_governance_murder_cases_and_convictions_obtained_by_high_court', 'Endpoints\Governance@get_governance_murder_cases_and_convictions_obtained_by_high_court')->name('governance_murder_cases_and_convictions_obtained_by_high_court');
// @George Muchiri
// @governance_number_of_police_prisons_and_probation_officers
Route::get('governance/all_governance_number_of_police_prisons_and_probation_officers', 'Endpoints\Governance@get_governance_number_of_police_prisons_and_probation_officers')->name('governance_number_of_police_prisons_and_probation_officers');
// @George Muchiri
// @governance_number_of_refugees_by_age_and_sex
Route::get('governance/all_governance_number_of_refugees_by_age_and_sex', 'Endpoints\Governance@get_governance_number_of_refugees_by_age_and_sex')->name('governance_number_of_refugees_by_age_and_sex');
// @George Muchiri
// @governance_offences_committed_against_morality
Route::get('governance/all_governance_offences_committed_against_morality', 
'Endpoints\Governance@get_governance_offences_committed_against_morality')->name('governance_offences_committed_against_morality');
// @George Muchiri
// @governance_offence_by_sex_and_command_stations
Route::get('governance/all_governance_offence_by_sex_and_command_stations', 
'Endpoints\Governance@get_governance_offence_by_sex_and_command_stations')->name('governance_offence_by_sex_and_command_stations');
// @George Muchiri
// @get_governance_offenders_serving
Route::get('governance/all_governance_offenders_serving', 
'Endpoints\Governance@get_governance_offenders_serving')->name('governance_offenders_serving');
// @George Muchiri
// @get_governance_participation_in_key_decision_making_positions_by_sex
Route::get('governance/all_governance_participation_in_key_decision_making_positions_by_sex', 
'Endpoints\Governance@get_governance_participation_in_key_decision_making_positions_by_sex')->name('governance_participation_in_key_decision_making_positions_by_sex');
// @George Muchiri
// @get_governance_passports_work_permits_and_foreigners_registered
Route::get('governance/all_governance_passports_work_permits_and_foreigners_registered', 
'Endpoints\Governance@get_governance_passports_work_permits_and_foreigners_registered')->name('
governance_passports_work_permits_and_foreigners_registered');
// @George Muchiri
// @get_governance_persons_reported_committed_offences_related_to_drugs
Route::get('governance/all_governance_persons_reported_committed_offences_related_to_drugs', 
'Endpoints\Governance@get_governance_persons_reported_committed_offences_related_to_drugs')->name('governance_persons_reported_committed_offences_related_to_drugs');
// @George Muchiri
// @get_governance_persons_reported_tohave_committed_defilement
Route::get('governance/all_governance_persons_reported_tohave_committed_defilement', 
'Endpoints\Governance@get_governance_persons_reported_tohave_committed_defilement')->name('
governance_persons_reported_tohave_committed_defilement');
// @George Muchiri
// @get_governance_persons_reported_tohave_committed_defilement
Route::get('governance/all_governance_persons_reported_tohave_committed_defilement', 
'Endpoints\Governance@get_governance_persons_reported_tohave_committed_defilement')->name('
governance_persons_reported_tohave_committed_defilement');
// @George Muchiri
// @get_governance_persons_reported_tohave_committed_rape
Route::get('governance/all_governance_persons_reported_tohave_committed_rape', 
'Endpoints\Governance@get_governance_persons_reported_tohave_committed_rape')->name('
governance_persons_reported_tohave_committed_rape');
// @George Muchiri
// @get_governance_persons_reported_to_have_committed_homicide_by_sex
Route::get('governance/all_governance_persons_reported_to_have_committed_homicide_by_sex', 
'Endpoints\Governance@get_governance_persons_reported_to_have_committed_homicide_by_sex')->name('governance_persons_reported_to_have_committed_homicide_by_sex');
// @George Muchiri
// @get_governance_persons_reported_to_have_committed_robbery_and_theft
Route::get('governance/all_governance_persons_reported_to_have_committed_robbery_and_theft', 
'Endpoints\Governance@get_governance_persons_reported_to_have_committed_robbery_and_theft')->name('governance_persons_reported_to_have_committed_robbery_and_theft');
// @George Muchiri
// @get_governance_prevalence_female_circumcision_and_type
Route::get('governance/all_governance_prevalence_female_circumcision_and_type', 
'Endpoints\Governance@get_governance_prevalence_female_circumcision_and_type')->name('
governance_prevalence_female_circumcision_and_type');
// @George Muchiri
// @get_governance_prison_population_by_sentence_duration_and_sex
Route::get('governance/all_governance_prison_population_by_sentence_duration_and_sex', 
'Endpoints\Governance@get_governance_prison_population_by_sentence_duration_and_sex')->name('
governance_prison_population_by_sentence_duration_and_sex');
// @George Muchiri
// @get_governance_prison_population_by_sentence_duration_and_sex
Route::get('governance/all_governance_prison_population_by_sentence_duration_and_sex', 
'Endpoints\Governance@get_governance_prison_population_by_sentence_duration_and_sex')->name('
governance_prison_population_by_sentence_duration_and_sex');
// @George Muchiri
// @get_governance_public_assets_traced_recovered_and_loss_averted
Route::get('governance/all_governance_public_assets_traced_recovered_and_loss_averted', 
'Endpoints\Governance@get_governance_public_assets_traced_recovered_and_loss_averted')->name('governance_public_assets_traced_recovered_and_loss_averted');
// @George Muchiri
// @get_governance_registered_voters_by_county_and_by_sex
Route::get('governance/all_governance_registered_voters_by_county_and_by_sex', 
'Endpoints\Governance@get_governance_registered_voters_by_county_and_by_sex')->name('
governance_registered_voters_by_county_and_by_sex');
// @George Muchiri
// @get_governance_total_prisoners_committed_for_debt_bysex
Route::get('governance/all_governance_total_prisoners_committed_for_debt_bysex', 
'Endpoints\Governance@get_governance_total_prisoners_committed_for_debt_bysex')->name('
governance_total_prisoners_committed_for_debt_bysex');
// @George Muchiri
// @get_governance_women_groups_registration_contributions_uwezo_funds
Route::get('governance/all_governance_women_groups_registration_contributions_uwezo_funds', 
'Endpoints\Governance@get_governance_women_groups_registration_contributions_uwezo_funds')->name('governance_women_groups_registration_contributions_uwezo_funds');
// @George Muchiri
// @get_governance_women_groups_registration_contributions_women_groups
Route::get('governance/all_governance_women_groups_registration_contributions_women_groups', 
'Endpoints\Governance@get_governance_women_groups_registration_contributions_women_groups')->name('governance_women_groups_registration_contributions_women_groups');
// @George Muchiri
// @get_governance_women_groups_registration_cont_women_enterprise_fund
Route::get('governance/all_governance_women_groups_registration_cont_women_enterprise_fund', 
'Endpoints\Governance@get_governance_women_groups_registration_cont_women_enterprise_fund')->name('governance_women_groups_registration_cont_women_enterprise_fund');
// @George Muchiri
// @get_population_by_sex_and_age_groups
Route::get('population/all_population_by_sex_and_age_groups', 
'Endpoints\Population@get_population_by_sex_and_age_groups')->name('
population_by_sex_and_age_groups');
// @George Muchiri
// @get_population_by_sex_and_school_attendance
Route::get('population/all_population_by_sex_and_school_attendance', 
'Endpoints\Population@get_population_by_sex_and_school_attendance')->name('population_by_sex_and_school_attendance');
// @George Muchiri
// @get_population_by_type_of_disability
Route::get('population/all_population_by_type_of_disability', 
'Endpoints\Population@get_population_by_type_of_disability')->name('population_by_type_of_disability');
// @George Muchiri
// @get_population_distribution_sex_number_households_area_density
Route::get('population/all_population_distribution_sex_number_households_area_density', 
'Endpoints\Population@get_population_distribution_sex_number_households_area_density')->name('population_distribution_sex_number_households_area_density');
// @George Muchiri
// @get_population_households_by_main_source_of_water
Route::get('population/all_population_households_by_main_source_of_water', 
'Endpoints\Population@get_population_households_by_main_source_of_water')->name('population_households_by_main_source_of_water');
// @George Muchiri
// @get_population_households_type_floor_material_main_dwelling_unit
Route::get('population/all_population_households_type_floor_material_main_dwelling_unit', 
'Endpoints\Population@get_population_households_type_floor_material_main_dwelling_unit')->name('population_households_type_floor_material_main_dwelling_unit');
// @George Muchiri
// @get_population_percentage_households_ownership_household_assets
Route::get('population/all_population_percentage_households_ownership_household_assets', 
'Endpoints\Population@get_population_percentage_households_ownership_household_assets')->name('population_percentage_households_ownership_household_assets');

// @George Muchiri
// @get_population_populationbysexhouseholdsdensityandcensusyears
Route::get('population/all_population_populationbysexhouseholdsdensityandcensusyears', 
'Endpoints\Population@get_population_populationbysexhouseholdsdensityandcensusyears')->name('population_populationbysexhouseholdsdensityandcensusyears');
// @George Muchiri
// @get_population_populationprojectionsbyselectedagegroup


Route::get('population/all_population_populationprojectionsbyspecialagegroups', 
'Endpoints\Population@get_population_populationprojectionsbyspecialagegroups')->name('population_populationprojectionsbyspecialagegroupsp');




Route::get('population/all_population_populationprojectionsbyspecialagegroups', 
'Endpoints\Population@get_population_populationprojectionsbyspecialagegroups')->name('population_populationprojectionsbyspecialagegroupsp');

// @George Muchiri
// @get_population_kihibs_by_broad_age_group
Route::get('population/all_population_kihibs_by_broad_age_group', 
'Endpoints\Population@get_population_kihibs_by_broad_age_group')->name('population_kihibs_by_broad_age_group');
// @George Muchiri
// @get_population_kihibs_children_under_18_by_orphanhood
Route::get('population/all_population_kihibs_children_under_18_by_orphanhood', 
'Endpoints\Population@get_population_kihibs_children_under_18_by_orphanhood')->name('population_kihibs_children_under_18_by_orphanhood');
// @George Muchiri
// @get_population_kihibs_distribution_by_sex
Route::get('population/all_population_kihibs_distribution_by_sex', 
'Endpoints\Population@get_population_kihibs_distribution_by_sex')->name('population_kihibs_distribution_by_sex');
// @George Muchiri
// @get_population_kihibs_distribution_of_households_by_size
Route::get('population/all_population_kihibs_distribution_of_households_by_size', 
'Endpoints\Population@get_population_kihibs_distribution_of_households_by_size')->name('population_kihibs_distribution_of_households_by_size');
// @George Muchiri
// @get_population_kihibs_hholds_by_sex_of_household_head
Route::get('population/all_population_kihibs_hholds_by_sex_of_household_head', 
'Endpoints\Population@get_population_kihibs_hholds_by_sex_of_household_head')->name('population_kihibs_hholds_by_sex_of_household_head');
// @George Muchiri
// @get_population_kihibs_marital_status_above_18_years
Route::get('population/all_population_kihibs_marital_status_above_18_years', 
'Endpoints\Population@get_population_kihibs_marital_status_above_18_years')->name('population_kihibs_marital_status_above_18_years');
// @George Muchiri
// @get_finance_cdf_allocation_by_constituency
Route::get('finance/all_finance_cdf_allocation_by_constituency', 
'Endpoints\Finance@get_finance_cdf_allocation_by_constituency')->name('finance_cdf_allocation_by_constituency');
// @George Muchiri
// @get_finance_classification_national_government_expenditure_function
Route::get('Finance/finance_classification_national_government_expenditure_function', 
'Endpoints\Finance@get_finance_classification_national_government_expenditure_function')->name('finance_classification_national_government_expenditure_function');
// @George Muchiri
// @get_finance_county_budget_allocation
Route::get('finance/all_finance_county_budget_allocation', 
'Endpoints\Finance@get_finance_county_budget_allocation')->name('finance_county_budget_allocation');
// @George Muchiri
// @get_finance_county_expenditure
Route::get('finance/all_finance_county_expenditure', 
'Endpoints\Finance@get_finance_county_expenditure')->name('finance_county_expenditure');
// @George Muchiri
// @get_finance_county_revenue
Route::get('finance/all_finance_county_revenue', 
'Endpoints\Finance@get_finance_county_revenue')->name('finance_county_revenue');
// @George Muchiri
// @get_finance_economic_analysis_of_national_government_expenditure
Route::get('Finance/finance_economic_analysis_of_national_government_expenditure', 
'Endpoints\Finance@get_finance_economic_analysis_of_national_government_expenditure')->name('finance_economic_analysis_of_national_government_expenditure');
// @George Muchiri
// @get_finance_economic_classification_of_county_government_expenditure
Route::get('Finance/finance_economic_classification_of_county_government_expenditure', 
'Endpoints\Finance@get_finance_economic_classification_of_county_government_expenditure')->name('finance_economic_classification_of_county_government_expenditure');
// @George Muchiri
// @get_finance_economic_classification_revenue
Route::get('finance/all_economic_revenue', 
'Endpoints\Finance@get_finance_economic_classification_revenue')->name('finance_economic_classification_revenue');
// @George Muchiri
// @get_finance_excise_revenue_commodity
Route::get('finance/all_excise_revenue', 
'Endpoints\Finance@get_finance_excise_revenue_commodity')->name(
  'finance_excise_revenue_commodity');

// @George Muchiri
// @get_finance_expenditure_functions_county_governments
Route::get('Finance/finance_expenditure_functions_county_governments', 
'Endpoints\Finance@get_finance_expenditure_functions_county_governments')->name(
  'finance_expenditure_functions_county_governments');

// @George Muchiri
// @get_finance_expenditure_functions_county_governments
Route::get('Finance/finance_expenditure_functions_county_governments', 
'Endpoints\Finance@get_finance_expenditure_functions_county_governments')->name(
  'finance_expenditure_functions_county_governments');

// @George Muchiri
// @get_finance_money_banking_index
Route::get('Finance/finance_money_banking_index', 
'Endpoints\Finance@get_finance_money_banking_index')->name(
  'finance_money_banking_index');

// @George Muchiri
// @get_finance_money_banking_institutions
Route::get('Finance/finance_money_banking_institutions', 
'Endpoints\Finance@get_finance_money_banking_institutions')->name(
  'finance_money_banking_institutions');

// @George Muchiri
// @get_finance_national_government_expenditure
Route::get('finance/all_national_expenditure', 
'Endpoints\Finance@get_finance_national_government_expenditure')->name(
  'finance_national_government_expenditure');

// @George Muchiri
// @get_finance_national_government_expenditure_purpose
Route::get('finance/all_finance_national_government_expenditure_purpose', 
'Endpoints\Finance@get_finance_national_government_expenditure_purpose')->name(
  'finance_national_government_expenditure_purpose');

// @George Muchiri
// @get_ finance_outstanding_debt_international_organization
Route::get('finance/all_finance_outstanding_debt_international_organization', 
'Endpoints\Finance@get_finance_outstanding_debt_international_organization')->name(
  'finance_outstanding_debt_international_organization');

// @George Muchiri
// @get_finance_outstanding_debt_lending_country
Route::get('finance/all_finance_outstanding_debt_lending_country', 
'Endpoints\Finance@get_finance_outstanding_debt_lending_country')->name(
  'finance_outstanding_debt_lending_country');

// @George Muchiri
// @get_finance_statement_of_national_government_operations
Route::get('finance/all_finance_statement_of_national_government_operations', 
'Endpoints\Finance@get_finance_statement_of_national_government_operations')->name(
  'finance_statement_of_national_government_operations');


// @Charles Ndirangu
// CPI get cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya route
Route::get('cpi/all_annual_avg_retail_prices_of_certain_consumer_goods_in', 'Endpoints\CPI@get_cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya')->name('cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya');
// @Charles Ndirangu
// CPI  cpi_consumer_price_index route
Route::get('cpi/all_consumer_price_index', 'Endpoints\CPI@get_cpi_consumer_price_index')->name('cpi_consumer_price_index');
// @Charles Ndirangu
// CPI  cpi_elementary_aggregates_weights_in_the_cpi_baskets route
Route::get('cpi/all_elementary_aggregates_weights_in_the_cpi_baskets', 'Endpoints\CPI@get_cpi_elementary_aggregates_weights_in_the_cpi_baskets')->name('cpi_elementary_aggregates_weights_in_the_cpi_baskets');
// @Charles Ndirangu
// CPI  cpi_group_weights_for_kenya_cpi_febuary_base_2009 route
Route::get('cpi/all_group_weights_for_kenya_cpi_febuary_base_2009', 'Endpoints\CPI@get_cpi_group_weights_for_kenya_cpi_febuary_base_2009')->name('cpi_group_weights_for_kenya_cpi_febuary_base_2009');
// @Charles Ndirangu
// CPI  cpi_group_weights_for_kenya_cpi_october_base_1997 route
Route::get('cpi/all_group_weights_for_kenya_cpi_october_base_1997', 'Endpoints\CPI@get_cpi_group_weights_for_kenya_cpi_october_base_1997')->name('get_cpi_group_weights_for_kenya_cpi_october_base_1997');
// @Charles Ndirangu
// Administration  administrative_unit route
Route::get('Administration/administrative_unit', 'Endpoints\Administration@get_administrative_unit')->name('administrative_unit');
// @Charles Ndirangu
// Trade  trade_and_commerce_balance_of_trade route
Route::get('trade/all_trade_and_commerce_balance_of_trade', 'Endpoints\Trade@get_trade_and_commerce_balance_of_trade')->name('trade_and_commerce_balance_of_trade');
// @Charles Ndirangu
// Trade  trade_and_commerce_import_trade_africa_countries route
Route::get('trade/all_trade_and_commerce_import_trade_africa_countries', 'Endpoints\Trade@get_trade_and_commerce_import_trade_africa_countries')->name('trade_and_commerce_import_trade_africa_countries');
// @Charles Ndirangu
// Trade  trade_and_commerce_quantities_principal_domestic_exports route
Route::get('trade/all_trade_and_commerce_quantities_principal_domestic_exports', 'Endpoints\Trade@get_trade_and_commerce_quantities_principal_domestic_exports')->name('trade_and_commerce_quantities_principal_domestic_exports');
// @Charles Ndirangu
// Trade  trade_and_commerce_quantities_principal_imports route
Route::get('trade/all_trade_and_commerce_quantities_principal_imports', 'Endpoints\Trade@get_trade_and_commerce_quantities_principal_imports')->name('trade_and_commerce_quantities_principal_imports');
// @Charles Ndirangu
// Trade  trade_and_commerce_revenue_collection_by_amount route
Route::get('trade/all_trade_and_commerce_revenue_collection_by_amount', 'Endpoints\Trade@get_trade_and_commerce_revenue_collection_by_amount')->name('trade_and_commerce_revenue_collection_by_amount');
// @Charles Ndirangu
// Trade  trade_and_commerce_trading_centres route
Route::get('trade/all_trade_and_commerce_trading_centres', 'Endpoints\Trade@get_trade_and_commerce_trading_centres')->name('trade_and_commerce_trading_centres');
// @Charles Ndirangu
// Trade  trade_and_commerce_value_of_total_exports_all_destinations route
Route::get('trade/all_trade_and_commerce_value_of_total_exports_all_destinations', 'Endpoints\Trade@get_trade_and_commerce_value_of_total_exports_all_destinations')->name('trade_and_commerce_value_of_total_exports_all_destinations');
// @Charles Ndirangu
// Trade  trade_and_commerce_value_of_total_exports_european_union route
Route::get('trade/all_trade_and_commerce_value_of_total_exports_european_union', 'Endpoints\Trade@get_trade_and_commerce_value_of_total_exports_european_union')->name('trade_and_commerce_value_of_total_exports_european_union');
// @Charles Ndirangu
// Trade  trade_and_commerce_value_total_exports_east_africa_communities route
Route::get('trade/all_trade_and_commerce_value_total_exports_east_africa_communities', 'Endpoints\Trade@get_trade_and_commerce_value_total_exports_east_africa_communities')->name('trade_and_commerce_value_total_exports_east_africa_communities');
// @Charles Ndirangu
// Trade  trade_and_commerce_values_of_principal_domestic_exports route
Route::get('trade/all_trade_and_commerce_values_of_principal_domestic_exports', 'Endpoints\Trade@get_trade_and_commerce_values_of_principal_domestic_exports')->name('trade_and_commerce_values_of_principal_domestic_exports');
// @Charles Ndirangu
// Trade  trade_and_commerce_values_of_principal_imports route
Route::get('trade/all_trade_and_commerce_values_of_principal_imports', 'Endpoints\Trade@get_trade_and_commerce_values_of_principal_imports')->name('trade_and_commerce_values_of_principal_imports');
//Building and Construction
// @Charles Ndirangu
// Building  building_and_construction_quarterly_civil_engineering_cost_index route
Route::get('building/all_quarterly_civil_engineering_cost_index', 'Endpoints\Building@get_building_and_construction_quarterly_civil_engineering_cost_index')->name('building_and_construction_quarterly_civil_engineering_cost_index');
// @Charles Ndirangu
// Building  building_and_construction_quarterly_non_residential_build_cost route
Route::get('building/all__quarterly_non_residential_build_cost', 'Endpoints\Building@get_building_and_construction_quarterly_non_residential_build_cost')->name('building_and_construction_quarterly_non_residential_build_cost');
// @Charles Ndirangu
// Building  building_and_construction_quarterly_overal_construction_cost route
Route::get('building/all_quarterly_overal_construction_cost', 'Endpoints\Building@get_building_and_construction_quarterly_overal_construction_cost')->name('building_and_construction_quarterly_overal_construction_cost');
// @Charles Ndirangu
// Building  building_and_construction_quarterly_residential_bulding_cost route
Route::get('building/all_quarterly_residential_bulding_cost', 'Endpoints\Building@get_building_and_construction_quarterly_residential_bulding_cost')->name('building_and_construction_quarterly_residential_bulding_cost');


//Tourism
// @Charles Ndirangu
// Building  tourism_arrivals route
Route::get('tourism/tourism_arrivals', 'Endpoints\Tourism@get_tourism_arrivals')->name('tourism_arrivals');
// @Charles Ndirangu
// Building  tourism_conferences route
Route::get('tourism/all_tourism_conferences', 'Endpoints\Tourism@get_tourism_conferences')->name('tourism_conferences');
// @Charles Ndirangu
// Building  tourism_departures route
Route::get('tourism/all_tourism_departures', 'Endpoints\Tourism@get_tourism_departures')->name('tourism_departures');
// @Charles Ndirangu
// Building  tourism_earnings route
Route::get('tourism/all_tourism_earnings', 'Endpoints\Tourism@get_tourism_earnings')->name('tourism_earnings');
// @Charles Ndirangu
// Building  tourism_hotel_occupancy_by_residence route
Route::get('tourism/all_tourism_hotel_occupancy_by_residence', 'Endpoints\Tourism@get_tourism_hotel_occupancy_by_residence')->name('tourism_hotel_occupancy_by_residence');
// @Charles Ndirangu
// Building  tourism_hotel_occupancy_by_zone route
Route::get('tourism/all_tourism_hotel_occupancy_by_zone', 'Endpoints\Tourism@get_tourism_hotel_occupancy_by_zone')->name('tourism_hotel_occupancy_by_zone');
// @Charles Ndirangu
// Building  tourism_population_proportion_that_took_trip route
Route::get('tourism/all_tourism_population_proportion_that_took_trip', 'Endpoints\Tourism@get_tourism_population_proportion_that_took_trip')->name('tourism_population_proportion_that_took_trip');
// @Charles Ndirangu
// Building  tourism_visitor_to_parks route
Route::get('tourism/all_tourism_visitor_to_parks', 'Endpoints\Tourism@get_tourism_visitor_to_parks')->name('tourism_visitor_to_parks');
// @Charles Ndirangu
// Building  tourism_visitors_to_museums route
Route::get('tourism/all_tourism_visitors_to_museums', 'Endpoints\Tourism@get_tourism_visitors_to_museums')->name('tourism_visitors_to_museums');

//Health
//health_kihibs_received_free_medical_services @fredrick muiruri
Route::get('health/all_health_kihibs_received_free_medical_services', 'Endpoints\Health@health_kihibs_received_free_medical_services')->name('health_kihibs_received_free_medical_services');
//Health
//health_kihibs_reported_being_sick_injured_by_cause @fredrick muiruri
Route::get('health/all_health_kihibs_reported_being_sick_injured_by_cause', 'Endpoints\Health@health_kihibs_reported_being_sick_injured_by_cause')->name('health_kihibs_reported_being_sick_injured_by_cause');
//Health
//health_kihibs_reported_being_sick_injured_by_type_of_sickness @fredrick muiruri
Route::get('health/all_health_kihibs_reported_being_sick_injured_by_type_of_sickness', 'Endpoints\Health@health_kihibs_reported_being_sick_injured_by_type_of_sickness')->name('health_kihibs_reported_being_sick_injured_by_type_of_sickness');
//Health
//health_kihibs_reported_sickness_by_age_group @fredrick muiruri
Route::get('health/all_health_kihibs_reported_sickness_by_age_group', 'Endpoints\Health@health_kihibs_reported_sickness_by_age_group')->name('health_kihibs_reported_sickness_by_age_group');
//Health
//health_kihibs_reported_sickness_by_health_provider @fredrick muiruri
Route::get('health/all_health_kihibs_reported_sickness_by_health_provider', 'Endpoints\Health@health_kihibs_reported_sickness_by_health_provider')->name('health_kihibs_reported_sickness_by_health_provider');
//Health
//health_kihibs_reported_sickness_by_no_of_days_missed @fredrick muiruri
Route::get('health/all_health_kihibs_reported_sickness_by_no_of_days_missed', 'Endpoints\Health@health_kihibs_reported_sickness_by_no_of_days_missed')->name('health_kihibs_reported_sickness_by_no_of_days_missed');
//Health
//health_kihibs_type_of_fluid_of_food_given_during_diarrhoea @fredrick muiruri
Route::get('health/all_health_kihibs_type_of_fluid_of_food_given_during_diarrhoea', 'Endpoints\Health@health_kihibs_type_of_fluid_of_food_given_during_diarrhoea')->name('health_kihibs_type_of_fluid_of_food_given_during_diarrhoea');
//Health
//health_kihibs_type_of_health_care_sought @fredrick muiruri
Route::get('health/all_health_kihibs_type_of_health_care_sought', 'Endpoints\Health@health_kihibs_type_of_health_care_sought')->name('health_kihibs_type_of_health_care_sought');
//Health
//health_kihibs_who_diagnosed_illness_injury @fredrick muiruri
Route::get('health/all_health_kihibs_who_diagnosed_illness_injury', 'Endpoints\Health@health_kihibs_who_diagnosed_illness_injury')->name('health_kihibs_who_diagnosed_illness_injury');
//Health
//health_kihibs_who_diagnosed_illness_injury @fredrick muiruri
Route::get('health/all_health_kihibs_who_diagnosed_illness_injury', 'Endpoints\Health@health_kihibs_who_diagnosed_illness_injury')->name('health_kihibs_who_diagnosed_illness_injury');
//Health
//health_maternal_care @fredrick muiruri
Route::get('health/all_health_maternal_care', 'Endpoints\Health@health_maternal_care')->name('health_maternal_care');
//Health
//health_months @fredrick muiruri
Route::get('health/all_health_months', 'Endpoints\Health@health_months')->name('health_months');
//Health
//health_nhif_members @fredrick muiruri
Route::get('health/all_health_nhif_members', 'Endpoints\Health@health_nhif_members')->name('health_nhif_members');
//Health
//health_nhif_resources @fredrick muiruri
Route::get('health/all_health_nhif_resources', 'Endpoints\Health@health_nhif_resources')->name('health_nhif_resources');
//Health
//health_nutritional_status_of_children @fredrick muiruri
Route::get('health/all_health_nutritional_status_of_children', 'Endpoints\Health@health_nutritional_status_of_children')->name('health_nutritional_status_of_children');
//Health
//health_nutritional_status_of_women @fredrick muiruri
Route::get('health/all_health_nutritional_status_of_women', 'Endpoints\Health@health_nutritional_status_of_women')->name('health_nutritional_status_of_women');
//Health
//health_percentage_adults_who_are_current_users @fredrick muiruri
Route::get('health/all_health_percentage_adults_who_are_current_users', 'Endpoints\Health@health_percentage_adults_who_are_current_users')->name('health_percentage_adults_who_are_current_users');
//Health
//health_percentage_incidence_of_diseases_in_kenya @fredrick muiruri
Route::get('health/all_health_percentage_incidence_of_diseases_in_kenya', 'Endpoints\Health@health_percentage_incidence_of_diseases_in_kenya')->name('health_percentage_incidence_of_diseases_in_kenya');
//Health
//health_percentage_who_drink_alcohol_by_age @fredrick muiruri
Route::get('health/all_health_percentage_who_drink_alcohol_by_age', 'Endpoints\Health@health_percentage_who_drink_alcohol_by_age')->name('health_percentage_who_drink_alcohol_by_age');
//Health
//health_place_of_delivery @fredrick muiruri
Route::get('health/all_health_place_of_delivery', 'Endpoints\Health@health_place_of_delivery')->name('health_place_of_delivery');
//Health
//health_prevalence_of_overweight_and_obesity @fredrick muiruri
Route::get('health/all_health_prevalence_of_overweight_and_obesity', 'Endpoints\Health@health_prevalence_of_overweight_and_obesity')->name('health_prevalence_of_overweight_and_obesity');
//Health
//health_registeredmedicalpersonnel @fredrick muiruri
Route::get('health/all_health_registeredmedicalpersonnel', 'Endpoints\Health@health_registeredmedicalpersonnel')->name('health_registeredmedicalpersonnel');
//Health
//health_registeredmedicalpersonnel_ids @fredrick muiruri
Route::get('health/all_health_registeredmedicalpersonnel_ids', 'Endpoints\Health@health_registeredmedicalpersonnel_ids')->name('health_registeredmedicalpersonnel_ids');
//Health
//health_registered_active_nhif_members_by_county @fredrick muiruri
Route::get('health/all_health_registered_active_nhif_members_by_county', 'Endpoints\Health@health_registered_active_nhif_members_by_county')->name('health_registered_active_nhif_members_by_county');
//Health
//health_registered_active_nhif_members_nationally @fredrick muiruri
Route::get('health/all_health_registered_active_nhif_members_nationally', 'Endpoints\Health@health_registered_active_nhif_members_nationally')->name('health_registered_active_nhif_members_nationally');
//Health
//health_registered_medical_laboratories_by_counties @fredrick muiruri
Route::get('health/all_health_registered_medical_laboratories_by_counties', 'Endpoints\Health@health_registered_medical_laboratories_by_counties')->name('health_registered_medical_laboratories_by_counties');
//Health
//health_sectors @fredrick muiruri
Route::get('health/all_health_sectors', 'Endpoints\Health@health_sectors')->name('health_sectors');
//Health
//health_subcounty @fredrick muiruri
Route::get('health/all_health_subcounty', 'Endpoints\Health@health_subcounty')->name('health_subcounty');
//Health
//health_use_of_mosquito_nets_by_children @fredrick muiruri

Route::get('health/all_health_use_of_mosquito_nets_by_children', 'Endpoints\Health@health_use_of_mosquito_nets_by_children')->name('health_use_of_mosquito_nets_by_children');

Route::get('Health/health_use_of_mosquito_nets_by_children', 'Endpoints\Health@health_use_of_mosquito_nets_by_children')->name('health_use_of_mosquito_nets_by_children');




Route::get('health/all_health_use_of_mosquito_nets_by_children', 'Endpoints\Health@health_use_of_mosquito_nets_by_children')->name('health_use_of_mosquito_nets_by_children');
Route::get('Health/health_use_of_mosquito_nets_by_children', 'Endpoints\Health@health_use_of_mosquito_nets_by_children')->name('health_use_of_mosquito_nets_by_children');

//Ict  ict_kihibs_households_owned_ict_equipment_services @david
Route::get('Ict/ict_kihibs_households_owned_ict_equipment_services', 
  'Endpoints\Ict@get_ict_kihibs_households_owned_ict_equipment_services')->
    name('ict_kihibs_households_owned_ict_equipment_services');
//Ict   ict_kihibs_households_without_internet_by_reason @david
Route::get('Ict/ict_kihibs_households_without_internet_by_reason', 
  'Endpoints\Ict@get_ict_kihibs_households_without_internet_by_reason')->
    name('ict_kihibs_households_without_internet_by_reason');
//Ict   ict_kihibs_households_with_internet_by_type @david
Route::get('Ict/ict_kihibs_households_with_internet_by_type', 
  'Endpoints\Ict@get_ict_kihibs_households_with_internet_by_type')->
    name('ict_kihibs_households_with_internet_by_type');
//Ict   ict_kihibs_households_with_tv @david
Route::get('Ict/ict_kihibs_households_with_tv', 
  'Endpoints\Ict@get_ict_kihibs_households_with_tv')->
    name('ict_kihibs_households_with_tv');
    //Ict  ict_kihibs_population_above18by_reasonnothaving_phone @david
Route::get('Ict/ict_kihibs_population_above18by_reasonnothaving_phone', 
  'Endpoints\Ict@get_ict_kihibs_population_above18by_reasonnothaving_phone')->
    name('ict_kihibs_population_above18by_reasonnothaving_phone');
   //Ict  ict_kihibs_population_above18subscribed_mobilemoney @david
Route::get('Ict/ict_kihibs_population_above18subscribed_mobilemoney', 
  'Endpoints\Ict@get_ict_kihibs_population_above18subscribed_mobilemoney')->
    name('ict_kihibs_population_above18subscribed_mobilemoney');
   //Ict   ict_kihibs_population_by_ictequipment_and_servicesused @david
Route::get('Ict/ict_kihibs_population_by_ictequipment_and_servicesused', 
  'Endpoints\Ict@get_ict_kihibs_population_by_ictequipment_and_servicesused')->
    name('ict_kihibs_population_by_ictequipment_and_servicesusedey');
   //Ict    ict_kihibs_population_that_didntuseinternet_by_reason @david
Route::get('Ict/ict_kihibs_population_that_didntuseinternet_by_reason', 
  'Endpoints\Ict@get_ict_kihibs_population_that_didntuseinternet_by_reason')->
    name('ict_kihibs_population_that_didntuseinternet_by_reason');
   //Ict     ict_kihibs_population_that_used_internet_by_purpose @david
Route::get('Ict/ict_kihibs_population_that_used_internet_by_purpose', 
  'Endpoints\Ict@get_ict_kihibs_population_that_used_internet_by_purpose')->
    name('ict_kihibs_population_that_used_internet_by_purpose');
     //Ict      ict_kihibs_population_who_used_internet_by_place @david
Route::get('Ict/ict_kihibs_population_who_used_internet_by_place', 
  'Endpoints\Ict@get_ict_kihibs_population_who_used_internet_by_place')->
    name('ict_kihibs_population_who_used_internet_by_place');

     //Ict     ict_kihibs_population_withmobilephone_andaveragesims @david
Route::get('Ict/ict_kihibs_population_withmobilephone_andaveragesims', 
  'Endpoints\Ict@get_ict_kihibs_population_withmobilephone_andaveragesims')->
    name(' ict_kihibs_population_withmobilephone_andaveragesims');



     //Poverty    poverty_consumption_expenditure_and_quintile_distribution @david
Route::get('poverty/all_poverty_consumption_expenditure_and_quintile_distribution', 
  'Endpoints\poverty@get_poverty_consumption_expenditure_and_quintile_distribution')->
    name('poverty_consumption_expenditure_and_quintile_distribution');
       //Poverty    poverty_distribution_of_households_by_pointofpurchasedfooditems @david
Route::get('poverty/all_poverty_distribution_of_households_by_pointofpurchasedfooditems', 
  'Endpoints\poverty@get_poverty_distribution_of_households_by_pointofpurchasedfooditems')->
    name('poverty_distribution_of_households_by_pointofpurchasedfooditems');
       //Poverty   poverty_distribution_of_household_food_consumption @david
Route::get('poverty/all_poverty_distribution_of_household_food_consumption', 
  'Endpoints\poverty@get_poverty_distribution_of_household_food_consumption')->
    name('poverty_distribution_of_household_food_consumption');
   //Poverty   poverty_food_and_non_food_expenditure_per_adult_equivalent @david
Route::get('poverty/all_poverty_food_and_non_food_expenditure_per_adult_equivalent', 
  'Endpoints\poverty@get_poverty_food_and_non_food_expenditure_per_adult_equivalent')->
    name('poverty_food_and_non_food_expenditure_per_adult_equivalent');
     //Poverty   poverty_food_estimates_by_residence_and_county @david
Route::get('poverty/all_poverty_food_estimates_by_residence_and_county', 
  'Endpoints\poverty@get_poverty_food_estimates_by_residence_and_county')->
    name('poverty_food_estimates_by_residence_and_county');
        //Poverty   poverty_hardcore_estimates_by_residence_and_county @david
Route::get('poverty/all_poverty_hardcore_estimates_by_residence_and_county', 
  'Endpoints\poverty@get_poverty_hardcore_estimates_by_residence_and_county')->
    name('poverty_hardcore_estimates_by_residence_and_county');
        //Poverty    poverty_overall_estimates_by_residence_and_county @david
Route::get('poverty/all_poverty_overall_estimates_by_residence_and_county', 
  'Endpoints\poverty@get_poverty_overall_estimates_by_residence_and_county')->
    name('poverty_overall_estimates_by_residence_and_county');


//Nutrition
//health_nutritional_status_of_children @fredrick muiruri
Route::get('nutrition/all_health_nutritional_status_of_children', 'Endpoints\Nutrition@health_nutritional_status_of_children')->name('health_nutritional_status_of_children');
//Nutrition
//health_nutritional_status_of_women @fredrick muiruri
Route::get('nutrition/all_health_nutritional_status_of_women', 'Endpoints\Nutrition@health_nutritional_status_of_women')->name('health_nutritional_status_of_women');
//Housing
//housing_conditions_kihibs_waste_disposal_method @fredrick muiruri
Route::get('Housing/housing_conditions_kihibs_waste_disposal_method', 'Endpoints\Housing@housing_conditions_kihibs_waste_disposal_method')->name('housing_conditions_kihibs_waste_disposal_method');
//Housing
//housing_conditions_kihibs_volume_of_water_used @fredrick muiruri
Route::get('Housing/housing_conditions_kihibs_volume_of_water_used', 'Endpoints\Housing@housing_conditions_kihibs_volume_of_water_used')->name('housing_conditions_kihibs_volume_of_water_used');
//Housing
//housing_conditions_kihibs_time_taken_to_fetch_drinking_water @fredrick muiruri
Route::get('Housing/housing_conditions_kihibs_time_taken_to_fetch_drinking_water', 'Endpoints\Housing@housing_conditions_kihibs_time_taken_to_fetch_drinking_water')->name('housing_conditions_kihibs_time_taken_to_fetch_drinking_water');
//Housing
//housing_conditions_kihibs_sharing_of_toilet_facility @fredrick muiruri
Route::get('Housing/housing_conditions_kihibs_sharing_of_toilet_facility', 'Endpoints\Housing@housing_conditions_kihibs_sharing_of_toilet_facility')->name('housing_conditions_kihibs_sharing_of_toilet_facility');
//Housing
//housing_conditions_kihibs_primary_type_of_cooking_appliance @fredrick muiruri
Route::get('Housing/housing_conditions_kihibs_primary_type_of_cooking_appliance', 'Endpoints\Housing@housing_conditions_kihibs_primary_type_of_cooking_appliance')->name('housing_conditions_kihibs_primary_type_of_cooking_appliance');
//Housing
//housing_conditions_kihibs_place_for_washing_hands_near_toilet @fredrick muiruri
Route::get('Housing/housing_conditions_kihibs_place_for_washing_hands_near_toilet', 'Endpoints\Housing@housing_conditions_kihibs_place_for_washing_hands_near_toilet')->name('housing_conditions_kihibs_place_for_washing_hands_near_toilet');

//Housing
//housing_conditions_kihibs_owner_occupier_dwellings @fredrick muiruri
Route::get('Housing/housing_conditions_kihibs_owner_occupier_dwellings', 'Endpoints\Housing@housing_conditions_kihibs_owner_occupier_dwellings')->name('housing_conditions_kihibs_owner_occupier_dwellings');
//Housing

//housing_conditions_kihibs_methods_used_to_make_water_safer @fredrick muiruri

Route::get('Housing/housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');


Route::get('housing/all_housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');

//housing_conditions_kihibs_methods_used_to_make_water_safer @fredrick muiruri<<<<<<< HEAD

Route::get('Housing/housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');

Route::get('housing/all_housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');




Route::get('Housing/housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');




Route::get('Housing/housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');
Route::get('housing/all_housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');
Route::get('Housing/housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');
Route::get('housing/all_housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');
Route::get('Housing/housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');
// @George Muchiri
// housing_conditions_kihibs_hholds_by_habitable_rooms


Route::get('Housing/housing_conditions_kihibs_hholds_by_habitable_rooms', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_by_habitable_rooms')->name('housing_conditions_kihibs_hholds_by_habitable_rooms');


// @George Muchiri
// housing_conditions_kihibs_hholds_by_housing_tenure

Route::get('Housing/housing_conditions_kihibs_hholds_by_housing_tenure', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_by_housing_tenure')->name('housing_conditions_kihibs_hholds_by_housing_tenure');

// @George Muchiri
// housing_conditions_kihibs_hholds_by_type_of_housing_unit

Route::get('Housing/housing_conditions_kihibs_hholds_by_type_of_housing_unit', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_by_type_of_housing_unit')->name('housing_conditions_kihibs_hholds_by_type_of_housing_unit');


// @George Muchiri
// housing_conditions_kihibs_hholds_in_rented_dwellings

Route::get('Housing/housing_conditions_kihibs_hholds_in_rented_dwellings', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_in_rented_dwellings')->name('housing_conditions_kihibs_hholds_in_rented_dwellings');

// @George Muchiri
// housing_conditions_kihibs_main_floor_material

Route::get('Housing/housing_conditions_kihibs_main_floor_material', 'Endpoints\Housing@get_housing_conditions_kihibs_main_floor_material')->name('housing_conditions_kihibs_main_floor_material');

// @George Muchiri
// housing_conditions_kihibs_main_roofing_material

Route::get('Housing/housing_conditions_kihibs_main_roofing_material', 'Endpoints\Housing@get_housing_conditions_kihibs_main_roofing_material')->name('housing_conditions_kihibs_main_roofing_material');

// @George Muchiri
// housing_conditions_kihibs_main_source_of_cooking_fuel

Route::get('Housing/housing_conditions_kihibs_main_source_of_cooking_fuel', 'Endpoints\Housing@get_housing_conditions_kihibs_main_source_of_cooking_fuel')->name('housing_conditions_kihibs_main_source_of_cooking_fuel');


// @George Muchiri
// housing_conditions_kihibs_main_source_of_drinking_water

Route::get('Housing/housing_conditions_kihibs_main_source_of_drinking_water', 'Endpoints\Housing@get_housing_conditions_kihibs_main_source_of_drinking_water')->name(
  'housing_conditions_kihibs_main_source_of_drinking_water');


// @George Muchiri
// housing_conditions_kihibs_main_source_of_lighting_fuel

Route::get('Housing/housing_conditions_kihibs_main_source_of_lighting_fuel', 'Endpoints\Housing@get_housing_conditions_kihibs_main_source_of_lighting_fuel')->name(
  'housing_conditions_kihibs_main_source_of_lighting_fuel');



Route::get('Housing/housing_conditions_kihibs_hholds_by_habitable_rooms', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_by_habitable_rooms')->name('housing_conditions_kihibs_hholds_by_habitable_rooms');
// @George Muchiri
// housing_conditions_kihibs_hholds_by_housing_tenure
Route::get('Housing/housing_conditions_kihibs_hholds_by_housing_tenure', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_by_housing_tenure')->name('housing_conditions_kihibs_hholds_by_housing_tenure');
// @George Muchiri
// housing_conditions_kihibs_hholds_by_type_of_housing_unit
Route::get('Housing/housing_conditions_kihibs_hholds_by_type_of_housing_unit', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_by_type_of_housing_unit')->name('housing_conditions_kihibs_hholds_by_type_of_housing_unit');
// @George Muchiri
// housing_conditions_kihibs_hholds_in_rented_dwellings
Route::get('Housing/housing_conditions_kihibs_hholds_in_rented_dwellings', 'Endpoints\Housing@get_housing_conditions_kihibs_hholds_in_rented_dwellings')->name('housing_conditions_kihibs_hholds_in_rented_dwellings');
// @George Muchiri
// housing_conditions_kihibs_main_floor_material
Route::get('Housing/housing_conditions_kihibs_main_floor_material', 'Endpoints\Housing@get_housing_conditions_kihibs_main_floor_material')->name('housing_conditions_kihibs_main_floor_material');
// @George Muchiri
// housing_conditions_kihibs_main_roofing_material
Route::get('Housing/housing_conditions_kihibs_main_roofing_material', 'Endpoints\Housing@get_housing_conditions_kihibs_main_roofing_material')->name('housing_conditions_kihibs_main_roofing_material');
// @George Muchiri
// housing_conditions_kihibs_main_source_of_cooking_fuel
Route::get('Housing/housing_conditions_kihibs_main_source_of_cooking_fuel', 'Endpoints\Housing@get_housing_conditions_kihibs_main_source_of_cooking_fuel')->name('housing_conditions_kihibs_main_source_of_cooking_fuel');
// @George Muchiri
// housing_conditions_kihibs_main_source_of_drinking_water
Route::get('Housing/housing_conditions_kihibs_main_source_of_drinking_water', 'Endpoints\Housing@get_housing_conditions_kihibs_main_source_of_drinking_water')->name(
  'housing_conditions_kihibs_main_source_of_drinking_water');
// @George Muchiri
// housing_conditions_kihibs_main_source_of_lighting_fuel
Route::get('Housing/housing_conditions_kihibs_main_source_of_lighting_fuel', 'Endpoints\Housing@get_housing_conditions_kihibs_main_source_of_lighting_fuel')->name(
  'housing_conditions_kihibs_main_source_of_lighting_fuel');

// @George Muchiri
// housing_conditions_kihibs_main_toilet_facility
Route::get('Housing/housing_conditions_kihibs_main_toilet_facility', 
  'Endpoints\Housing@get_housing_conditions_kihibs_main_toilet_facility')->name(
  'housing_conditions_kihibs_main_toilet_facility');

// @George Muchiri
// housing_conditions_kihibs_main_wall_material
Route::get('Housing/housing_conditions_kihibs_main_wall_material', 

	'Endpoints\Housing@get_housing_conditions_kihibs_main_wall_material')->name(
	'housing_conditions_kihibs_main_wall_material');
