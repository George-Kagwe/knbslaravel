<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model; 


//@Charles Ndirangu 
//Population projections by special age group model
class population_populationprojectionsbyspecialagegroups_model extends Model
{
    protected $primaryKey = "selected_age_group_id";
    protected $table = "population_populationprojectionsbyspecialagegroups";
    protected $fillable = [
    		                  'county_id',
                          'under_1',
                          'range_1_2',
                          'range_3_5',
                          'range_6_13',
                          'range_14_17',
                          'range_18_24',
                          'range_18_34',
                          'range_less_18',
                          'range_18_plus',
                          'range_15_49',
                          'range_15_64',
                          'range_65_plus',
                          'gender',
                          'year',

    ];
}
