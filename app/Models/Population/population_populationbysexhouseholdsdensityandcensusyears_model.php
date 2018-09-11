<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_populationbysexhouseholdsdensityandcensusyears_model extends Model
{
    //@Charles Ndirangu
    //Household population by sex households density and census year model
    protected $primaryKey = "census_population_id";
    protected $table = "population_populationbysexhouseholdsdensityandcensusyears";
    protected $fillable = [
    		'male',
    		'female',
    		'total',
    		'av_hh_size',
    		'approx_area',
    		'density',
    		'census_year'
    ];
}
