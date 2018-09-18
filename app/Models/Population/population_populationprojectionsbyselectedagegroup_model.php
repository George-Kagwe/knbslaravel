<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model; 


//@Charles Ndirangu 
//Population projections by selected age group model
class population_populationprojectionsbyselectedagegroup_model extends Model
{
    protected $primaryKey = "population_projection_id";
    protected $table = "population_populationprojectionsbyselectedagegroup";
    protected $fillable = [
    		                  'county_id',
                          'range_0_4',
                          'range_5_9',
                          'range_10_14',
                          'range_15_19',
                          'range_20_24',
                          'range_25_29',
                          'range_30_34',
                          'range_35_39',
                          'range_40_44',
                          'range_45_49',
                          'range_50_54',
                          'range_55_59',
                          'range_60_64',
                          'range_65_69',
                          'range_70_74',
                          'range_75_79',
                          'range_80_plus',
                          'gender',
                          'year',

    ];
}
