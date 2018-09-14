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
Route::get('Housing/home', 'Forms\AllFormsController@housing')->name('Housing/home');

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


Route::get('health_registered_active_nhif_members_by_county/', 'Forms\Health\HealthRegisteredActiveNHIFMembersByCounty@index')->name('health_registered_active_nhif_members_by_county');
   Route::get('memberN/fetch/{id}', array('as' => 'fetchmemberN', 'uses' => 'Forms\Health\HealthRegisteredActiveNHIFMembersByCounty@show'));
    Route::get('memberN/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthRegisteredActiveNHIFMembersByCounty@get_subcounties'));
Route::post('memberN/store', array('as' => 'storememberN', 'uses' => 'Forms\Health\HealthRegisteredActiveNHIFMembersByCounty@store'));
Route::post('memberN/update', array('as' => 'updatememberN', 'uses' => 'Forms\Health\HealthRegisteredActiveNHIFMembersByCounty@update'));

Route::get('health_insurance_coverage_by_counties_and_types/', 'Forms\Health\HealthInsuranceCoverageByCountiesAndTypes@index')->name('health_insurance_coverage_by_counties_and_types');
   Route::get('insuranceN/fetch/{id}', array('as' => 'fetchinsuranceN', 'uses' => 'Forms\Health\HealthInsuranceCoverageByCountiesAndTypes@show'));
    Route::get('insuranceN/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthInsuranceCoverageByCountiesAndTypes@get_subcounties'));
Route::post('insuranceN/store', array('as' => 'storeinsuranceN', 'uses' => 'Forms\Health\HealthInsuranceCoverageByCountiesAndTypes@store'));
Route::post('insuranceN/update', array('as' => 'updateinsuranceN', 'uses' => 'Forms\Health\HealthInsuranceCoverageByCountiesAndTypes@update'));

Route::get('health_registered_medical_laboratories_by_counties/', 'Forms\Health\HealthRegisteredMedicalLaboratoriesByCounties@index')->name('health_registered_medical_laboratories_by_counties');
   Route::get('med/fetch/{id}', array('as' => 'fetchmed', 'uses' => 'Forms\Health\HealthRegisteredMedicalLaboratoriesByCounties@show'));
    Route::get('med/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthRegisteredMedicalLaboratoriesByCounties@get_subcounties'));
Route::post('med/store', array('as' => 'storemed', 'uses' => 'Forms\Health\HealthRegisteredMedicalLaboratoriesByCounties@store'));
Route::post('med/update', array('as' => 'updatemed', 'uses' => 'Forms\Health\HealthRegisteredMedicalLaboratoriesByCounties@update'));


Route::get('health_distributionofoutpatientvisitsbytypeofhealthcareprovider/', 'Forms\Health\HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider@index')->name('health_distributionofoutpatientvisitsbytypeofhealthcareprovider');
   Route::get('privateN/fetch/{id}', array('as' => 'fetchprivateN', 'uses' => 'Forms\Health\HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider@show'));
    Route::get('privateN/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider@get_subcounties'));
Route::post('privateN/store', array('as' => 'storeprivateN', 'uses' => 'Forms\Health\HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider@store'));
Route::post('privateN/update', array('as' => 'updateprivateN', 'uses' => 'Forms\Health\HealthDistributionOfOutPatientVisitsByTypeOfHealthCareProvider@update'));


Route::get('health_current_use_of_contraception_by_county/', 'Forms\Health\HealthCurrentUseOfContraceptionByCounty@index')->name('health_current_use_of_contraception_by_county');
   Route::get('contraception/fetch/{id}', array('as' => 'fetchcontraception', 'uses' => 'Forms\Health\HealthCurrentUseOfContraceptionByCounty@show'));
    Route::get('contraception/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthCurrentUseOfContraceptionByCounty@get_subcounties'));
Route::post('contraception/store', array('as' => 'storecontraception', 'uses' => 'Forms\Health\HealthCurrentUseOfContraceptionByCounty@store'));
Route::post('contraception/update', array('as' => 'updatecontraception', 'uses' => 'Forms\Health\HealthCurrentUseOfContraceptionByCounty@update'));


Route::get('health_nutritional_status_of_women/', 'Forms\Health\HealthNutritionalStatusOfWomen@index')->name('health_nutritional_status_of_women');
   Route::get('adult/fetch/{id}', array('as' => 'fetchadult', 'uses' => 'Forms\Health\HealthNutritionalStatusOfWomen@show'));
    Route::get('adult/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthNutritionalStatusOfWomen@get_subcounties'));
Route::post('adult/store', array('as' => 'storeadult', 'uses' => 'Forms\Health\HealthNutritionalStatusOfWomen@store'));
Route::post('adult/update', array('as' => 'updateadult', 'uses' => 'Forms\Health\HealthNutritionalStatusOfWomen@update'));


Route::get('health_nutritional_status_of_children/', 'Forms\Health\HealthNutritionalStatusOfChildren@index')->name('health_nutritional_status_of_children');
   Route::get('child/fetch/{id}', array('as' => 'fetchchild', 'uses' => 'Forms\Health\HealthNutritionalStatusOfChildren@show'));
    Route::get('child/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthNutritionalStatusOfChildren@get_subcounties'));
Route::post('child/store', array('as' => 'storechild', 'uses' => 'Forms\Health\HealthNutritionalStatusOfChildren@store'));
Route::post('child/update', array('as' => 'updatechild', 'uses' => 'Forms\Health\HealthNutritionalStatusOfChildren@update'));



Route::get('health_use_of_mosquito_nets_by_children/', 'Forms\Health\HealthUseOfMosquitoNetsByChildren@index')->name('health_use_of_mosquito_nets_by_children');
   Route::get('mosquito/fetch/{id}', array('as' => 'fetchmosquito', 'uses' => 'Forms\Health\HealthUseOfMosquitoNetsByChildren@show'));
    Route::get('mosquito/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthUseOfMosquitoNetsByChildren@get_subcounties'));
Route::post('mosquito/store', array('as' => 'storemosquito', 'uses' => 'Forms\Health\HealthUseOfMosquitoNetsByChildren@store'));
Route::post('mosquito/update', array('as' => 'updatemosquito', 'uses' => 'Forms\Health\HealthUseOfMosquitoNetsByChildren@update'));


Route::get('health_hiv_aids_awareness_and_testing/', 'Forms\Health\HealthHIVAIDSAwarenessAndTesting@index')->name('health_hiv_aids_awareness_and_testing');
   Route::get('awareness/fetch/{id}', array('as' => 'fetchawareness', 'uses' => 'Forms\Health\HealthHIVAIDSAwarenessAndTesting@show'));
    Route::get('awareness/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthHIVAIDSAwarenessAndTesting@get_subcounties'));
Route::post('awareness/store', array('as' => 'storeawareness', 'uses' => 'Forms\Health\HealthHIVAIDSAwarenessAndTesting@store'));
Route::post('awareness/update', array('as' => 'updateawareness', 'uses' => 'Forms\Health\HealthHIVAIDSAwarenessAndTesting@update'));


Route::get('health_maternal_care/', 'Forms\Health\HealthMaternalCare@index')->name('health_maternal_care');
   Route::get('maternal/fetch/{id}', array('as' => 'fetchmaternal', 'uses' => 'Forms\Health\HealthMaternalCare@show'));
    Route::get('maternal/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthMaternalCare@get_subcounties'));
Route::post('maternal/store', array('as' => 'storematernal', 'uses' => 'Forms\Health\HealthMaternalCare@store'));
Route::post('maternal/update', array('as' => 'updatematernal', 'uses' => 'Forms\Health\HealthMaternalCare@update'));


   Route::get('health_immunization_rate/', 'Forms\Health\HealthImmunizationRate@index')->name('health_immunization_rate');
   Route::get('immunization/fetch/{id}', array('as' => 'fetchimmunization', 'uses' => 'Forms\Health\HealthImmunizationRate@show'));
    Route::get('immunization/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthImmunizationRate@get_subcounties'));
Route::post('immunization/store', array('as' => 'storeimmunization', 'uses' => 'Forms\Health\HealthImmunizationRate@store'));
Route::post('immunization/update', array('as' => 'updateimmunization', 'uses' => 'Forms\Health\HealthImmunizationRate@update'));


   Route::get('health_registeredmedicalpersonnel/', 'Forms\Health\HealthRegisteredMedicalPersonnel@index')->name('health_registeredmedicalpersonnel');
   Route::get('medical/fetch/{id}', array('as' => 'fetchmedical', 'uses' => 'Forms\Health\HealthRegisteredMedicalPersonnel@show'));
    Route::get('medical/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Health\HealthRegisteredMedicalPersonnel@get_subcounties'));
Route::post('medical/store', array('as' => 'storemedical', 'uses' => 'Forms\Health\HealthRegisteredMedicalPersonnel@store'));
Route::post('medical/update', array('as' => 'updatemedical', 'uses' => 'Forms\Health\HealthRegisteredMedicalPersonnel@update'));




Route::get('finance_economic_classification_revenue/', 'Forms\Finance\ClassifficationOfRevenue@index')->name('ClassifficationOfRevenue');

    Route::get('finance_economic_classification_revenue/', 'Forms\Finance\ClassifficationOfRevenue@index')->name('ClassifficationOfRevenue');

   Route::get('finance_cdf_allocation_by_constituency/', 'Forms\Finance\CDFAllocation@index')->name('finance_cdf_allocation_by_constituency');
   Route::get('cdf/fetch/{id}', array('as' => 'fetchCDF', 'uses' => 'Forms\Finance\CDFAllocation@show'));
    Route::get('cdf/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Finance\CDFAllocation@get_subcounties'));
Route::post('cdf/store', array('as' => 'storeCDF', 'uses' => 'Forms\Finance\CDFAllocation@store'));
Route::post('cdf/update', array('as' => 'updateCDF', 'uses' => 'Forms\Finance\CDFAllocation@update'));




Route::get('agriculture_area_under_sugarcane_harvested_production_avg_yield/', 'Forms\Agriculture\Agriculture_Sugar@index')->name('agriculture_area_under_sugarcane_harvested_production_avg_yield');
Route::get('agriculture/sugar_yield/{id}', array('as' => 'fetchSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@show'));




// Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture@store'));
// Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture@update'));



Route::post('agriculture/store', array('as' => 'storeSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@store'));
Route::post('agriculture/update', array('as' => 'updateSugar', 'uses' => 'Forms\Agriculture\Agriculture_Sugar@update'));

//@Charles
//fetch
Route::get('education_approved_degree_diploma_programs/', 'Forms\Education\AprrovedDegreeDiplomaPrograms@index')->name('education_approved_degree_diploma_programs');

//@Charles
//post to save
Route::post('diploma/store', array('as' => 'storeDiploma', 'uses' => 'Forms\Education\AprrovedDegreeDiplomaPrograms@store'));

//@Charles
//post to update
Route::post('diploma/update', array('as' => 'updateDiploma', 'uses' => 'Forms\Education\AprrovedDegreeDiplomaPrograms@update'));

//@Charles
//show a specific id
Route::get('diploma/approved/{id}', array('as' => 'fetchDiploma', 'uses' => 'Forms\Education\AprrovedDegreeDiplomaPrograms@show'));

//@fred

//fetch
Route::get('agriculture_pricetoproducersformeatmilk/', 'Forms\Agriculture\AgriculturePriceToProducersForMeatMilk@index')->name('agriculture_pricetoproducersformeatmilk');
//post to save
Route::post('pig/store', array('as' => 'storepig', 'uses' => 'Forms\Agriculture\AgriculturePriceToProducersForMeatMilk@store'));
//post to update
Route::post('pig/update', array('as' => 'updatepig', 'uses' => 'Forms\Agriculture\AgriculturePriceToProducersForMeatMilk@update'));

//show a specific id
Route::get('pig/resource/{id}', array('as' => 'fetchpig', 'uses' => 'Forms\Agriculture\AgriculturePriceToProducersForMeatMilk@show'));


//@fred

//fetch
Route::get('agriculture_totalsharecapital/', 'Forms\Agriculture\AgricultureTotalShareCapital@index')->name('agriculture_totalsharecapital');
//post to save
Route::post('share/store', array('as' => 'storeshare', 'uses' => 'Forms\Agriculture\AgricultureTotalShareCapital@store'));
//post to update
Route::post('share/update', array('as' => 'updateshare', 'uses' => 'Forms\Agriculture\AgricultureTotalShareCapital@update'));

//show a specific id
Route::get('share/resource/{id}', array('as' => 'fetchshare', 'uses' => 'Forms\Agriculture\AgricultureTotalShareCapital@show'));


//@fred

//fetch
Route::get('agriculture_production_area_average_yield_tea_type_grower/', 'Forms\Agriculture\AgricultureProductionAreaAverageYieldTeaTypeGrower@index')->name('agriculture_production_area_average_yield_tea_type_grower');
//post to save
Route::post('unitZ/store', array('as' => 'storeunitZ', 'uses' => 'Forms\Agriculture\AgricultureProductionAreaAverageYieldTeaTypeGrower@store'));
//post to update
Route::post('unitZ/update', array('as' => 'updateunitZ', 'uses' => 'Forms\Agriculture\AgricultureProductionAreaAverageYieldTeaTypeGrower@update'));

//show a specific id
Route::get('unitZ/resource/{id}', array('as' => 'fetchunitZ', 'uses' => 'Forms\Agriculture\AgricultureProductionAreaAverageYieldTeaTypeGrower@show'));


//@fred

//fetch
Route::get('agriculture_production_area_average_yield_coffee_type_of_grower/', 'Forms\Agriculture\AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower@index')->name('agriculture_production_area_average_yield_coffee_type_of_grower');
//post to save
Route::post('cooperative/store', array('as' => 'storecooperative', 'uses' => 'Forms\Agriculture\AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower@store'));
//post to update
Route::post('cooperative/update', array('as' => 'updatecooperative', 'uses' => 'Forms\Agriculture\AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower@update'));

//show a specific id
Route::get('cooperative/resource/{id}', array('as' => 'fetchcooperative', 'uses' => 'Forms\Agriculture\AgricultureProductionAreaAverageYieldCoffeeTypeOfGrower@show'));


//@fred

//fetch
Route::get('building_and_construction_quarterly_civil_engineering_cost_index/', 'Forms\Building\BuildingAndConstructionQuarterlyCivilEngineeringCostIndex@index')->name('building_and_construction_quarterly_civil_engineering_cost_index');
//post to save
Route::post('indexY/store', array('as' => 'storeindexY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyCivilEngineeringCostIndex@store'));
//post to update
Route::post('indexY/update', array('as' => 'updateindexY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyCivilEngineeringCostIndex@update'));

//show a specific id
Route::get('indexY/resource/{id}', array('as' => 'fetchindexY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyCivilEngineeringCostIndex@show'));


//@fred

