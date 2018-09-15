<?php

namespace App\Models\Poverty;

use Illuminate\Database\Eloquent\Model;

class poverty_hardcore_estimates_by_residence_and_county_model extends Model
{
     //@Charles Ndirangu
    //Poverty hardcore estimate by county and residence Model
    protected $primaryKey = "poverty_id";
    protected $table = "poverty_hardcore_estimates_by_residence_and_county";
    protected $fillable = [
    		'county_id',
    		'headcount_rate',
    		'distribution_of_the_poor',
    		'poverty_gap',
            'severity_of_poverty',
            'population',
            'number_of_poor',
             
    ]; 
}
