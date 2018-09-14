<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class environment_and_natural_resources_development_expenditure_water_model extends Model
{
    //

    protected $primaryKey = 'development_id';
    protected $table ='environment_and_natural_resources_development_expenditure_water';

    protected $fillable =['water_development',
                          'training_of_water_development_staff',
                          'rural_water_supplies',
                          'miscellaneous_and_special_water_programmes',
                          'national_water_conservation_and_pipeline_corporation',
                          'irrigation_development',
                          'national_irrigation_board',
                                                  
                          'year'
                         ];
}