//fetch
Route::get('building_and_construction_quarterly_residential_bulding_cost/', 'Forms\Building\BuildingAndConstructionQuarterlyResidentialBuildingCost@index')->name('building_and_construction_quarterly_residential_bulding_cost');
//post to save
Route::post('building/store', array('as' => 'storebuilding', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyResidentialBuildingCost@store'));
//post to update
Route::post('building/update', array('as' => 'updatebuilding', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyResidentialBuildingCost@update'));

//show a specific id
Route::get('building/resource/{id}', array('as' => 'fetchbuilding', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyResidentialBuildingCost@show'));



//@fred

//fetch
Route::get('building_and_construction_quarterly_overal_construction_cost/', 'Forms\Building\BuildingAndConstructionQuarterlyOveralConstructionCost@index')->name('building_and_construction_quarterly_overal_construction_cost');
//post to save
Route::post('categoryY/store', array('as' => 'storecategoryY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyOveralConstructionCost@store'));
//post to update
Route::post('categoryY/update', array('as' => 'updatecategoryY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyOveralConstructionCost@update'));

//show a specific id
Route::get('categoryY/resource/{id}', array('as' => 'fetchcategoryY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyOveralConstructionCost@show'));


//@fred

//fetch
Route::get('building_and_construction_quarterly_non_residential_build_cost/', 'Forms\Building\BuildingAndConstructionQuarterlyNonResidentialBuildCost@index')->name('building_and_construction_quarterly_non_residential_build_cost');
//post to save
Route::post('costY/store', array('as' => 'storecostY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyNonResidentialBuildCost@store'));
//post to update
Route::post('costY/update', array('as' => 'updatecostY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyNonResidentialBuildCost@update'));

//show a specific id
Route::get('costY/resource/{id}', array('as' => 'fetchcostY', 'uses' => 'Forms\Building\BuildingAndConstructionQuarterlyNonResidentialBuildCost@show'));


//@fred

//fetch
Route::get('cpi_group_weights_for_kenya_cpi_october_base_1997/', 'Forms\CPI\CPIGroupWeightsForKenyaCPIOctoberBase1997@index')->name('cpi_group_weights_for_kenya_cpi_october_base_1997');
//post to save
Route::post('items/store', array('as' => 'storeitems', 'uses' => 'Forms\CPI\CPIGroupWeightsForKenyaCPIOctoberBase1997@store'));
//post to update
Route::post('items/update', array('as' => 'updateitems', 'uses' => 'Forms\CPI\CPIGroupWeightsForKenyaCPIOctoberBase1997@update'));

//show a specific id
Route::get('items/resource/{id}', array('as' => 'fetchitems', 'uses' => 'Forms\CPI\CPIGroupWeightsForKenyaCPIOctoberBase1997@show'));


//@fred

//fetch
Route::get('cpi_group_weights_for_kenya_cpi_febuary_base_2009/', 'Forms\CPI\CPIGroupWeightsForKenyaCPIFebruaryBase2009@index')->name('cpi_group_weights_for_kenya_cpi_febuary_base_2009');
//post to save
Route::post('group/store', array('as' => 'storegroup', 'uses' => 'Forms\CPI\CPIGroupWeightsForKenyaCPIFebruaryBase2009@store'));
//post to update
Route::post('group/update', array('as' => 'updategroup', 'uses' => 'Forms\CPI\CPIGroupWeightsForKenyaCPIFebruaryBase2009@update'));

//show a specific id
Route::get('group/resource/{id}', array('as' => 'fetchgroup', 'uses' => 'Forms\CPI\CPIGroupWeightsForKenyaCPIFebruaryBase2009@show'));


//@fred

//fetch
Route::get('cpi_elementary_aggregates_weights_in_the_cpi_baskets/', 'Forms\CPI\CPIElementaryAggregatesWeightsInTheCPIBaskets@index')->name('cpi_elementary_aggregates_weights_in_the_cpi_baskets');
//post to save
Route::post('aggregate/store', array('as' => 'storeaggregate', 'uses' => 'Forms\CPI\CPIElementaryAggregatesWeightsInTheCPIBaskets@store'));
//post to update
Route::post('aggregate/update', array('as' => 'updateaggregate', 'uses' => 'Forms\CPI\CPIElementaryAggregatesWeightsInTheCPIBaskets@update'));

//show a specific id
Route::get('aggregate/resource/{id}', array('as' => 'fetchaggregate', 'uses' => 'Forms\CPI\CPIElementaryAggregatesWeightsInTheCPIBaskets@show'));



//@fred

//fetch
Route::get('cpi_consumer_price_index/', 'Forms\CPI\CPIConsumerPriceIndex@index')->name('cpi_consumer_price_index');
//post to save
Route::post('cpi/store', array('as' => 'storecpi', 'uses' => 'Forms\CPI\CPIConsumerPriceIndex@store'));
//post to update
Route::post('cpi/update', array('as' => 'updatecpi', 'uses' => 'Forms\CPI\CPIConsumerPriceIndex@update'));

//show a specific id
Route::get('cpi/resource/{id}', array('as' => 'fetchcpi', 'uses' => 'Forms\CPI\CPIConsumerPriceIndex@show'));


//@fred

//fetch
Route::get('cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya/', 'Forms\CPI\CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya@index')->name('cpi_annual_avg_retail_prices_of_certain_consumer_goods_in_kenya');
//post to save
Route::post('retail/store', array('as' => 'storeretail', 'uses' => 'Forms\CPI\CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya@store'));
//post to update
Route::post('retail/update', array('as' => 'updateretail', 'uses' => 'Forms\CPI\CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya@update'));

//show a specific id
Route::get('retail/resource/{id}', array('as' => 'fetchretail', 'uses' => 'Forms\CPI\CPIAnnualAVGRetailPriceOfCertainConsumerGoodsInKenya@show'));



//@fred

//fetch
Route::get('manufacturing_quantum_indices_of_manufacturing_production/', 'Forms\Manufacturing\MaufacturingQuantumIndicesOfManufacturingProduction@index')->name('manufacturing_quantum_indices_of_manufacturing_production');
//post to save
Route::post('quantum/store', array('as' => 'storequantum', 'uses' => 'Forms\Manufacturing\MaufacturingQuantumIndicesOfManufacturingProduction@store'));
//post to update
Route::post('quantum/update', array('as' => 'updatequantum', 'uses' => 'Forms\Manufacturing\MaufacturingQuantumIndicesOfManufacturingProduction@update'));

//show a specific id
Route::get('quantum/resource/{id}', array('as' => 'fetchquantum', 'uses' => 'Forms\Manufacturing\MaufacturingQuantumIndicesOfManufacturingProduction@show'));


//@fred

//fetch
Route::get('manufacturing_per_change_in_quantum_indices_of_man_production/', 'Forms\Manufacturing\MaufacturingPerChangeInQuantumIndicesOfManProduction@index')->name('manufacturing_per_change_in_quantum_indices_of_man_production');
//post to save
Route::post('percentageN/store', array('as' => 'storepercentageN', 'uses' => 'Forms\Manufacturing\MaufacturingPerChangeInQuantumIndicesOfManProduction@store'));
//post to update
Route::post('percentageN/update', array('as' => 'updatepercentageN', 'uses' => 'Forms\Manufacturing\MaufacturingPerChangeInQuantumIndicesOfManProduction@update'));

//show a specific id
Route::get('percentageN/resource/{id}', array('as' => 'fetchpercentageN', 'uses' => 'Forms\Manufacturing\MaufacturingPerChangeInQuantumIndicesOfManProduction@show'));


//@fred

//fetch
Route::get('labour_wage_employment_by_industry_in_public_sector/', 'Forms\Labour\LabourWageEmploymentByIndustryInPublicSector@index')->name('labour_wage_employment_by_industry_in_public_sector');
//post to save
Route::post('public/store', array('as' => 'storepublic', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryInPublicSector@store'));
//post to update
Route::post('public/update', array('as' => 'updatepublic', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryInPublicSector@update'));

//show a specific id
Route::get('public/resource/{id}', array('as' => 'fetchpublic', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryInPublicSector@show'));


//@fred

//fetch
Route::get('labour_wage_employment_by_industry_in_private_sector/', 'Forms\Labour\LabourWageEmploymentByIndustryInPrivateSector@index')->name('labour_wage_employment_by_industry_in_private_sector');
//post to save
Route::post('private/store', array('as' => 'storeprivate', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryInPrivateSector@store'));
//post to update
Route::post('private/update', array('as' => 'updateprivate', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryInPrivateSector@update'));


//show a specific id
Route::get('private/resource/{id}', array('as' => 'fetchprivate', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryInPrivateSector@show'));

//@fred

//fetch
Route::get('labour_wage_employment_by_industry_and_sex/', 'Forms\Labour\LabourWageEmploymentByIndustryAndSex@index')->name('labour_wage_employment_by_industry_and_sex');
//post to save
Route::post('wagenew/store', array('as' => 'storewagenew', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryAndSex@store'));
//post to update
Route::post('wagenew/update', array('as' => 'updatewagenew', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryAndSex@update'));


//show a specific id
Route::get('wagenew/resource/{id}', array('as' => 'fetchwagenew', 'uses' => 'Forms\Labour\LabourWageEmploymentByIndustryAndSex@show'));

//@fred

//fetch
Route::get('labour_total_recorded_employment/', 'Forms\Labour\LabourMemorandumItemsInPublicSector@index')->name('labour_total_recorded_employment');
//post to save
Route::post('employment/store', array('as' => 'storeemployment', 'uses' => 'Forms\Labour\LabourMemorandumItemsInPublicSector@store'));
//post to update
Route::post('employment/update', array('as' => 'updatemployment', 'uses' => 'Forms\Labour\LabourMemorandumItemsInPublicSector@update'));


//show a specific id
Route::get('employment/resource/{id}', array('as' => 'fetchemployment', 'uses' => 'Forms\Labour\LabourMemorandumItemsInPublicSector@show'));


//@fred

//fetch
Route::get('labour_memorandum_items_in_public_sector/', 'Forms\Labour\LabourMemorandumItemsInPublicSector@index')->name('labour_memorandum_items_in_public_sector');
//post to save
Route::post('memorandum/store', array('as' => 'storememorandum', 'uses' => 'Forms\Labour\LabourMemorandumItemsInPublicSector@store'));
//post to update
Route::post('memorandum/update', array('as' => 'updatememorandum', 'uses' => 'Forms\Labour\LabourMemorandumItemsInPublicSector@update'));


//show a specific id
Route::get('memorandum/resource/{id}', array('as' => 'fetchmemorandum', 'uses' => 'Forms\Labour\LabourMemorandumItemsInPublicSector@show'));


//@fred

//fetch
Route::get('labour_average_wage_earnings_per_employee_public_sector/', 'Forms\Labour\LabourAverageWageEarningsPerEmployeePublicSector@index')->name('labour_average_wage_earnings_per_employee_public_sector');
//post to save
Route::post('wageN/store', array('as' => 'storewageN', 'uses' => 'Forms\Labour\LabourAverageWageEarningsPerEmployeePublicSector@store'));
//post to update
Route::post('wageN/update', array('as' => 'updatewageN', 'uses' => 'Forms\Labour\LabourAverageWageEarningsPerEmployeePublicSector@update'));


//show a specific id
Route::get('wageN/resource/{id}', array('as' => 'fetchwageN', 'uses' => 'Forms\Labour\LabourAverageWageEarningsPerEmployeePublicSector@show'));

//@fred

//fetch
Route::get('labour_average_wage_earnings_per_employee_private_sector/', 'Forms\Labour\LabourAverageWageEarningsPerEmployeePrivateSector@index')->name('labour_average_wage_earnings_per_employee_private_sector');
//post to save
Route::post('wage/store', array('as' => 'storewage', 'uses' => 'Forms\Labour\LabourAverageWageEarningsPerEmployeePrivateSector@store'));
//post to update
Route::post('wage/update', array('as' => 'updatewage', 'uses' => 'Forms\Labour\LabourAverageWageEarningsPerEmployeePrivateSector@update'));


//show a specific id
Route::get('wage/resource/{id}', array('as' => 'fetchwage', 'uses' => 'Forms\Labour\LabourAverageWageEarningsPerEmployeePrivateSector@show'));


//@fred

//fetch
Route::get('health_nhif_resources/', 'Forms\Health\HealthNhifResources@index')->name('health_nhif_resources');
//post to save
Route::post('nhifResource/store', array('as' => 'storenhifResource', 'uses' => 'Forms\Health\HealthNhifResources@store'));
//post to update
Route::post('nhifResource/update', array('as' => 'updatenhifResource', 'uses' => 'Forms\Health\HealthNhifResources@update'));


//show a specific id
Route::get('nhifResource/resource/{id}', array('as' => 'fetchnhifResource', 'uses' => 'Forms\Health\HealthNhifResources@show'));




//@fred

//fetch
Route::get('health_nhif_members/', 'Forms\Health\HealthNhifMembers@index')->name('health_nhif_members');
//post to save
Route::post('nhifMember/store', array('as' => 'storenhifMember', 'uses' => 'Forms\Health\HealthNhifMembers@store'));
//post to update
Route::post('nhifMember/update', array('as' => 'updatenhifMember', 'uses' => 'Forms\Health\HealthNhifMembers@update'));


//show a specific id
Route::get('nhifMember/resource/{id}', array('as' => 'fetchnhifMember', 'uses' => 'Forms\Health\HealthNhifMembers@show'));

//@fred

//fetch
Route::get('health_fertility_by_education_status/', 'Forms\Health\HealthFertilityByEducationStatus@index')->name('health_fertility_by_education_status');
//post to save
Route::post('fertilityN/store', array('as' => 'storefertilityN', 'uses' => 'Forms\Health\HealthFertilityByEducationStatus@store'));
//post to update
Route::post('fertilityN/update', array('as' => 'updatefertilityN', 'uses' => 'Forms\Health\HealthFertilityByEducationStatus@update'));


//show a specific id
Route::get('fertilityN/resource/{id}', array('as' => 'fetchfertilityN', 'uses' => 'Forms\Health\HealthFertilityByEducationStatus@show'));

//@fred

//fetch
Route::get('health_fertility_rate_by_age_and_residence/', 'Forms\Health\HealthFertilityRateByAgeAndResidence@index')->name('health_fertility_rate_by_age_and_residence');
//post to save
Route::post('fertility/store', array('as' => 'storefertility', 'uses' => 'Forms\Health\HealthFertilityRateByAgeAndResidence@store'));
//post to update
Route::post('fertility/update', array('as' => 'updatefertility', 'uses' => 'Forms\Health\HealthFertilityRateByAgeAndResidence@update'));


//show a specific id
Route::get('fertility/resource/{id}', array('as' => 'fetchfertility', 'uses' => 'Forms\Health\HealthFertilityRateByAgeAndResidence@show'));

//@fred

//fetch
Route::get('health_early_childhood_mortality_rates_by_sex/', 'Forms\Health\HealthEarlyChildhoodMortalityRatesBySex@index')->name('health_early_childhood_mortality_rates_by_sex');
//post to save
Route::post('rate/store', array('as' => 'storerate', 'uses' => 'Forms\Health\HealthEarlyChildhoodMortalityRatesBySex@store'));
//post to update
Route::post('rate/update', array('as' => 'updaterate', 'uses' => 'Forms\Health\HealthEarlyChildhoodMortalityRatesBySex@update'));


//show a specific id
Route::get('rate/resource/{id}', array('as' => 'fetchrate', 'uses' => 'Forms\Health\HealthEarlyChildhoodMortalityRatesBySex@show'));

//@fred

//fetch
Route::get('health_place_of_delivery/', 'Forms\Health\HealthPlaceOfDelivery@index')->name('health_place_of_delivery');
//post to save
Route::post('placeN/store', array('as' => 'storeplaceN', 'uses' => 'Forms\Health\HealthPlaceOfDelivery@store'));
//post to update
Route::post('placeN/update', array('as' => 'updateplaceN', 'uses' => 'Forms\Health\HealthPlaceOfDelivery@update'));


//show a specific id
Route::get('placeN/resource/{id}', array('as' => 'fetchplaceN', 'uses' => 'Forms\Health\HealthPlaceOfDelivery@show'));

//@fred

//fetch
Route::get('health_percentage_incidence_of_diseases_in_kenya/', 'Forms\Health\HealthPercentageIncidenceOfDiseasesInKenya@index')->name('health_percentage_incidence_of_diseases_in_kenya');
//post to save
Route::post('incidenceN/store', array('as' => 'storeincidenceN', 'uses' => 'Forms\Health\HealthPercentageIncidenceOfDiseasesInKenya@store'));
//post to update
Route::post('incidenceN/update', array('as' => 'updateincidenceN', 'uses' => 'Forms\Health\HealthPercentageIncidenceOfDiseasesInKenya@update'));


//show a specific id
Route::get('incidenceN/resource/{id}', array('as' => 'fetchincidenceN', 'uses' => 'Forms\Health\HealthPercentageIncidenceOfDiseasesInKenya@show'));

//@fred

//fetch
Route::get('health_percentage_who_drink_alcohol_by_age/', 'Forms\Health\HealthPercentageWhoDrinkAlcoholByAge@index')->name('health_percentage_who_drink_alcohol_by_age');
//post to save
Route::post('percentage/store', array('as' => 'storepercentage', 'uses' => 'Forms\Health\HealthPercentageWhoDrinkAlcoholByAge@store'));
//post to update
Route::post('percentage/update', array('as' => 'updatepercentage', 'uses' => 'Forms\Health\HealthPercentageWhoDrinkAlcoholByAge@update'));


//show a specific id
Route::get('percentage/resource/{id}', array('as' => 'fetchpercentage', 'uses' => 'Forms\Health\HealthPercentageWhoDrinkAlcoholByAge@show'));

//@fred

//fetch
Route::get('health_prevalence_of_overweight_and_obesity/', 'Forms\Health\HealthPrevalenceOfOverweightAndObesity@index')->name('health_prevalence_of_overweight_and_obesity');
//post to save
Route::post('prevalence/store', array('as' => 'storeprevalence', 'uses' => 'Forms\Health\HealthPrevalenceOfOverweightAndObesity@store'));
//post to update
Route::post('prevalence/update', array('as' => 'updateprevalence', 'uses' => 'Forms\Health\HealthPrevalenceOfOverweightAndObesity@update'));


//show a specific id
Route::get('prevalence/resource/{id}', array('as' => 'fetchprevalence', 'uses' => 'Forms\Health\HealthPrevalenceOfOverweightAndObesity@show'));

//@fred

//fetch
Route::get('health_percentage_adults_who_are_current_users/', 'Forms\Health\HealthPercentageAdultsWhoAreCurrentUsers@index')->name('health_percentage_adults_who_are_current_users');
//post to save
Route::post('user/store', array('as' => 'storeuser', 'uses' => 'Forms\Health\HealthPercentageAdultsWhoAreCurrentUsers@store'));
//post to update
Route::post('user/update', array('as' => 'updateuser', 'uses' => 'Forms\Health\HealthPercentageAdultsWhoAreCurrentUsers@update'));


//show a specific id
Route::get('user/resource/{id}', array('as' => 'fetchuser', 'uses' => 'Forms\Health\HealthPercentageAdultsWhoAreCurrentUsers@show'));




//@Charles Ndirangu
//Tourism Sector
//@Charles
//fetch
Route::get('tourism_tourist_arrivals/', 'Forms\Tourism\tourism_arrivals@index')->name('tourism_tourist_arrivals');

//@Charles
//post to save
Route::post('tourist_arrivals/store', array('as' => 'storeTouristArrivals', 'uses' => 'Forms\Tourism\tourism_arrivals@store'));

//@Charles
//post to update
Route::post('tourist_arrivals/update', array('as' => 'updateTouristArrivals', 'uses' => 'Forms\Tourism\tourism_arrivals@update'));

//@Charles
//show a specific id
Route::get('tourist_arrivals/approved/{id}', array('as' => 'fetchTouristArrivals', 'uses' => 'Forms\Tourism\tourism_arrivals@show'));

//@Charles
//fetch
Route::get('tourism_departures/', 'Forms\Tourism\tourism_departures@index')->name('tourism_tourism_departures');

//@Charles
//post to save
Route::post('tourism_departures/store', array('as' => 'storeTouristDepartures', 'uses' => 'Forms\Tourism\tourism_departures@store'));

//@Charles
//post to update
Route::post('tourism_departures/update', array('as' => 'updateTouristDepartures', 'uses' => 'Forms\Tourism\tourism_departures@update'));

//@Charles
//show a specific id
Route::get('tourism_departures/approved/{id}', array('as' => 'fetchTouristDepartures', 'uses' => 'Forms\Tourism\tourism_departures@show'));


//@Charles
//fetch
Route::get('tourism_conferences/', 'Forms\Tourism\tourism_conference@index')->name('tourism_tourist_arrivals');

//@Charles
//post to save
Route::post('tourism_conferences/store', array('as' => 'storeTouristConferences', 'uses' => 'Forms\Tourism\tourism_conference@store'));

//@Charles
//post to update
Route::post('tourism_conferences/update', array('as' => 'updateTouristConferences', 'uses' => 'Forms\Tourism\tourism_conference@update'));

//@Charles
//show a specific id
Route::get('tourism_conferences/approved/{id}', array('as' => 'fetchTouristConferences', 'uses' => 'Forms\Tourism\tourism_conference@show'));

//@Charles
//fetch
Route::get('tourism_earnings/', 'Forms\Tourism\tourism_earnings@index')->name('tourism_tourist_arrivals');

//@Charles
//post to save
Route::post('tourism_earnings/store', array('as' => 'storeTouristEarnings', 'uses' => 'Forms\Tourism\tourism_earnings@store'));

//@Charles
//post to update
Route::post('tourism_earnings/update', array('as' => 'updateTouristEarnings', 'uses' => 'Forms\Tourism\tourism_earnings@update'));

//@Charles
//show a specific id
Route::get('tourism_earnings/approved/{id}', array('as' => 'fetchTouristEarnings', 'uses' => 'Forms\Tourism\tourism_earnings@show'));


//@Charles Ndirangu
//Trade and Commerce Sector
//fetch
Route::get('trade_and_commerce_balance_of_trade/', 'Forms\Trade\trade_and_commerce_balance_of_trade@index')->name('trade_and_commerce_balance_of_trade');

//@Charles
//post to save
Route::post('trade_and_commerce_balance_of_trade/store', array('as' => 'storeTradeAndCommerceBalance', 'uses' => 'Forms\Trade\trade_and_commerce_balance_of_trade@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_balance_of_trade/update', array('as' => 'updateTradeAndCommerceBalance', 'uses' => 'Forms\Trade\trade_and_commerce_balance_of_trade@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_balance_of_trade/approved/{id}', array('as' => 'fetchTradeAndCommerceBalance', 'uses' => 'Forms\Trade\trade_and_commerce_balance_of_trade@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_import_trade_africa_countries/', 'Forms\Trade\trade_and_commerce_import_trade_africa_countries@index')->name('trade_and_commerce_import_trade_africa_countries');

//@Charles
//post to save
Route::post('trade_and_commerce_import_trade_africa_countries/store', array('as' => 'storeTradeAndCommerceImports', 'uses' => 'Forms\Trade\trade_and_commerce_import_trade_africa_countries@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_import_trade_africa_countries/update', array('as' => 'updateTradeAndCommerceImports', 'uses' => 'Forms\Trade\trade_and_commerce_import_trade_africa_countries@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_import_trade_africa_countries/approved/{id}', array('as' => 'fetchTradeAndCommerceImports', 'uses' => 'Forms\Trade\trade_and_commerce_import_trade_africa_countries@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_quantities_of_principle_domestic_exports/', 'Forms\Trade\trade_and_commerce_quantities_principal_domestic_exports@index')->name('trade_and_commerce_quantities_principal_domestic_exports');

//@Charles
//post to save
Route::post('trade_and_commerce_quantities_of_principle_domestic_exports/store', array('as' => 'storeTradeAndCommerceDomesticExport', 'uses' => 'Forms\Trade\trade_and_commerce_quantities_principal_domestic_exports@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_quantities_of_principle_domestic_exports/update', array('as' => 'updateTradeAndCommerceDomesticExport', 'uses' => 'Forms\Trade\trade_and_commerce_quantities_principal_domestic_exports@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_quantities_of_principle_domestic_exports/approved/{id}', array('as' => 'fetchTradeAndCommerceDomesticExport', 'uses' => 'Forms\Trade\trade_and_commerce_quantities_principal_domestic_exports@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_quantities_of_principle_imports/', 'Forms\Trade\trade_and_commerce_quantities_principal_imports@index')->name('trade_and_commerce_quantities_principal_imports');

//@Charles
//post to save
Route::post('trade_and_commerce_quantities_of_principle_imports/store', array('as' => 'storeTradeAndCommercePrincipalImports', 'uses' => 'Forms\Trade\trade_and_commerce_quantities_principal_imports@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_quantities_of_principle_imports/update', array('as' => 'updateTradeAndCommercePrincipalImports', 'uses' => 'Forms\Trade\trade_and_commerce_quantities_principal_imports@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_quantities_of_principle_imports/approved/{id}', array('as' => 'fetchTradeAndCommercePrincipalImports', 'uses' => 'Forms\Trade\trade_and_commerce_quantities_principal_imports@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_value_of_total_exports_all_destinations/', 'Forms\Trade\trade_and_commerce_value_of_total_exports_all_destinations@index')->name('trade_and_commerce_value_of_total_exports_all_destinations');

//@Charles
//post to save
Route::post('trade_and_commerce_value_of_total_exports_all_destinations/store', array('as' => 'storeTradeAndCommerceExportsAllDestinations', 'uses' => 'Forms\Trade\trade_and_commerce_value_of_total_exports_all_destinations@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_value_of_total_exports_all_destinations/update', array('as' => 'updateTradeAndCommerceExportsAllDestinations', 'uses' => 'Forms\Trade\trade_and_commerce_value_of_total_exports_all_destinations@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_value_of_total_exports_all_destinations/approved/{id}', array('as' => 'fetchTradeAndCommerceExportsAllDestinations', 'uses' => 'Forms\Trade\trade_and_commerce_value_of_total_exports_all_destinations@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_value_of_total_exports_european_union/', 'Forms\Trade\trade_and_commerce_value_of_total_exports_european_union@index')->name('trade_and_commerce_value_of_total_exports_european_union');

//@Charles
//post to save
Route::post('trade_and_commerce_value_of_total_exports_european_union/store', array('as' => 'storeTradeAndCommerceEUExports', 'uses' => 'Forms\Trade\trade_and_commerce_value_of_total_exports_european_union@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_value_of_total_exports_european_union/update', array('as' => 'updateTradeAndCommerceEUExports', 'uses' => 'Forms\Trade\trade_and_commerce_value_of_total_exports_european_union@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_value_of_total_exports_european_union/approved/{id}', array('as' => 'fetchTradeAndCommerceEUExports', 'uses' => 'Forms\Trade\trade_and_commerce_value_of_total_exports_european_union@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_value_total_exports_east_africa_communities/', 'Forms\Trade\trade_and_commerce_value_total_exports_east_africa_communities@index')->name('trade_and_commerce_value_total_exports_east_africa_communities');

//@Charles
//post to save
Route::post('trade_and_commerce_value_total_exports_east_africa_communities/store', array('as' => 'storeTradeAndCommerceEACExports', 'uses' => 'Forms\Trade\trade_and_commerce_value_total_exports_east_africa_communities@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_value_total_exports_east_africa_communities/update', array('as' => 'updateTradeAndCommerceEACExports', 'uses' => 'Forms\Trade\trade_and_commerce_value_total_exports_east_africa_communities@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_value_total_exports_east_africa_communities/approved/{id}', array('as' => 'fetchTradeAndCommerceEACExports', 'uses' => 'Forms\Trade\trade_and_commerce_value_total_exports_east_africa_communities@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_values_of_principal_domestic_exports/', 'Forms\Trade\trade_and_commerce_values_of_principal_domestic_exports@index')->name('trade_and_commerce_values_of_principal_domestic_exports');

//@Charles
//post to save
Route::post('trade_and_commerce_values_of_principal_domestic_exports/store', array('as' => 'storeTradeAndCommercePDExports', 'uses' => 'Forms\Trade\trade_and_commerce_values_of_principal_domestic_exports@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_values_of_principal_domestic_exports/update', array('as' => 'updateTradeAndCommercePDExports', 'uses' => 'Forms\Trade\trade_and_commerce_values_of_principal_domestic_exports@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_values_of_principal_domestic_exports/approved/{id}', array('as' => 'fetchTradeAndCommercePDExports', 'uses' => 'Forms\Trade\trade_and_commerce_values_of_principal_domestic_exports@show'));

//@Charles
//fetch
Route::get('trade_and_commerce_values_of_principal_imports/', 'Forms\Trade\trade_and_commerce_values_of_principal_imports@index')->name('trade_and_commerce_values_of_principal_imports');

//@Charles
//post to save
Route::post('trade_and_commerce_values_of_principal_imports/store', array('as' => 'storeTradeAndCommercePImports', 'uses' => 'Forms\Trade\trade_and_commerce_values_of_principal_imports@store'));

//@Charles
//post to update
Route::post('trade_and_commerce_values_of_principal_imports/update', array('as' => 'updateTradeAndCommercePImports', 'uses' => 'Forms\Trade\trade_and_commerce_values_of_principal_imports@update'));

//@Charles
//show a specific id
Route::get('trade_and_commerce_values_of_principal_imports/approved/{id}', array('as' => 'fetchTradeAndCommercePImports', 'uses' => 'Forms\Trade\trade_and_commerce_values_of_principal_imports@show'));



//@Charles Ndirangu
//Population
//@Charles
//fetch
Route::get('population_by_sex_and_age_groups/', 'Forms\Population\population_by_sex_and_age_groups@index')->name('population_by_sex_and_age_groups');

//@Charles
//post to save
Route::post('population_by_sex_and_age_groups/store', array('as' => 'storePopulationBySexAndGroup', 'uses' => 'Forms\Population\population_by_sex_and_age_groups@store'));

//@Charles
//post to update
Route::post('population_by_sex_and_age_groups/update', array('as' => 'updatePopulationBySexAndGroup', 'uses' => 'Forms\Population\population_by_sex_and_age_groups@update'));

//@Charles
//show a specific id
Route::get('population_by_sex_and_age_groups/approved/{id}', array('as' => 'fetchPopulationBySexAndGroup', 'uses' => 'Forms\Population\population_by_sex_and_age_groups@show'));

//@Charles
//fetch
Route::get('population_by_sex_and_school_attendance/', 'Forms\Population\population_by_sex_and_school_attendance@index')->name('population_by_sex_and_school_attendance');

//@Charles
//post to save
Route::post('population_by_sex_and_school_attendance/store', array('as' => 'storePopulationBySexAndAttendance', 'uses' => 'Forms\Population\population_by_sex_and_school_attendance@store'));

//@Charles
//post to update
Route::post('population_by_sex_and_school_attendance/update', array('as' => 'updatePopulationBySexAndAttendance', 'uses' => 'Forms\Population\population_by_sex_and_school_attendance@update'));

//@Charles
//show a specific id
Route::get('population_by_sex_and_school_attendance/approved/{id}', array('as' => 'fetchPopulationBySexAndAttendance', 'uses' => 'Forms\Population\population_by_sex_and_school_attendance@show'));

//@Charles
//fetch
Route::get('population_by_type_of_disability/', 'Forms\Population\population_by_type_of_disability@index')->name('population_by_type_of_disability');

//@Charles
//post to save
Route::post('population_by_type_of_disability/store', array('as' => 'storePopulationByDisabilityType', 'uses' => 'Forms\Population\population_by_type_of_disability@store'));

//@Charles
//post to update
Route::post('population_by_type_of_disability/update', array('as' => 'updatePopulationByDisabilityType', 'uses' => 'Forms\Population\population_by_type_of_disability@update'));

//@Charles
//show a specific id
Route::get('population_by_type_of_disability/approved/{id}', array('as' => 'fetchPopulationByDisabilityType', 'uses' => 'Forms\Population\population_by_type_of_disability@show'));

//@Charles
//fetch
Route::get('population_households_by_main_source_of_water/', 'Forms\Population\population_households_by_main_source_of_water@index')->name('population_households_by_main_source_of_water');

//@Charles
//post to save
Route::post('population_households_by_main_source_of_water/store', array('as' => 'storePopulationByMainWaterSource', 'uses' => 'Forms\Population\population_households_by_main_source_of_water@store'));

//@Charles 
//post to update
Route::post('population_households_by_main_source_of_water/update', array('as' => 'updatePopulationByMainWaterSource', 'uses' => 'Forms\Population\population_households_by_main_source_of_water@update'));

//@Charles
//show a specific id
Route::get('population_households_by_main_source_of_water/approved/{id}', array('as' => 'fetchPopulationByMainWaterSource', 'uses' => 'Forms\Population\population_households_by_main_source_of_water@show'));

//@Charles
//fetch
Route::get('population_households_type_floor_material_main_dwelling_unit/', 'Forms\Population\population_households_type_floor_material_main_dwelling_unit@index')->name('population_households_type_floor_material_main_dwelling_unit');

//@Charles
//post to save
Route::post('population_households_type_floor_material_main_dwelling_unit/store', array('as' => 'storePopulationByMainMaterialDwellingUnit', 'uses' => 'Forms\Population\population_households_type_floor_material_main_dwelling_unit@store'));

//@Charles 
//post to update
Route::post('population_households_type_floor_material_main_dwelling_unit/update', array('as' => 'updatePopulationByMainMaterialDwellingUnit', 'uses' => 'Forms\Population\population_households_type_floor_material_main_dwelling_unit@update'));

//@Charles
//show a specific id
Route::get('population_households_type_floor_material_main_dwelling_unit/approved/{id}', array('as' => 'fetchPopulationByMainMaterialDwellingUnit', 'uses' => 'Forms\Population\population_households_type_floor_material_main_dwelling_unit@show'));

//@Charles
//fetch
Route::get('population_percentage_households_ownership_household_assets/', 'Forms\Population\population_percentage_households_ownership_household_assets@index')->name('population_percentage_households_ownership_household_assets');

//@Charles
//post to save
Route::post('population_percentage_households_ownership_household_assets/store', array('as' => 'storePopulationByHouseholdAsset', 'uses' => 'Forms\Population\population_percentage_households_ownership_household_assets@store'));

//@Charles 
//post to update
Route::post('population_percentage_households_ownership_household_assets/update', array('as' => 'updatePopulationByHouseholdAsset', 'uses' => 'Forms\Population\population_percentage_households_ownership_household_assets@update'));

//@Charles
//show a specific id
Route::get('population_percentage_households_ownership_household_assets/approved/{id}', array('as' => 'fetchPopulationByHouseholdAsset', 'uses' => 'Forms\Population\population_percentage_households_ownership_household_assets@show'));

//@Charles
//fetch
Route::get('population_populationbysexhouseholdsdensityandcensusyears/', 'Forms\Population\population_populationbysexhouseholdsdensityandcensusyears@index')->name('population_populationbysexhouseholdsdensityandcensusyears');

//@Charles
//post to save
Route::post('population_populationbysexhouseholdsdensityandcensusyears/store', array('as' => 'storePopulationByPopDensityCensus', 'uses' => 'Forms\Population\population_populationbysexhouseholdsdensityandcensusyears@store'));

//@Charles 
//post to update
Route::post('population_populationbysexhouseholdsdensityandcensusyears/update', array('as' => 'updatePopulationByPopDensityCensus', 'uses' => 'Forms\Population\population_populationbysexhouseholdsdensityandcensusyears@update'));

//@Charles
//show a specific id
Route::get('population_populationbysexhouseholdsdensityandcensusyears/approved/{id}', array('as' => 'fetchPopulationByPopDensityCensus', 'uses' => 'Forms\Population\population_populationbysexhouseholdsdensityandcensusyears@show'));

//@Charles 
//Energy County Datasets 
 
//@Charles
//fetch
Route::get('energy_averagemonthlypumppricesforfuelbycategory/', 'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@index')->name('energy_averagemonthlypumppricesforfuelbycategory');

//@Charles
//post to save
Route::post('energy_averagemonthlypumppricesforfuelbycategory/store', array('as' => 'storeFuelPrices', 'uses' => 'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@store'));

//@Charles 
//post to update
Route::post('energy_averagemonthlypumppricesforfuelbycategory/update', array('as' => 'updateFuelPrices', 'uses' => 'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@update'));

//@Charles
//show a specific id
Route::get('energy_averagemonthlypumppricesforfuelbycategory/approved/{id}', array('as' => 'fetchFuelPrices', 'uses' => 'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@show'));

//@Charles 
//Political and Administration Datasets 
 
//@Charles
//fetch
Route::get('political_and_administrative_units_administrative_unit/', 'Forms\Administration\administrative_unit@index')->name('administrative_unit');

//@Charles
//post to save
Route::post('political_and_administrative_units_administrative_unit/store', array('as' => 'storeNoOfAdministrativeUnits', 'uses' => 'Forms\Administration\administrative_unit@store'));

//@Charles 
//post to update
Route::post('political_and_administrative_units_administrative_unit/update', array('as' => 'updateNoOfAdministrativeUnits', 'uses' => 'Forms\Administration\administrative_unit@update'));

//@Charles
//show a specific id
Route::get('political_and_administrative_units_administrative_unit/approved/{id}', array('as' => 'fetchNoOfAdministrativeUnits', 'uses' => 'Forms\Administration\administrative_unit@show'));

 
//@Charles
//fetch
Route::get('political_and_administrative_units_political_units/', 'Forms\Administration\political_units@index')->name('political_units');

//@Charles
//post to save
Route::post('political_and_administrative_units_political_units/store', array('as' => 'storeNoOfPoliticalUnitsPerWard', 'uses' => 'Forms\Administration\political_units@store'));

//@Charles 
//post to update
Route::post('political_and_administrative_units_political_units/update', array('as' => 'updateNoOfPoliticalUnitsPerWard', 'uses' => 'Forms\Administration\political_units@update'));

//@Charles
//show a specific id
Route::get('political_and_administrative_units_political_units/approved/{id}', array('as' => 'fetchNoOfPoliticalUnitsPerWard', 'uses' => 'Forms\Administration\political_units@show'));


//@Charles 
//ICT County Datasets 
 
//@Charles
//fetch
Route::get('ict_kihibs_households_owned_ict_equipment_services/', 'Forms\ICT\ict_kihibs_households_owned_ict_equipment_services@index')->name('administrative_unit');

//@Charles
//post to save
Route::post('ict_kihibs_households_owned_ict_equipment_services/store', array('as' => 'storeHouseholdICTItems', 'uses' => 'Forms\ICT\ict_kihibs_households_owned_ict_equipment_services@store'));

//@Charles 
//post to update
Route::post('ict_kihibs_households_owned_ict_equipment_services/update', array('as' => 'updateHouseholdICTItems', 'uses' => 'Forms\ICT\ict_kihibs_households_owned_ict_equipment_services@update'));

//@Charles
//show a specific id
Route::get('ict_kihibs_households_owned_ict_equipment_services/approved/{id}', array('as' => 'fetchHouseholdICTItems', 'uses' => 'Forms\ICT\ict_kihibs_households_owned_ict_equipment_services@show'));

//@Charles
//fetch
Route::get('ict_kihibs_households_with_internet_by_type/', 'Forms\ICT\ict_kihibs_households_with_internet_by_type@index')->name('ict_kihibs_households_with_internet_by_type');

//@Charles
//post to save
Route::post('ict_kihibs_households_with_internet_by_type/store', array('as' => 'storeHouseholdNetType', 'uses' => 'Forms\ICT\ict_kihibs_households_with_internet_by_type@store'));

//@Charles 
//post to update
Route::post('ict_kihibs_households_with_internet_by_type/update', array('as' => 'updateHouseholdNetType', 'uses' => 'Forms\ICT\ict_kihibs_households_with_internet_by_type@update'));

//@Charles
//show a specific id
Route::get('ict_kihibs_households_with_internet_by_type/approved/{id}', array('as' => 'fetchHouseholdNetType', 'uses' => 'Forms\ICT\ict_kihibs_households_with_internet_by_type@show'));

//@Charles
//fetch
Route::get('ict_kihibs_households_with_tv/', 'Forms\ICT\ict_kihibs_households_with_tv@index')->name('ict_kihibs_households_with_tv');

//@Charles
//post to save
Route::post('ict_kihibs_households_with_tv/store', array('as' => 'storeHouseholdTVs', 'uses' => 'Forms\ICT\ict_kihibs_households_with_tv@store'));

//@Charles 
//post to update
Route::post('ict_kihibs_households_with_tv/update', array('as' => 'updateHouseholdTVs', 'uses' => 'Forms\ICT\ict_kihibs_households_with_tv@update'));

//@Charles
//show a specific id
Route::get('ict_kihibs_households_with_tv/approved/{id}', array('as' => 'fetchHouseholdTVs', 'uses' => 'Forms\ICT\ict_kihibs_households_with_tv@show'));

//@Charles
//fetch
Route::get('ict_kihibs_households_without_internet_by_reason/', 'Forms\ICT\ict_kihibs_households_without_internet_by_reason@index')->name('ict_kihibs_households_without_internet_by_reason');

//@Charles
//post to save
Route::post('ict_kihibs_households_without_internet_by_reason/store', array('as' => 'storeHouseholdWithoutNetReasons', 'uses' => 'Forms\ICT\ict_kihibs_households_without_internet_by_reason@store'));

//@Charles 
//post to update
Route::post('ict_kihibs_households_without_internet_by_reason/update', array('as' => 'updateHouseholdWithoutNetReasons', 'uses' => 'Forms\ICT\ict_kihibs_households_without_internet_by_reason@update'));

//@Charles
//show a specific id
Route::get('ict_kihibs_households_without_internet_by_reason/approved/{id}', array('as' => 'fetchHouseholdWithoutNetReasons', 'uses' => 'Forms\ICT\ict_kihibs_households_without_internet_by_reason@show'));
//@Charles
//fetch
Route::get('ict_kihibs_population_above18by_reasonnothaving_phone/', 'Forms\ICT\ict_kihibs_population_above18by_reasonnothaving_phone@index')->name('ict_kihibs_population_above18by_reasonnothaving_phone');

//@Charles
//post to save
Route::post('ict_kihibs_population_above18by_reasonnothaving_phone/store', array('as' => 'storeHouseholdWithoutPhoneReasons', 'uses' => 'Forms\ICT\ict_kihibs_population_above18by_reasonnothaving_phone@store'));

//@Charles 
//post to update
Route::post('ict_kihibs_population_above18by_reasonnothaving_phone/update', array('as' => 'updateHouseholdWithoutPhoneReasons', 'uses' => 'Forms\ICT\ict_kihibs_population_above18by_reasonnothaving_phone@update'));

//@Charles
//show a specific id
Route::get('ict_kihibs_population_above18by_reasonnothaving_phone/approved/{id}', array('as' => 'fetchHouseholdWithoutPhoneReasons', 'uses' => 'Forms\ICT\ict_kihibs_population_above18by_reasonnothaving_phone@show'));

//@Charles
//fetch
Route::get('ict_kihibs_population_above18subscribed_mobilemoney/', 'Forms\ICT\ict_kihibs_population_above18subscribed_mobilemoney@index')->name('ict_kihibs_population_above18subscribed_mobilemoney');

//@Charles
//post to save
Route::post('ict_kihibs_population_above18subscribed_mobilemoney/store', array('as' => 'storePopMobileMoney', 'uses' => 'Forms\ICT\ict_kihibs_population_above18subscribed_mobilemoney@store'));

//@Charles 
//post to update
Route::post('ict_kihibs_population_above18subscribed_mobilemoney/update', array('as' => 'updatePopMobileMoney', 'uses' => 'Forms\ICT\ict_kihibs_population_above18subscribed_mobilemoney@update'));

//@Charles
//show a specific id
Route::get('ict_kihibs_population_above18subscribed_mobilemoney/approved/{id}', array('as' => 'fetchPopMobileMoney', 'uses' => 'Forms\ICT\ict_kihibs_population_above18subscribed_mobilemoney@show'));

//@Charles
//fetch
Route::get('ict_kihibs_population_by_ictequipment_and_servicesused/', 'Forms\ICT\ict_kihibs_population_by_ictequipment_and_servicesused@index')->name('ict_kihibs_population_by_ictequipment_and_servicesused');

//@Charles
//post to save
Route::post('ict_kihibs_population_by_ictequipment_and_servicesused/store', array('as' => 'storePopICTEquip', 'uses' => 'Forms\ICT\ict_kihibs_population_by_ictequipment_and_servicesused@store'));

//@Charles 
//post to update
Route::post('ict_kihibs_population_by_ictequipment_and_servicesused/update', array('as' => 'updatePopICTEquip', 'uses' => 'Forms\ICT\ict_kihibs_population_by_ictequipment_and_servicesused@update'));

//@Charles
//show a specific id
Route::get('ict_kihibs_population_by_ictequipment_and_servicesused/approved/{id}', array('as' => 'fetchPopICTEquip', 'uses' => 'Forms\ICT\ict_kihibs_population_by_ictequipment_and_servicesused@show'));
 
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
// environment `environment_and_natural_resources_average_export_prices_ash` @davidI
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
//housing_conditions_kihibs_pump_taken_to_fetch_drinking_water @fredrick muiruri
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



//@George Muchiri
//fetch
Route::get('governance_cases_forwarded_and_action_taken/', 'Forms\Governance\casesforwardedandactiontaken@index')->name('governance_cases_forwarded_and_action_taken');
//post to save
Route::post('case/store', array('as' => 'storecase', 'uses' => 'Forms\Governance\casesforwardedandactiontaken@store'));
//post to update
Route::post('case/update', array('as' => 'updatecase', 'uses' => 'Forms\Governance\casesforwardedandactiontaken@update'));
//show a specific id
Route::get('case/action/{id}', array('as' => 'fetchcase', 'uses' => 'Forms\Governance\casesforwardedandactiontaken@show'));

//@George Muchiri
//fetch
Route::get('governance_cases_handled_by_ethics_commision/', 'Forms\Governance\caseshandledbyethicscommision@index')->name('governance_cases_handled_by_ethics_commision');
//post to save
Route::post('ecase/store', array('as' => 'storeecase', 'uses' => 'Forms\Governance\caseshandledbyethicscommision@store'));
//post to update
Route::post('ecase/update', array('as' => 'updateecase', 'uses' => 'Forms\Governance\caseshandledbyethicscommision@update'));
//show a specific id
Route::get('ecase/action/{id}', array('as' => 'fetchecase', 'uses' => 'Forms\Governance\caseshandledbyethicscommision@show'));


//@George Muchiri

//fetch
Route::get('governance_cases_handled_by_various_courts/', 'Forms\Governance\caseshandledbyvariouscourts@index')->name('governance_cases_handled_by_various_courts');
//show a specific id
Route::get('court/action/{id}', array('as' => 'fetchCourt', 'uses' => 'Forms\Governance\caseshandledbyvariouscourts@show'));
//post to save
Route::post('court/store', array('as' => 'storeCourt', 'uses' => 'Forms\Governance\caseshandledbyvariouscourts@store'));
//post to update
Route::post('court/update', array('as' => 'updateCourt', 'uses' => 'Forms\Governance\caseshandledbyvariouscourts@update'));


//@George Muchiri

//fetch
Route::get('governance_environmental_crimes_reported_to_nema/', 'Forms\Governance\environmental_crimes_reported_to_nema@index')->name('governance_environmental_crimes_reported_to_nema');
//show a specific id
Route::get('crimes/action/{id}', array('as' => 'fetchcrime', 'uses' => 'Forms\Governance\environmental_crimes_reported_to_nema@show'));
//post to save
Route::post('crimes/store', array('as' => 'storecrime', 'uses' => 'Forms\Governance\environmental_crimes_reported_to_nema@store'));
//post to update
Route::post('crimes/update', array('as' => 'updatecrime', 'uses' => 'Forms\Governance\environmental_crimes_reported_to_nema@update'));



//@George Muchiri

//fetch
Route::get('governance_murder_cases_and_convictions_obtained_by_high_court/', 'Forms\Governance\murder_cases_and_convictions_obtained_by_high_court@index')->name('governance_murder_cases_and_convictions_obtained_by_high_court');
//show a specific id
Route::get('murder/action/{id}', array('as' => 'fetchmurder', 'uses' => 'Forms\Governance\murder_cases_and_convictions_obtained_by_high_court@show'));
//post to save
Route::post('murder/store', array('as' => 'storemurder', 'uses' => 'Forms\Governance\murder_cases_and_convictions_obtained_by_high_court@store'));
//post to update
Route::post('murder/update', array('as' => 'updatemurder', 'uses' => 'Forms\Governance\murder_cases_and_convictions_obtained_by_high_court@update'));

//@George Muchiri

//fetch
Route::get('governance_convicted_prisoners_by_type_of_offence_and_sex/', 'Forms\Governance\convicted_prisoners_by_type_of_offence_and_sex@index')->name('governance_convicted_prisoners_by_type_of_offence_and_sex');
//show a specific id
Route::get('convictions/action/{id}', array('as' => 'fetchconvictions', 'uses' => 'Forms\Governance\convicted_prisoners_by_type_of_offence_and_sex@show'));
//post to save
Route::post('convictions/store', array('as' => 'storeconvictions', 'uses' => 'Forms\Governance\convicted_prisoners_by_type_of_offence_and_sex@store'));
//post to update
Route::post('convictions/update', array('as' => 'updateconvictions', 'uses' => 'Forms\Governance\convicted_prisoners_by_type_of_offence_and_sex@update'));



//@George Muchiri

//fetch
Route::get('governance_convicted_prison_population_by_age_and_sex/', 'Forms\Governance\convicted_prison_population_by_age_and_sex@index')->name('governance_convicted_prison_population_by_age_and_sex');
//show a specific id
Route::get('population/action/{id}', array('as' => 'fetchPopulation', 'uses' => 'Forms\Governance\convicted_prison_population_by_age_and_sex@show'));
//post to save
Route::post('population/store', array('as' => 'storePopulation', 'uses' => 'Forms\Governance\convicted_prison_population_by_age_and_sex@store'));
//post to update
Route::post('population/update', array('as' => 'updatePopulation', 'uses' => 'Forms\Governance\convicted_prison_population_by_age_and_sex@update'));



//@George Muchiri

//fetch
Route::get('governance_daily_average_population_of_prisoners_by_sex/', 'Forms\Governance\daily_average_population_of_prisoners_by_sex@index')->name('governance_daily_average_population_of_prisoners_by_sex');
//show a specific id
Route::get('average/action/{id}', array('as' => 'fetchaverage', 'uses' => 'Forms\Governance\daily_average_population_of_prisoners_by_sex@show'));
//post to save
Route::post('average/store', array('as' => 'storeaverage', 'uses' => 'Forms\Governance\daily_average_population_of_prisoners_by_sex@store'));
//post to update
Route::post('average/update', array('as' => 'updateaverage', 'uses' => 'Forms\Governance\daily_average_population_of_prisoners_by_sex@update'));




//@George Muchiri

//fetch
Route::get('governance_firearms_and_ammunition_recovered_or_surrendered/', 'Forms\Governance\firearms_and_ammunition_recovered_or_surrendered@index')->name('governance_firearms_and_ammunition_recovered_or_surrendered');
//show a specific id
Route::get('ammunition/action/{id}', array('as' => 'fetchammunition', 'uses' => 'Forms\Governance\firearms_and_ammunition_recovered_or_surrendered@show'));
//post to save
Route::post('ammunition/store', array('as' => 'storeammunition', 'uses' => 'Forms\Governance\firearms_and_ammunition_recovered_or_surrendered@store'));
//post to update
Route::post('ammunition/update', array('as' => 'updateammunition', 'uses' => 'Forms\Governance\firearms_and_ammunition_recovered_or_surrendered@update'));



//@George Muchiri

//fetch
Route::get('governance_magistrates_judges_and_practicing_lawyers/', 'Forms\Governance\magistrates_judges_and_practicing_lawyers@index')->name('governance_magistrates_judges_and_practicing_lawyers');
//show a specific id
Route::get('lawyers/action/{id}', array('as' => 'fetchlawyers', 'uses' => 'Forms\Governance\magistrates_judges_and_practicing_lawyers@show'));
//post to save
Route::post('lawyers/store', array('as' => 'storelawyers', 'uses' => 'Forms\Governance\magistrates_judges_and_practicing_lawyers@store'));
//post to update
Route::post('lawyers/update', array('as' => 'updatelawyers', 'uses' => 'Forms\Governance\magistrates_judges_and_practicing_lawyers@update'));




//@George Muchiri

//fetch
Route::get('governance_number_of_police_prisons_and_probation_officers/', 'Forms\Governance\number_of_police_prisons_and_probation_officers@index')->name('governance_number_of_police_prisons_and_probation_officers');
//show a specific id
Route::get('officers/action/{id}', array('as' => 'fetchofficers', 'uses' => 'Forms\Governance\number_of_police_prisons_and_probation_officers@show'));
//post to save
Route::post('officers/store', array('as' => 'storeofficers', 'uses' => 'Forms\Governance\number_of_police_prisons_and_probation_officers@store'));
//post to update
Route::post('officers/update', array('as' => 'updateofficers', 'uses' => 'Forms\Governance\number_of_police_prisons_and_probation_officers@update'));




//@George Muchiri

//fetch
Route::get('governance_number_of_refugees_by_age_and_sex/', 'Forms\Governance\number_of_refugees_by_age_and_sex@index')->name('governance_number_of_refugees_by_age_and_sex');
//show a specific id
Route::get('refugees/action/{id}', array('as' => 'fetchRefugees', 'uses' => 'Forms\Governance\number_of_refugees_by_age_and_sex@show'));
//post to save
Route::post('refugees/store', array('as' => 'storeRefugees', 'uses' => 'Forms\Governance\number_of_refugees_by_age_and_sex@store'));
//post to update
Route::post('refugees/update', array('as' => 'updateRefugees', 'uses' => 'Forms\Governance\number_of_refugees_by_age_and_sex@update'));


//@George Muchiri

//fetch
Route::get('governance_offenders_serving/', 'Forms\Governance\offenders_serving@index')->name('governance_offenders_serving');
//show a specific id
Route::get('offenders/action/{id}', array('as' => 'fetchoffenders', 'uses' => 'Forms\Governance\offenders_serving@show'));
//post to save
Route::post('offenders/store', array('as' => 'storeoffenders', 'uses' => 'Forms\Governance\offenders_serving@store'));
//post to update
Route::post('offenders/update', array('as' => 'updateoffenders', 'uses' => 'Forms\Governance\offenders_serving@update'));

//@George Muchiri

//fetch
Route::get('governance_passports_work_permits_and_foreigners_registered/', 'Forms\Governance\passports_work_permits_and_foreigners_registered@index')->name('governance_passports_work_permits_and_foreigners_registered');
//show a specific id
Route::get('passports/action/{id}', array('as' => 'fetchpassports', 'uses' => 'Forms\Governance\passports_work_permits_and_foreigners_registered@show'));
//post to save
Route::post('passports/store', array('as' => 'storepassports', 'uses' => 'Forms\Governance\passports_work_permits_and_foreigners_registered@store'));
//post to update
Route::post('passports/update', array('as' => 'updatepassports', 'uses' => 'Forms\Governance\passports_work_permits_and_foreigners_registered@update'));



//@George Muchiri

//fetch
Route::get('governance_persons_reported_committed_offences_related_to_drugs/', 'Forms\Governance\persons_reported_committed_offences_related_to_drugs@index')->name('governance_persons_reported_committed_offences_related_to_drugs');
//show a specific id
Route::get('persons/action/{id}', array('as' => 'fetchpersons', 'uses' => 'Forms\Governance\persons_reported_committed_offences_related_to_drugs@show'));
//post to save
Route::post('persons/store', array('as' => 'storepersons', 'uses' => 'Forms\Governance\persons_reported_committed_offences_related_to_drugs@store'));
//post to update
Route::post('persons/update', array('as' => 'updatepersons', 'uses' => 'Forms\Governance\persons_reported_committed_offences_related_to_drugs@update'));




//@George Muchiri

//fetch
Route::get('governance_persons_reported_to_have_committed_homicide_by_sex/', 'Forms\Governance\persons_reported_to_have_committed_homicide_by_sex@index')->name('governance_persons_reported_to_have_committed_homicide_by_sex');
//show a specific id
Route::get('persons/action/{id}', array('as' => 'fetchpersons', 'uses' => 'Forms\Governance\persons_reported_to_have_committed_homicide_by_sex@show'));
//post to save
Route::post('persons/store', array('as' => 'storepersons', 'uses' => 'Forms\Governance\persons_reported_to_have_committed_homicide_by_sex@store'));
//post to update
Route::post('persons/update', array('as' => 'updatepersons', 'uses' => 'Forms\Governance\persons_reported_to_have_committed_homicide_by_sex@update'));


//@George Muchiri

//fetch
Route::get('governance_persons_reported_to_have_committed_robbery_and_theft/', 'Forms\Governance\persons_reported_to_have_committed_robbery_and_theft@index')->name('governance_persons_reported_to_have_committed_robbery_and_theft');
//show a specific id
Route::get('persons/action/{id}', array('as' => 'fetchpersons', 'uses' => 'Forms\Governance\persons_reported_to_have_committed_robbery_and_theft@show'));
//post to save
Route::post('persons/store', array('as' => 'storepersons', 'uses' => 'Forms\Governance\persons_reported_to_have_committed_robbery_and_theft@store'));
//post to update
Route::post('persons/update', array('as' => 'updatepersons', 'uses' => 'Forms\Governance\persons_reported_to_have_committed_robbery_and_theft@update'));



//@George Muchiri

//fetch
Route::get('governance_prison_population_by_sentence_duration_and_sex/', 'Forms\Governance\prison_population_by_sentence_duration_and_sex@index')->name('governance_prison_population_by_sentence_duration_and_sex');
//show a specific id
Route::get('prisons/action/{id}', array('as' => 'fetchprisons', 'uses' => 'Forms\Governance\prison_population_by_sentence_duration_and_sex@show'));
//post to save
Route::post('prisons/store', array('as' => 'storeprisons', 'uses' => 'Forms\Governance\prison_population_by_sentence_duration_and_sex@store'));
//post to update
Route::post('prisons/update', array('as' => 'updateprisons', 'uses' => 'Forms\Governance\prison_population_by_sentence_duration_and_sex@update'));


//@George Muchiri

//fetch
Route::get('governance_experienceof_domestic_violence_by_age/', 'Forms\Governance\experienceof_domestic_violence_by_age@index')->name('governance_experienceof_domestic_violence_by_age');
//show a specific id
Route::get('domestic/action/{id}', array('as' => 'fetchdomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_age@show'));
//post to save
Route::post('domestic/store', array('as' => 'storedomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_age@store'));
//post to update
Route::post('domestic/update', array('as' => 'updatedomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_age@update'));


//@George Muchiri

//fetch
Route::get('governance_experienceof_domestic_violence_by_marital_success/', 'Forms\Governance\experienceof_domestic_violence_by_marital_success@index')->name('governance_experienceof_domestic_violence_by_marital_success');
//show a specific id
Route::get('domestic/action/{id}', array('as' => 'fetchdomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_marital_success@show'));
//post to save
Route::post('domestic/store', array('as' => 'storedomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_marital_success@store'));
//post to update
Route::post('domestic/update', array('as' => 'updatedomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_marital_success@update'));


//@George Muchiri

//fetch
Route::get('governance_experienceof_domestic_violence_by_residence/', 'Forms\Governance\experienceof_domestic_violence_by_residence@index')->name('governance_experienceof_domestic_violence_by_residence');
//show a specific id
Route::get('domestic/action/{id}', array('as' => 'fetchdomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_residence@show'));
//post to save
Route::post('domestic/store', array('as' => 'storedomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_residence@store'));
//post to update
Route::post('domestic/update', array('as' => 'updatedomestic', 'uses' => 'Forms\Governance\experienceof_domestic_violence_by_residence@update'));


//@George Muchiri

//fetch
Route::get('governance_members_of_nationalassembly_and_senators/', 'Forms\Governance\members_of_nationalassembly_and_senators@index')->name('governance_members_of_nationalassembly_and_senators');
//show a specific id
Route::get('members/action/{id}', array('as' => 'fetchmembers', 'uses' => 'Forms\Governance\members_of_nationalassembly_and_senators@show'));
//post to save
Route::post('members/store', array('as' => 'storemembers', 'uses' => 'Forms\Governance\members_of_nationalassembly_and_senators@store'));
//post to update
Route::post('members/update', array('as' => 'updatemembers', 'uses' => 'Forms\Governance\members_of_nationalassembly_and_senators@update'));




//@George Muchiri

//fetch
Route::get('governance_persons_reported_tohave_committed_defilement/', 'Forms\Governance\persons_reported_tohave_committed_defilement@index')->name('governance_persons_reported_tohave_committed_defilement');
//show a specific id
Route::get('persons/action/{id}', array('as' => 'fetchpersons', 'uses' => 'Forms\Governance\persons_reported_tohave_committed_defilement@show'));
//post to save
Route::post('persons/store', array('as' => 'storepersons', 'uses' => 'Forms\Governance\persons_reported_tohave_committed_defilement@store'));
//post to update
Route::post('persons/update', array('as' => 'updatepersons', 'uses' => 'Forms\Governance\persons_reported_tohave_committed_defilement@update'));


//@George Muchiri

//fetch
Route::get('governance_persons_reported_tohave_committed_rape/', 'Forms\Governance\persons_reported_tohave_committed_rape@index')->name('governance_persons_reported_tohave_committed_rape');
//show a specific id
Route::get('persons/action/{id}', array('as' => 'fetchpersons', 'uses' => 'Forms\Governance\persons_reported_tohave_committed_rape@show'));
//post to save
Route::post('persons/store', array('as' => 'storepersons', 'uses' => 'Forms\Governance\persons_reported_tohave_committed_rape@store'));
//post to update
Route::post('persons/update', array('as' => 'updatepersons', 'uses' => 'Forms\Governance\persons_reported_tohave_committed_rape@update'));

//@George Muchiri

//fetch
Route::get('governance_total_prisoners_committed_for_debt_bysex/', 'Forms\Governance\total_prisoners_committed_for_debt_bysex@index')->name('governance_total_prisoners_committed_for_debt_bysex');
//show a specific id
Route::get('persons/action/{id}', array('as' => 'fetchpersons', 'uses' => 'Forms\Governance\total_prisoners_committed_for_debt_bysex@show'));
//post to save
Route::post('persons/store', array('as' => 'storepersons', 'uses' => 'Forms\Governance\total_prisoners_committed_for_debt_bysex@store'));
//post to update
Route::post('persons/update', array('as' => 'updatepersons', 'uses' => 'Forms\Governance\total_prisoners_committed_for_debt_bysex@update'));

//@George Muchiri

//fetch
Route::get('governance_prevalence_female_circumcision_and_type/', 'Forms\Governance\prevalence_female_circumcision_and_type@index')->name('governance_prevalence_female_circumcision_and_type');
//show a specific id
Route::get('female/action/{id}', array('as' => 'fetchfemale', 'uses' => 'Forms\Governance\prevalence_female_circumcision_and_type@show'));
//post to save
Route::post('female/store', array('as' => 'storefemale', 'uses' => 'Forms\Governance\prevalence_female_circumcision_and_type@store'));
//post to update
Route::post('female/update', array('as' => 'updatefemale', 'uses' => 'Forms\Governance\prevalence_female_circumcision_and_type@update'));


//@George Muchiri

//fetch
Route::get('governance_public_assets_traced_recovered_and_loss_averted/', 'Forms\Governance\public_assets_traced_recovered_and_loss_averted@index')->name('governance_public_assets_traced_recovered_and_loss_averted');
//show a specific id
Route::get('public/action/{id}', array('as' => 'fetchpublic', 'uses' => 'Forms\Governance\public_assets_traced_recovered_and_loss_averted@show'));
//post to save
Route::post('public/store', array('as' => 'storepublic', 'uses' => 'Forms\Governance\public_assets_traced_recovered_and_loss_averted@store'));
//post to update
Route::post('public/update', array('as' => 'updatepublic', 'uses' => 'Forms\Governance\public_assets_traced_recovered_and_loss_averted@update'));



//@George Muchiri

//fetch
Route::get('governance_crimes_reported_to_police_by_command_stations/', 'Forms\Governance\crimes_reported_to_police_by_command_stations@index')->name('governance_crimes_reported_to_police_by_command_stations');
//show a specific id
Route::get('public/action/{id}', array('as' => 'fetchpublic', 'uses' => 'Forms\Governance\crimes_reported_to_police_by_command_stations@show'));
//post to save
Route::post('public/store', array('as' => 'storepublic', 'uses' => 'Forms\Governance\crimes_reported_to_police_by_command_stations@store'));
//post to update
Route::post('public/update', array('as' => 'updatepublic', 'uses' => 'Forms\Governance\crimes_reported_to_police_by_command_stations@update'));




//@George Muchiri

//fetch
Route::get('governance_crimes_reported_to_police_by_command_stations/', 'Forms\Governance\crimes_reported_to_police_by_command_stations@index')->name('governance_crimes_reported_to_police_by_command_stations');
//show a specific id
Route::get('public/action/{id}', array('as' => 'fetchpublic', 'uses' => 'Forms\Governance\crimes_reported_to_police_by_command_stations@show'));
//post to save
Route::post('public/store', array('as' => 'storepublic', 'uses' => 'Forms\Governance\crimes_reported_to_police_by_command_stations@store'));
//post to update
Route::post('public/update', array('as' => 'updatepublic', 'uses' => 'Forms\Governance\crimes_reported_to_police_by_command_stations@update'));

//@George Muchiri

//fetch
Route::get('finance_economic_classification_revenue/', 'Forms\Finance\ClassifficationOfRevenue@index')->name('finance_economic_classification_revenue');
//show a specific id
Route::get('revenue/action/{id}', array('as' => 'fetchRevenue', 'uses' => 'Forms\Finance\ClassifficationOfRevenue@show'));
//post to save
Route::post('revenue/store', array('as' => 'storeRevenue', 'uses' => 'Forms\Finance\ClassifficationOfRevenue@store'));
//post to update
Route::post('revenue/update', array('as' => 'updateRevenue', 'uses' => 'Forms\Finance\ClassifficationOfRevenue@update'));


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


//@George Muchiri

//fetch
Route::get('finance_excise_revenue_commodity/', 'Forms\Finance\finance_excise_revenue_commodity@index')->name('finance_excise_revenue_commodity');
//show a specific id
Route::get('commodity/action/{id}', array('as' => 'fetchCommodity', 'uses' => 'Forms\Finance\finance_excise_revenue_commodity@show'));
//post to save
Route::post('commodity/store', array('as' => 'storeCommodity', 'uses' => 'Forms\Finance\finance_excise_revenue_commodity@store'));
//post to update
Route::post('commodity/update', array('as' => 'updateCommodity', 'uses' => 'Forms\Finance\finance_excise_revenue_commodity@update'));


//@George Muchiri


//fetch
Route::get('finance_national_government_expenditure/', 'Forms\Finance\finance_national_government_expenditure@index')->name('finance_national_government_expenditure');
//show a specific id
Route::get('expenditure/action/{id}', array('as' => 'fetchExpenditure', 'uses' => 'Forms\Finance\finance_national_government_expenditure@show'));
//post to save
Route::post('expenditure/store', array('as' => 'storeExpenditure', 'uses' => 'Forms\Finance\finance_national_government_expenditure@store'));
//post to update
Route::post('expenditure/update', array('as' => 'updateExpenditure', 'uses' => 'Forms\Finance\finance_national_government_expenditure@update'));



//@George Muchiri

//fetch
Route::get('finance_statement_of_national_government_operations/', 'Forms\Finance\finance_statement_of_national_government_operations@index')->name('finance_statement_of_national_government_operations');
//show a specific id
Route::get('operations/action/{id}', array('as' => 'fetchOperations', 'uses' => 'Forms\Finance\finance_statement_of_national_government_operations@show'));
//post to save
Route::post('operations/store', array('as' => 'storeOperations', 'uses' => 'Forms\Finance\finance_statement_of_national_government_operations@store'));
//post to update
Route::post('operations/update', array('as' => 'updateOperations', 'uses' => 'Forms\Finance\finance_statement_of_national_government_operations@update'));

//@George Muchiri

//fetch
Route::get('finance_national_government_expenditure_purpose/', 'Forms\Finance\finance_national_government_expenditure_purpose@index')->name('finance_national_government_expenditure_purpose');
//show a specific id
Route::get('purpose/action/{id}', array('as' => 'fetchPurpose', 'uses' => 'Forms\Finance\finance_national_government_expenditure_purpose@show'));
//post to save
Route::post('purpose/store', array('as' => 'storePurpose', 'uses' => 'Forms\Finance\finance_national_government_expenditure_purpose@store'));
//post to update
Route::post('purpose/update', array('as' => 'updatePurpose', 'uses' => 'Forms\Finance\finance_national_government_expenditure_purpose@update'));


//@George Muchiri

//fetch
Route::get('finance_outstanding_debt_international_organization/', 'Forms\Finance\finance_outstanding_debt_international_organization@index')->name('finance_outstanding_debt_international_organization');
//show a specific id
Route::get('debt/action/{id}', array('as' => 'fetchDebt', 'uses' => 'Forms\Finance\finance_outstanding_debt_international_organization@show'));
//post to save
Route::post('debt/store', array('as' => 'storeDebt', 'uses' => 'Forms\Finance\finance_outstanding_debt_international_organization@store'));
//post to update
Route::post('debt/update', array('as' => 'updateDebt', 'uses' => 'Forms\Finance\finance_outstanding_debt_international_organization@update'));

//@George Muchiri

//fetch
Route::get('finance_outstanding_debt_lending_country/', 'Forms\Finance\finance_outstanding_debt_lending_country@index')->name('finance_outstanding_debt_lending_country');
//show a specific id
Route::get('country/action/{id}', array('as' => 'fetchCountry', 'uses' => 'Forms\Finance\finance_outstanding_debt_lending_country@show'));
//post to save
Route::post('country/store', array('as' => 'storeCountry', 'uses' => 'Forms\Finance\finance_outstanding_debt_lending_country@store'));
//post to update
Route::post('country/update', array('as' => 'updateCountry', 'uses' => 'Forms\Finance\finance_outstanding_debt_lending_country@update'));

//@George Muchiri

//fetch
Route::get('agriculture_chemical_med_feed_input/', 'Forms\Agriculture\agriculture_chemical_med_feed_input@index')->name('agriculture_chemical_med_feed_input');
//show a specific id
Route::get('chemical/action/{id}', array('as' => 'fetchChemical', 'uses' => 'Forms\Agriculture\agriculture_chemical_med_feed_input@show'));
//post to save
Route::post('chemical/store', array('as' => 'storeChemical', 'uses' => 'Forms\Agriculture\agriculture_chemical_med_feed_input@store'));
//post to update
Route::post('chemical/update', array('as' => 'updateChemical', 'uses' => 'Forms\Agriculture\agriculture_chemical_med_feed_input@update'));

//@George Muchiri

//fetch
Route::get('
agriculture_cooperatives/', 'Forms\Agriculture\agriculture_cooperatives@index')->name('agriculture_cooperatives');
//show a specific id
Route::get('cooperatives/action/{id}', array('as' => 'fetchCooperatives', 'uses' => 'Forms\Agriculture\agriculture_cooperatives@show'));
//post to save
Route::post('cooperatives/store', array('as' => 'storeCooperatives', 'uses' => 'Forms\Agriculture\agriculture_cooperatives@store'));
//post to update
Route::post('cooperatives/update', array('as' => 'updateCooperatives', 'uses' => 'Forms\Agriculture\agriculture_cooperatives@update'));


//@George Muchiri

//fetch
Route::get('
agriculture_valueofagriculturalinputs/', 'Forms\Agriculture\agriculture_valueofagriculturalinputs@index')->name('agriculture_valueofagriculturalinputs');
//show a specific id
Route::get('inputs/action/{id}', array('as' => 'fetchInputs', 'uses' => 'Forms\Agriculture\agriculture_valueofagriculturalinputs@show'));
//post to save
Route::post('inputs/store', array('as' => 'storeInputs', 'uses' => 'Forms\Agriculture\agriculture_valueofagriculturalinputs@store'));
//post to update
Route::post('inputs/update', array('as' => 'updateInputs', 'uses' => 'Forms\Agriculture\agriculture_valueofagriculturalinputs@update'));



//@George Muchiri

//fetch
Route::get('
agriculture_gross_market_production/', 'Forms\Agriculture\agriculture_gross_market_production@index')->name('agriculture_gross_market_production');
//show a specific id
Route::get('gross/action/{id}', array('as' => 'fetchGross', 'uses' => 'Forms\Agriculture\agriculture_gross_market_production@show'));
//post to save
Route::post('gross/store', array('as' => 'storeGross', 'uses' => 'Forms\Agriculture\agriculture_gross_market_production@store'));
//post to update
Route::post('gross/update', array('as' => 'updateGross', 'uses' => 'Forms\Agriculture\agriculture_gross_market_production@update'));



//@George Muchiri

//fetch
Route::get('
agriculture_irrigation_schemes/', 'Forms\Agriculture\agriculture_irrigation_schemes@index')->name('agriculture_irrigation_schemes');
//show a specific id
Route::get('irrigation/action/{id}', array('as' => 'fetchIrrigation', 'uses' => 'Forms\Agriculture\agriculture_irrigation_schemes@show'));
//post to save
Route::post('irrigation/store', array('as' => 'storeIrrigation', 'uses' => 'Forms\Agriculture\agriculture_irrigation_schemes@store'));
//post to update
Route::post('irrigation/update', array('as' => 'updateIrrigation', 'uses' => 'Forms\Agriculture\agriculture_irrigation_schemes@update'));





//@George Muchiri
 Route::get('land_and_climate_rainfall/', 'Forms\Environment\land_and_climate_rainfall@index')->name('land_and_climate_rainfall');
   Route::get('climate/fetch/{id}', array('as' => 'fetchClimate', 'uses' => 'Forms\Environment\land_and_climate_rainfall@show'));
    Route::get('climate/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' => 'Forms\Environment\land_and_climate_rainfall@get_subcounties'));
Route::post('climate/store', array('as' => 'storeClimate', 'uses' => 'Forms\Environment\land_and_climate_rainfall@store'));
Route::post('climate/update', array('as' => 'updateClimate', 'uses' => 'Forms\Environment\land_and_climate_rainfall@update'));





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

//@George Muchiri
 Route::get('land_and_climate_surface_area_by_category/', 'Forms\Environment\land_and_climate_surface_area_by_category@index')->name('land_and_climate_surface_area_by_category');
   Route::get('category/fetch/{id}', array('as' => 'fetchCategory', 'uses' => 'Forms\Environment\land_and_climate_surface_area_by_category@show'));
Route::get('category/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Environment\land_and_climate_surface_area_by_category@get_subcounties'));
Route::post('category/store', array('as' => 'storeCategory', 'uses' => 'Forms\Environment\land_and_climate_surface_area_by_category@store'));
Route::post('category/update', array('as' => 'updateCategory', 'uses' => 'Forms\Environment\land_and_climate_surface_area_by_category@update'));



//@George Muchiri
 Route::get('land_and_climate_temperature/', 'Forms\Environment\land_and_climate_temperature@index')->name('land_and_climate_temperature');
   Route::get('temp/fetch/{id}', array('as' => 'fetchTemp', 'uses' => 'Forms\Environment\land_and_climate_temperature@show'));
Route::get('temp/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Environment\land_and_climate_temperature@get_subcounties'));
Route::post('temp/store', array('as' => 'storeTemp', 'uses' => 'Forms\Environment\land_and_climate_temperature@store'));
Route::post('temp/update', array('as' => 'updateTemp', 'uses' => 'Forms\Environment\land_and_climate_temperature@update'));

//@George Muchiri
 Route::get('land_and_climate_topography_altitude/', 'Forms\Environment\land_and_climate_topography_altitude@index')->name('land_and_climate_topography_altitude');
   Route::get('topography/fetch/{id}', array('as' => 'fetchTopography', 'uses' => 'Forms\Environment\land_and_climate_topography_altitude@show'));
Route::get('topography/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Environment\land_and_climate_topography_altitude@get_subcounties'));
Route::post('topography/store', array('as' => 'storeTopography', 'uses' => 'Forms\Environment\land_and_climate_topography_altitude@store'));
Route::post('topography/update', array('as' => 'updateTopography', 'uses' => 'Forms\Environment\land_and_climate_topography_altitude@update'));




//@George Muchiri
 Route::get('housing_conditions_kihibs_hholds_by_habitable_rooms/', 'Forms\Housing\housing_conditions_kihibs_hholds_by_habitable_rooms@index')->name('housing_conditions_kihibs_hholds_by_habitable_rooms');
   Route::get('rooms/fetch/{id}', array('as' => 'fetchRooms', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_habitable_rooms@show'));
Route::get('rooms/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_hholds_by_habitable_rooms@get_subcounties'));
Route::post('rooms/store', array('as' => 'storeRooms', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_habitable_rooms@store'));
Route::post('rooms/update', array('as' => 'updateRooms', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_habitable_rooms@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_hholds_by_housing_tenure/', 'Forms\Housing\housing_conditions_kihibs_hholds_by_housing_tenure@index')->name('housing_conditions_kihibs_hholds_by_housing_tenure');
   Route::get('tenure/fetch/{id}', array('as' => 'fetchTenure', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_housing_tenure@show'));
Route::get('tenure/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_hholds_by_housing_tenure@get_subcounties'));
Route::post('tenure/store', array('as' => 'storeTenure', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_housing_tenure@store'));
Route::post('tenure/update', array('as' => 'updateTenure', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_housing_tenure@update'));



//@George Muchiri
 Route::get('housing_conditions_kihibs_hholds_by_type_of_housing_unit/', 'Forms\Housing\housing_conditions_kihibs_hholds_by_type_of_housing_unit@index')->name('housing_conditions_kihibs_hholds_by_type_of_housing_unit');
   Route::get('unit/fetch/{id}', array('as' => 'fetchUnit', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_type_of_housing_unit@show'));
Route::get('unit/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_hholds_by_type_of_housing_unit@get_subcounties'));
Route::post('unit/store', array('as' => 'storeUnit', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_type_of_housing_unit@store'));
Route::post('unit/update', array('as' => 'updateUnit', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_by_type_of_housing_unit@update'));



//@George Muchiri
 Route::get('housing_conditions_kihibs_hholds_in_rented_dwellings/', 'Forms\Housing\housing_conditions_kihibs_hholds_in_rented_dwellings@index')->name('housing_conditions_kihibs_hholds_in_rented_dwellings');
   Route::get('dwelling/fetch/{id}', array('as' => 'fetchDwelling', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_in_rented_dwellings@show'));
Route::get('dwelling/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_hholds_in_rented_dwellings@get_subcounties'));
Route::post('dwelling/store', array('as' => 'storeDwelling', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_in_rented_dwellings@store'));
Route::post('dwelling/update', array('as' => 'updateDwelling', 'uses' => 'Forms\Housing\housing_conditions_kihibs_hholds_in_rented_dwellings@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_main_floor_material/', 'Forms\Housing\housing_conditions_kihibs_main_floor_material@index')->name('housing_conditions_kihibs_main_floor_material');
   Route::get('floor/fetch/{id}', array('as' => 'fetchFloor', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_floor_material@show'));
Route::get('floor/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_main_floor_material@get_subcounties'));
Route::post('floor/store', array('as' => 'storeFloor', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_floor_material@store'));
Route::post('floor/update', array('as' => 'updateFloor', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_floor_material@update'));




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

//@George Muchiri
 Route::get('housing_conditions_kihibs_main_roofing_material/', 'Forms\Housing\housing_conditions_kihibs_main_roofing_material@index')->name('housing_conditions_kihibs_main_roofing_material');
   Route::get('roof/fetch/{id}', array('as' => 'fetchRoof', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_roofing_material@show'));
Route::get('roof/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_main_roofing_material@get_subcounties'));
Route::post('roof/store', array('as' => 'storeRoof', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_roofing_material@store'));
Route::post('roof/update', array('as' => 'updateRoof', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_roofing_material@update'));




//@George Muchiri
 Route::get('housing_conditions_kihibs_main_source_of_cooking_fuel/', 'Forms\Housing\housing_conditions_kihibs_main_source_of_cooking_fuel@index')->name('housing_conditions_kihibs_main_source_of_cooking_fuel');
   Route::get('fuel/fetch/{id}', array('as' => 'fetchFuel', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_cooking_fuel@show'));
Route::get('fuel/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_main_source_of_cooking_fuel@get_subcounties'));
Route::post('fuel/store', array('as' => 'storeFuel', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_cooking_fuel@store'));
Route::post('fuel/update', array('as' => 'updateFuel', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_cooking_fuel@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_main_source_of_drinking_water/', 'Forms\Housing\housing_conditions_kihibs_main_source_of_drinking_water@index')->name('housing_conditions_kihibs_main_source_of_drinking_water');
   Route::get('water/fetch/{id}', array('as' => 'fetchWater', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_drinking_water@show'));
Route::get('water/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_main_source_of_drinking_water@get_subcounties'));
Route::post('water/store', array('as' => 'storeWater', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_drinking_water@store'));
Route::post('water/update', array('as' => 'updateWater', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_drinking_water@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_main_source_of_lighting_fuel/', 'Forms\Housing\housing_conditions_kihibs_main_source_of_lighting_fuel@index')->name('housing_conditions_kihibs_main_source_of_lighting_fuel');
   Route::get('lighting/fetch/{id}', array('as' => 'fetchLighting', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_lighting_fuel@show'));
Route::get('lighting/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_main_source_of_lighting_fuel@get_subcounties'));
Route::post('lighting/store', array('as' => 'storeLighting', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_lighting_fuel@store'));
Route::post('lighting/update', array('as' => 'updateLighting', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_source_of_lighting_fuel@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_main_toilet_facility/', 'Forms\Housing\housing_conditions_kihibs_main_toilet_facility@index')->name('housing_conditions_kihibs_main_toilet_facility');
   Route::get('toilet/fetch/{id}', array('as' => 'fetchToilet', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_toilet_facility@show'));
Route::get('toilet/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_main_toilet_facility@get_subcounties'));
Route::post('toilet/store', array('as' => 'storeToilet', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_toilet_facility@store'));
Route::post('toilet/update', array('as' => 'updateToilet', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_toilet_facility@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_main_wall_material/', 'Forms\Housing\housing_conditions_kihibs_main_wall_material@index')->name('housing_conditions_kihibs_main_wall_material');
   Route::get('wall/fetch/{id}', array('as' => 'fetchWall', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_wall_material@show'));
Route::get('wall/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_main_wall_material@get_subcounties'));
Route::post('wall/store', array('as' => 'storeWall', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_wall_material@store'));
Route::post('wall/update', array('as' => 'updateWall', 'uses' => 'Forms\Housing\housing_conditions_kihibs_main_wall_material@update'));

//@George Muchiri
 Route::get('housing_conditions_kihibs_methods_used_to_make_water_safer/', 'Forms\Housing\housing_conditions_kihibs_methods_used_to_make_water_safer@index')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');
   Route::get('safe/fetch/{id}', array('as' => 'fetchSafe', 'uses' => 'Forms\Housing\housing_conditions_kihibs_methods_used_to_make_water_safer@show'));
Route::get('safe/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_methods_used_to_make_water_safer@get_subcounties'));
Route::post('safe/store', array('as' => 'storeSafe', 'uses' => 'Forms\Housing\housing_conditions_kihibs_methods_used_to_make_water_safer@store'));
Route::post('safe/update', array('as' => 'updateSafe', 'uses' => 'Forms\Housing\housing_conditions_kihibs_methods_used_to_make_water_safer@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_owner_occupier_dwellings/', 'Forms\Housing\housing_conditions_kihibs_owner_occupier_dwellings@index')->name('housing_conditions_kihibs_owner_occupier_dwellings');
   Route::get('occupier/fetch/{id}', array('as' => 'fetchOccupier', 'uses' => 'Forms\Housing\housing_conditions_kihibs_owner_occupier_dwellings@show'));
Route::get('occupier/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_owner_occupier_dwellings@get_subcounties'));
Route::post('occupier/store', array('as' => 'storeOccupier', 'uses' => 'Forms\Housing\housing_conditions_kihibs_owner_occupier_dwellings@store'));
Route::post('occupier/update', array('as' => 'updateOccupier', 'uses' => 'Forms\Housing\housing_conditions_kihibs_owner_occupier_dwellings@update'));


//@George Muchiri
 Route::get('housing_conditions_kihibs_place_for_washing_hands_near_toilet/', 'Forms\Housing\housing_conditions_kihibs_place_for_washing_hands_near_toilet@index')->name('housing_conditions_kihibs_place_for_washing_hands_near_toilet');
   Route::get('place/fetch/{id}', array('as' => 'fetchPlace', 'uses' => 'Forms\Housing\housing_conditions_kihibs_place_for_washing_hands_near_toilet@show'));
Route::get('place/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_place_for_washing_hands_near_toilet@get_subcounties'));
Route::post('place/store', array('as' => 'storePlace', 'uses' => 'Forms\Housing\housing_conditions_kihibs_place_for_washing_hands_near_toilet@store'));
Route::post('place/update', array('as' => 'updatePlace', 'uses' => 'Forms\Housing\housing_conditions_kihibs_place_for_washing_hands_near_toilet@update'));

//@George Muchiri
 Route::get('housing_conditions_kihibs_primary_type_of_cooking_appliance/', 'Forms\Housing\housing_conditions_kihibs_primary_type_of_cooking_appliance@index')->name('housing_conditions_kihibs_primary_type_of_cooking_appliance');
   Route::get('cooking/fetch/{id}', array('as' => 'fetchCooking', 'uses' => 'Forms\Housing\housing_conditions_kihibs_primary_type_of_cooking_appliance@show'));
Route::get('cooking/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_primary_type_of_cooking_appliance@get_subcounties'));
Route::post('cooking/store', array('as' => 'storeCooking', 'uses' => 'Forms\Housing\housing_conditions_kihibs_primary_type_of_cooking_appliance@store'));
Route::post('cooking/update', array('as' => 'updateCooking', 'uses' => 'Forms\Housing\housing_conditions_kihibs_primary_type_of_cooking_appliance@update'));


//@George Muchiri
Route::get('housing_conditions_kihibs_sharing_of_toilet_facility/', 
  'Forms\Housing\housing_conditions_kihibs_sharing_of_toilet_facility@index')->name('
housing_conditions_kihibs_sharing_of_toilet_facility');
   
   Route::get('toilet/fetch/{id}', array('as' => 'fetchToilet', 'uses' => 
    'Forms\Housing\housing_conditions_kihibs_sharing_of_toilet_facility@show'));
Route::get('toilet/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_sharing_of_toilet_facility@get_subcounties'));
Route::post('toilet/store', array('as' => 'storeToilet', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_sharing_of_toilet_facility@store'));
Route::post('toilet/update', array('as' => 'updateToilet', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_sharing_of_toilet_facility@update'));



Route::get('Housing/housing_conditions_kihibs_methods_used_to_make_water_safer', 'Endpoints\Housing@housing_conditions_kihibs_methods_used_to_make_water_safer')->name('housing_conditions_kihibs_methods_used_to_make_water_safer');


//@George Muchiri
Route::get('housing_conditions_kihibs_time_taken_to_fetch_drinking_water/', 
  'Forms\Housing\housing_conditions_kihibs_time_taken_to_fetch_drinking_water@index')->name('
housing_conditions_kihibs_time_taken_to_fetch_drinking_water');
   
   Route::get('time/fetch/{id}', array('as' => 'fetchTime', 'uses' => 
    'Forms\Housing\housing_conditions_kihibs_time_taken_to_fetch_drinking_water@show'));
Route::get('time/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_time_taken_to_fetch_drinking_water@get_subcounties'));
Route::post('time/store', array('as' => 'storeTime', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_time_taken_to_fetch_drinking_water@store'));
Route::post('time/update', array('as' => 'updateTime', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_time_taken_to_fetch_drinking_water@update'));




//@George Muchiri
Route::get('housing_conditions_kihibs_volume_of_water_used/', 
  'Forms\Housing\housing_conditions_kihibs_volume_of_water_used@index')->name('
housing_conditions_kihibs_volume_of_water_used');
   
   Route::get('time/fetch/{id}', array('as' => 'fetchVolume', 'uses' => 
    'Forms\Housing\housing_conditions_kihibs_volume_of_water_used@show'));
Route::get('volume/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_volume_of_water_used@get_subcounties'));
Route::post('volume/store', array('as' => 'storeVolume', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_volume_of_water_used@store'));
Route::post('volume/update', array('as' => 'updateVolume', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_volume_of_water_used@update'));


//@George Muchiri
Route::get('
housing_conditions_kihibs_waste_disposal_method/', 
  'Forms\Housing\housing_conditions_kihibs_waste_disposal_method@index')->name('housing_conditions_kihibs_waste_disposal_method');
   
   Route::get('time/fetch/{id}', array('as' => 'fetchWaste', 'uses' => 
    'Forms\Housing\housing_conditions_kihibs_waste_disposal_method@show'));
Route::get('waste/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Housing\housing_conditions_kihibs_waste_disposal_method@get_subcounties'));
Route::post('waste/store', array('as' => 'storeWaste', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_waste_disposal_method@store'));
Route::post('waste/update', array('as' => 'updateWaste', 'uses' => 
  'Forms\Housing\housing_conditions_kihibs_waste_disposal_method@update'));




//@George Muchiri

//fetch
Route::get('energy_average_retail_prices_of_selected_petroleum_products/', 
  'Forms\Energy\energy_average_retail_prices_of_selected_petroleum_products@index')->name(
    'energy_average_retail_prices_of_selected_petroleum_products');
//show a specific id
Route::get('retail/action/{id}', array('as' => 'fetchRetail', 'uses' => 
  'Forms\Energy\energy_average_retail_prices_of_selected_petroleum_products@show'));
//post to save
Route::post('retail/store', array('as' => 'storeRetail', 'uses' => 'Forms\Energy\energy_average_retail_prices_of_selected_petroleum_products@store'));
//post to update
Route::post('retail/update', array('as' => 'updateRetail', 'uses' => 'Forms\Energy\energy_average_retail_prices_of_selected_petroleum_products@update'));


//@George Muchiri

//fetch
Route::get('energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category/', 
  'Forms\Energy\energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category@index')->name(
    'energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category');
//show a specific id
Route::get('sales/action/{id}', array('as' => 'fetchSales', 'uses' => 
  'Forms\Energy\energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category@show'));
//post to save
Route::post('sales/store', array('as' => 'storeSales', 'uses' => 'Forms\Energy\energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category@store'));
//post to update
Route::post('sales/update', array('as' => 'updateSales', 'uses' => 'Forms\Energy\energy_net_domestic_sale_of_petroleum_fuels_by_consumer_category@update'));


//@George Muchiri

//fetch
Route::get('energy_electricity_demand_and_supply/', 
  'Forms\Energy\energy_electricity_demand_and_supply@index')->name(
    'energy_electricity_demand_and_supply');
//show a specific id
Route::get('demand/action/{id}', array('as' => 'fetchDemand', 'uses' => 
  'Forms\Energy\energy_electricity_demand_and_supply@show'));
//post to save
Route::post('demand/store', array('as' => 'storeDemand', 'uses' => 'Forms\Energy\energy_electricity_demand_and_supply@store'));
//post to update
Route::post('demand/update', array('as' => 'updateDemand', 'uses' => 'Forms\Energy\energy_electricity_demand_and_supply@update'));



//@George Muchiri

//fetch
Route::get('energy_generation_and_imports_of_electricity/', 
  'Forms\Energy\energy_generation_and_imports_of_electricity@index')->name(
    'energy_generation_and_imports_of_electricity');
//show a specific id
Route::get('import/action/{id}', array('as' => 'fetchImport', 'uses' => 
  'Forms\Energy\energy_generation_and_imports_of_electricity@show'));
//post to save
Route::post('import/store', array('as' => 'storeImport', 'uses' => 'Forms\Energy\energy_generation_and_imports_of_electricity@store'));
//post to update
Route::post('import/update', array('as' => 'updateImport', 'uses' => 'Forms\Energy\energy_generation_and_imports_of_electricity@update'));

//@George Muchiri

//fetch
Route::get('energy_installed_and_effective_capacity_of_electricity/', 
  'Forms\Energy\energy_installed_and_effective_capacity_of_electricity@index')->name(
    'energy_installed_and_effective_capacity_of_electricity');
//show a specific id
Route::get('installed/action/{id}', array('as' => 'fetchInstalled', 'uses' => 
  'Forms\Energy\energy_installed_and_effective_capacity_of_electricity@show'));
//post to save
Route::post('installed/store', array('as' => 'storeInstalled', 'uses' => 'Forms\Energy\energy_installed_and_effective_capacity_of_electricity@store'));
//post to update
Route::post('installed/update', array('as' => 'updateInstalled', 'uses' => 'Forms\Energy\energy_installed_and_effective_capacity_of_electricity@update'));



//@George Muchiri

//fetch
Route::get('energy_petroleum_supply_and_demand/', 
  'Forms\Energy\energy_petroleum_supply_and_demand@index')->name('energy_petroleum_supply_and_demand');
//show a specific id
Route::get('supply/action/{id}', array('as' => 'fetchSupply', 'uses' => 
  'Forms\Energy\energy_petroleum_supply_and_demand@show'));
//post to save
Route::post('supply/store', array('as' => 'storeSupply', 'uses' => 'Forms\Energy\energy_petroleum_supply_and_demand@store'));
//post to update
Route::post('supply/update', array('as' => 'updateSupply', 'uses' => 'Forms\Energy\energy_petroleum_supply_and_demand@update'));



//@George Muchiri


// @George Muchiri
// housing_conditions_kihibs_main_wall_material
Route::get('Housing/housing_conditions_kihibs_main_wall_material', 

	'Endpoints\Housing@get_housing_conditions_kihibs_main_wall_material')->name(
	'housing_conditions_kihibs_main_wall_material');



//@david

//feetch
Route::get('environment_and_natural_resources_average_export_prices_ash/', 'Forms\Environment\environment_and_natural_resources_average_export_prices_ash@index')->name('environment_and_natural_resources_average_export_prices_ash
');
//post to save
Route::post('environment/store', array('as' => 'storeenvironment', 'uses' => 'Forms\Environment\environment_and_natural_resources_average_export_prices_ash@store'));
//post to update
Route::post('environment/update', array('as' => 'updateenvironment', 'uses' => 'Forms\Environment\environment_and_natural_resources_average_export_prices_ash@update'));


//show a specific id
Route::get('environment/action/{id}', array('as' => 'fetchenvironment', 'uses' => 'Forms\Environment\environment_and_natural_resources_average_export_prices_ash@show'));




//@david

//feetch
Route::get('environment_and_natural_resources_development_expenditure_water/', 'Forms\Environment\environment_and_natural_resources_development_expenditure_water@index')->name('environment_and_natural_resources_development_expenditure_water');
//post to save
Route::post('water/store', array('as' => 'storewater', 'uses' => 'Forms\Environment\environment_and_natural_resources_development_expenditure_water@store'));
//post to update
Route::post('water/update', array('as' => 'updatewater', 'uses' => 'Forms\Environment\environment_and_natural_resources_development_expenditure_water@update'));


//show a specific id
Route::get('water/action/{id}', array('as' => 'fetchwater', 'uses' => 'Forms\Environment\environment_and_natural_resources_development_expenditure_water@show'));


//@david

//feetch
Route::get('environment_and_natural_resources_expenditure_cleaning_refuse/', 'Forms\Environment\environment_and_natural_resources_expenditure_cleaning_refuse@index')->name('environment_and_natural_resources_expenditure_cleaning_refuse');
//post to save
Route::post('refuse/store', array('as' => 'storerefuse', 'uses' => 'Forms\Environment\environment_and_natural_resources_expenditure_cleaning_refuse@store'));
//post to update
Route::post('refuse/update', array('as' => 'updaterefuse', 'uses' => 'Forms\Environment\environment_and_natural_resources_expenditure_cleaning_refuse@update'));


//show a specific id
Route::get('refuse/action/{id}', array('as' => 'fetchrefuse', 'uses' => 'Forms\Environment\environment_and_natural_resources_expenditure_cleaning_refuse@show'));


//@david

//feetch
Route::get('environment_and_natural_resources_government_forest/', 'Forms\Environment\environment_and_natural_resources_government_forest@index')->name('environment_and_natural_resources_government_forest');
//post to save
Route::post('forest/store', array('as' => 'storeforest', 'uses' => 'Forms\Environment\environment_and_natural_resources_government_forest@store'));
//post to update
Route::post('forest/update', array('as' => 'updateforest', 'uses' => 'Forms\Environment\environment_and_natural_resources_government_forest@update'));


//show a specific id
Route::get('forest/action/{id}', array('as' => 'fetchforest', 'uses' => 'Forms\Environment\environment_and_natural_resources_government_forest@show'));



//@david

//feetch
Route::get('environment_and_natural_resources_num_high_risk_environ_impact/', 'Forms\Environment\environment_and_natural_resources_num_high_risk_environ_impact@index')->name('environment_and_natural_resources_num_high_risk_environ_impact');
//post to save
Route::post('impact/store', array('as' => 'storeimpact', 'uses' => 'Forms\Environment\environment_and_natural_resources_num_high_risk_environ_impact@store'));
//post to update
Route::post('impact/update', array('as' => 'updateimpact', 'uses' => 'Forms\Environment\environment_and_natural_resources_num_high_risk_environ_impact@update'));


//show a specific id
Route::get('impact/action/{id}', array('as' => 'fetchimpact', 'uses' => 'Forms\Environment\environment_and_natural_resources_num_high_risk_environ_impact@show'));






//@david

//feetch
Route::get('environment_and_natural_resources_population_wildlife/', 'Forms\Environment\environment_and_natural_resources_population_wildlife@index')->name('environment_and_natural_resources_population_wildlife');
//post to save
Route::post('wildlife/store', array('as' => 'storewildlife', 'uses' => 'Forms\Environment\environment_and_natural_resources_population_wildlife@store'));
//post to update
Route::post('wildlife/update', array('as' => 'updatewildlife', 'uses' => 'Forms\Environment\environment_and_natural_resources_population_wildlife@update'));


//show a specific id
Route::get('wildlife/action/{id}', array('as' => 'fetchwildlife', 'uses' => 'Forms\Environment\environment_and_natural_resources_population_wildlife@show'));



//@david

//feetch
Route::get('environment_and_natural_resources_quantity_of_total_mineral/', 'Forms\Environment\environment_and_natural_resources_quantity_of_total_mineral@index')->name('environment_and_natural_resources_quantity_of_total_mineral');
//post to save
Route::post('mineral/store', array('as' => 'storemineral', 'uses' => 'Forms\Environment\environment_and_natural_resources_quantity_of_total_mineral@store'));
//post to update
Route::post('mineral/update', array('as' => 'updatemineral', 'uses' => 'Forms\Environment\environment_and_natural_resources_quantity_of_total_mineral@update'));


//show a specific id
Route::get('mineral/action/{id}', array('as' => 'fetchmineral', 'uses' => 'Forms\Environment\environment_and_natural_resources_quantity_of_total_mineral@show'));



//@david

//feetch
Route::get('environment_and_natural_resources_quantity_value_fish_landed/', 'Forms\Environment\environment_and_natural_resources_quantity_value_fish_landed@index')->name('environment_and_natural_resources_quantity_value_fish_landed');
//post to save
Route::post('landed/store', array('as' => 'storelanded', 'uses' => 'Forms\Environment\environment_and_natural_resources_quantity_value_fish_landed@store'));
//post to update
Route::post('landed/update', array('as' => 'updatelanded', 'uses' => 'Forms\Environment\environment_and_natural_resources_quantity_value_fish_landed@update'));


//show a specific id
Route::get('landed/action/{id}', array('as' => 'fetchlanded', 'uses' => 'Forms\Environment\environment_and_natural_resources_quantity_value_fish_landed@show'));




//@david

//feetch
Route::get('environment_and_natural_resources_record_sale_goverment_products/', 'Forms\Environment\environment_and_natural_resources_record_sale_goverment_products@index')->name('environment_and_natural_resources_record_sale_goverment_products');
//post to save
Route::post('products/store', array('as' => 'storeproducts', 'uses' => 'Forms\Environment\environment_and_natural_resources_record_sale_goverment_products@store'));
//post to update
Route::post('products/update', array('as' => 'updateproducts', 'uses' => 'Forms\Environment\environment_and_natural_resources_record_sale_goverment_products@update'));


//show a specific id
Route::get('products/action/{id}', array('as' => 'fetchproducts', 'uses' => 'Forms\Environment\environment_and_natural_resources_record_sale_goverment_products@show'));



//@david

//feetch
Route::get('environment_and_natural_resources_trends_envi_natural_resources/', 'Forms\Environment\environment_and_natural_resources_trends_envi_natural_resources@index')->name('environment_and_natural_resources_trends_envi_natural_resources');
//post to save
Route::post('resources/store', array('as' => 'storeresources', 'uses' => 'Forms\Environment\environment_and_natural_resources_trends_envi_natural_resources@store'));
//post to update
Route::post('resources/update', array('as' => 'updateresources', 'uses' => 'Forms\Environment\environment_and_natural_resources_trends_envi_natural_resources@update'));


//show a specific id
Route::get('resources/action/{id}', array('as' => 'fetchresources', 'uses' => 'Forms\Environment\environment_and_natural_resources_trends_envi_natural_resources@show'));




//@david

//feetch
Route::get('environment_and_natural_resources_value_of_total_mineral/', 'Forms\Environment\environment_and_natural_resources_value_of_total_mineral@index')->name(' environment_and_natural_resources_value_of_total_mineral');
//post to save
Route::post('totalmineral/store', array('as' => 'storetotalmineral', 'uses' => 'Forms\Environment\environment_and_natural_resources_value_of_total_mineral@store'));
//post to update
Route::post('totalmineral/update', array('as' => 'updatetotalmineral', 'uses' => 'Forms\Environment\environment_and_natural_resources_value_of_total_mineral@update'));


//show a specific id
Route::get('totalmineral/action/{id}', array('as' => 'fetchtotalmineral', 'uses' => 'Forms\Environment\environment_and_natural_resources_value_of_total_mineral@show'));





//@david

//feetch
Route::get('environment_and_natural_resources_water_purification_points/', 'Forms\Environment\environment_and_natural_resources_water_purification_points@index')->name('environment_and_natural_resources_water_purification_points');
//post to save
Route::post('points/store', array('as' => 'storepoints', 'uses' => 'Forms\Environment\environment_and_natural_resources_water_purification_points@store'));
//post to update
Route::post('points/update', array('as' => 'updatepoints', 'uses' => 'Forms\Environment\environment_and_natural_resources_water_purification_points@update'));


//show a specific id
Route::get('points/action/{id}', array('as' => 'fetchpoints', 'uses' => 'Forms\Environment\environment_and_natural_resources_water_purification_points@show'));



//@david

//feetch
Route::get('governance_environmental_crimes_reported_to_nema/', 'Forms\Environment\governance_environmental_crimes_reported_to_nema@index')->name('governance_environmental_crimes_reported_to_nema');
//post to save
Route::post('nema/store', array('as' => 'storenema', 'uses' => 'Forms\Environment\governance_environmental_crimes_reported_to_nema@store'));
//post to update
Route::post('nema/update', array('as' => 'updatenema', 'uses' => 'Forms\Environment\governance_environmental_crimes_reported_to_nema@update'));


//show a specific id
Route::get('nema/action/{id}', array('as' => 'fetchnema', 'uses' => 'Forms\Environment\governance_environmental_crimes_reported_to_nema@show'));





//@david

//feetch
Route::get('land_and_climate_environment_impact_assessments_by_sector/', 'Forms\Environment\land_and_climate_environment_impact_assessments_by_sector@index')->name('land_and_climate_environment_impact_assessments_by_sector');
//post to save
Route::post('sector/store', array('as' => 'storesector', 'uses' => 'Forms\Environment\land_and_climate_environment_impact_assessments_by_sector@store'));
//post to update
Route::post('sector/update', array('as' => 'updatesector', 'uses' => 'Forms\Environment\land_and_climate_environment_impact_assessments_by_sector@update'));


//show a specific id
Route::get('sector/action/{id}', array('as' => 'fetchsector', 'uses' => 'Forms\Environment\land_and_climate_environment_impact_assessments_by_sector@show'));



//@david

//feetch
Route::get('land_and_climate_trends_in_environment_and_natural_resources/', 'Forms\Environment\land_and_climate_trends_in_environment_and_natural_resources@index')->name('land_and_climate_trends_in_environment_and_natural_resources');
//post to save
Route::post('resources/store', array('as' => 'storeresources', 'uses' => 'Forms\Environment\land_and_climate_trends_in_environment_and_natural_resources@store'));
//post to update
Route::post('resources/update', array('as' => 'updateresources', 'uses' => 'Forms\Environment\land_and_climate_trends_in_environment_and_natural_resources@update'));


//show a specific id
Route::get('resources/action/{id}', array('as' => 'fetchresources', 'uses' => 'Forms\Environment\land_and_climate_trends_in_environment_and_natural_resources@show'));

//fetch
Route::get('energy_value_and_quantity_of_imports_exports/', 
  'Forms\Energy\energy_value_and_quantity_of_imports_exports@index')->name('energy_value_and_quantity_of_imports_exports');
//show a specific id
Route::get('value/action/{id}', array('as' => 'fetchValue', 'uses' => 
  'Forms\Energy\energy_value_and_quantity_of_imports_exports@show'));
//post to save
Route::post('value/store', array('as' => 'storeValue', 'uses' => 'Forms\Energy\energy_value_and_quantity_of_imports_exports@store'));
//post to update
Route::post('value/update', array('as' => 'updateValue', 'uses' => 'Forms\Energy\energy_value_and_quantity_of_imports_exports@update'));



//@George Muchiri
Route::get('
energy_averagemonthlypumppricesforfuelbycategory/', 
  'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@index')->name('energy_averagemonthlypumppricesforfuelbycategory');
   
   Route::get('pump/fetch/{id}', array('as' => 'fetchPump', 'uses' => 
    'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@show'));
Route::get('pump/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@get_subcounties'));
Route::post('pump/store', array('as' => 'storePump', 'uses' => 
  'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@store'));
Route::post('pump/update', array('as' => 'updatePump', 'uses' => 
  'Forms\Energy\energy_averagemonthlypumppricesforfuelbycategory@update'));

//@George Muchiri
Route::get('vital_statistics_births_and_deaths_by_sex/', 
  'Forms\Population\vital_statistics_births_and_deaths_by_sex@index')->name('vital_statistics_births_and_deaths_by_sex');
   
   Route::get('vital/fetch/{id}', array('as' => 'fetchVital', 'uses' => 
    'Forms\Population\vital_statistics_births_and_deaths_by_sex@show'));
Route::get('vital/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>
 'Forms\Population\vital_statistics_births_and_deaths_by_sex@get_subcounties'));
Route::post('vital/store', array('as' => 'storeVital', 'uses' => 
  'Forms\Population\vital_statistics_births_and_deaths_by_sex@store'));
Route::post('vital/update', array('as' => 'updateVital', 'uses' => 
  'Forms\Population\vital_statistics_births_and_deaths_by_sex@update'));



//@George Muchiri
Route::get('vital_statistics_top_ten_death_causes/', 
  'Forms\Population\vital_statistics_top_ten_death_causes@index')->name('vital_statistics_top_ten_death_causes');
   
   Route::get('death/fetch/{id}', array('as' => 'fetchDeath', 'uses' => 'Forms\Population\vital_statistics_top_ten_death_causes@show'));
Route::get('death/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>'Forms\Population\vital_statistics_top_ten_death_causes@get_subcounties'));
Route::post('death/store', array('as' => 'storeDeath', 'uses' => 
  'Forms\Population\vital_statistics_top_ten_death_causes@store'));
Route::post('death/update', array('as' => 'updateDeath', 'uses' => 
  'Forms\Population\vital_statistics_top_ten_death_causes@update'));


//@George Muchiri
Route::get('population_populationprojectionsbyselectedagegroup/', 
  'Forms\Population\population_populationprojectionsbyselectedagegroup@index')->name('population_populationprojectionsbyselectedagegroup');
   
   Route::get('death/fetch/{id}', array('as' => 'fetchSelect', 'uses' => 'Forms\Population\population_populationprojectionsbyselectedagegroup@show'));
Route::get('select/fetchcounties/{id}', array('as' => 'fetchCounties', 'uses' =>'Forms\Population\population_populationprojectionsbyselectedagegroup@get_subcounties'));
Route::post('select/store', array('as' => 'storeSelect', 'uses' => 
  'Forms\Population\population_populationprojectionsbyselectedagegroup@store'));
Route::post('select/update', array('as' => 'updateSelect', 'uses' => 
  'Forms\Population\population_populationprojectionsbyselectedagegroup@update'));






//@david

//feetch
Route::get('education_studentenrollmentpublicuniversities
/', 'Forms\Education\education_studentenrollmentpublicuniversities@index')->name('education_studentenrollmentpublicuniversities');
//post to save
Route::post('universities/store', array('as' => 'storeuniversities', 'uses' => 'Forms\Education\education_studentenrollmentpublicuniversities@store'));
//post to update
Route::post('universities/update', array('as' => 'updateuniversities', 'uses' => 'Forms\Education\education_studentenrollmentpublicuniversities@update'));


//show a specific id
Route::get('universities/action/{id}', array('as' => 'fetchuniversities', 'uses' => 'Forms\Education\education_studentenrollmentpublicuniversities@show'));


//david
//feetch
Route::get('education_studentenrollmentbysextechnicalinstitutions/', 'Forms\Education\education_studentenrollmentbysextechnicalinstitutions@index')->name('education_studentenrollmentbysextechnicalinstitutions');
//post to save
Route::post('institutions/store', array('as' => 'storeinstitutions', 'uses' => 'Forms\Education\education_studentenrollmentbysextechnicalinstitutions@store'));
//post to update
Route::post('institutions/update', array('as' => 'updateinstitutions', 'uses' => 'Forms\Education\education_studentenrollmentbysextechnicalinstitutions@update'));


//show a specific id
Route::get('institutions/action/{id}', array('as' => 'fetchinstitutions', 'uses' => 'Forms\Education\education_studentenrollmentbysextechnicalinstitutions@show'));




//david
//feetch
Route::get('education_edstat_kcpe_examination_candidature/', 'Forms\Education\education_edstat_kcpe_examination_candidature@index')->name('education_edstat_kcpe_examination_candidature');
//post to save
Route::post('institutions/store', array('as' => 'storecandidature', 'uses' => 'Forms\Education\education_edstat_kcpe_examination_candidature@store'));
//post to update
Route::post('institutions/update', array('as' => 'updatecandidature', 'uses' => 'Forms\Education\education_edstat_kcpe_examination_candidature@update'));


//show a specific id
Route::get('institutions/action/{id}', array('as' => 'fetchcandidature', 'uses' => 'Forms\Education\education_edstat_kcpe_examination_candidature@show'));





//david
//feetch
Route::get('education_edstat_kcpe_examination_results_by_subject/', 'Forms\Education\education_edstat_kcpe_examination_results_by_subject@index')->name('education_edstat_kcpe_examination_results_by_subject');
//post to save
Route::post('subject/store', array('as' => 'storesubject', 'uses' => 'Forms\Education\education_edstat_kcpe_examination_results_by_subject@store'));
//post to update
Route::post('subject/update', array('as' => 'updatesubject', 'uses' => 'Forms\Education\education_edstat_kcpe_examination_results_by_subject@update'));


//show a specific id
Route::get('subject/action/{id}', array('as' => 'fetchsubject', 'uses' => 'Forms\Education\education_edstat_kcpe_examination_results_by_subject@show'));




//david
//feetch
Route::get('education_edstat_kcse_examination_results/', 'Forms\Education\education_edstat_kcse_examination_results@index')->name('education_edstat_kcse_examination_results');
//post to save
Route::post('results/store', array('as' => 'storeresults', 'uses' => 'Forms\Education\education_edstat_kcse_examination_results@store'));
//post to update
Route::post('results/update', array('as' => 'updateresults', 'uses' => 'Forms\Education\education_edstat_kcse_examination_results@update'));


//show a specific id
Route::get('results/action/{id}', array('as' => 'fetchresults', 'uses' => 'Forms\Education\education_edstat_kcse_examination_results@show'));



//david
//feetch
Route::get('education_number_of_candidates_by_sex_in_kcse/', 'Forms\Education\education_number_of_candidates_by_sex_in_kcse@index')->name('education_number_of_candidates_by_sex_in_kcse');
//post to save
Route::post('kcse/store', array('as' => 'storekcse', 'uses' => 'Forms\Education\education_number_of_candidates_by_sex_in_kcse@store'));
//post to update
Route::post('kcse/update', array('as' => 'updatekcse', 'uses' => 'Forms\Education\education_number_of_candidates_by_sex_in_kcse@update'));


//show a specific id
Route::get('kcse/action/{id}', array('as' => 'fetchkcse', 'uses' => 'Forms\Education\education_number_of_candidates_by_sex_in_kcse@show'));



//david
//feetch
Route::get('education_primary_school_enrolments_by_sex/', 'Forms\Education\education_primary_school_enrolments_by_sex@index')->name('education_primary_school_enrolments_by_sex');
//post to save
Route::post('sex/store', array('as' => 'storesex', 'uses' => 'Forms\Education\education_primary_school_enrolments_by_sex@store'));
//post to update
Route::post('sex/update', array('as' => 'updatesex', 'uses' => 'Forms\Education\education_primary_school_enrolments_by_sex@update'));


//show a specific id
Route::get('sex/action/{id}', array('as' => 'fetchsex', 'uses' => 'Forms\Education\education_primary_school_enrolments_by_sex@show'));


//david
//feetch
Route::get('education_public_primary_school_teachers_by_sex/', 'Forms\Education\education_public_primary_school_teachers_by_sex@index')->name('education_public_primary_school_teachers_by_sex');
//post to save
Route::post('teachers/store', array('as' => 'storeteachers', 'uses' => 'Forms\Education\education_public_primary_school_teachers_by_sex@store'));
//post to update
Route::post('teachers/update', array('as' => 'updateteachers', 'uses' => 'Forms\Education\education_public_primary_school_teachers_by_sex@update'));


//show a specific id
Route::get('teachers/action/{id}', array('as' => 'fetchteachers', 'uses' => 'Forms\Education\education_public_primary_school_teachers_by_sex@show'));




//david
//feetch
Route::get('education_public_primaryteachers_trainingcollege_enrolment/', 'Forms\Education\education_public_primaryteachers_trainingcollege_enrolment@index')->name('education_public_primaryteachers_trainingcollege_enrolment');
//post to save
Route::post('enrolment/store', array('as' => 'storeenrolment', 'uses' => 'Forms\Education\education_public_primaryteachers_trainingcollege_enrolment@store'));
//post to update
Route::post('enrolment/update', array('as' => 'updateenrolment', 'uses' => 'Forms\Education\education_public_primaryteachers_trainingcollege_enrolment@update'));


//show a specific id
Route::get('enrolment/action/{id}', array('as' => 'fetchenrolment', 'uses' => 'Forms\Education\education_public_primaryteachers_trainingcollege_enrolment@show'));



//david
//feetch
Route::get('education_public_secondary_school_teachers_by_sex/', 'Forms\Education\education_public_secondary_school_teachers_by_sex@index')->name('education_public_secondary_school_teachers_by_sex');
//post to save
Route::post('secondary/store', array('as' => 'storesecondary', 'uses' => 'Forms\Education\education_public_secondary_school_teachers_by_sex@store'));
//post to update
Route::post('secondary/update', array('as' => 'updatesecondary', 'uses' => 'Forms\Education\education_public_secondary_school_teachers_by_sex@update'));


//show a specific id
Route::get('secondary/action/{id}', array('as' => 'fetchsecondary', 'uses' => 'Forms\Education\education_public_secondary_school_teachers_by_sex@show'));




//david
//feetch
Route::get('education_secondary_school_enrolment_by_sex/', 'Forms\Education\education_secondary_school_enrolment_by_sex@index')->name('education_secondary_school_enrolment_by_sex');
//post to save
Route::post('sexsecondary/store', array('as' => 'storesexsecondary', 'uses' => 'Forms\Education\education_secondary_school_enrolment_by_sex@store'));
//post to update
Route::post('sexsecondary/update', array('as' => 'updatesexsecondary', 'uses' => 'Forms\Education\education_secondary_school_enrolment_by_sex@update'));


//show a specific id
Route::get('sexsecondary/action/{id}', array('as' => 'fetchsexsecondary', 'uses' => 'Forms\Education\education_secondary_school_enrolment_by_sex@show'));


