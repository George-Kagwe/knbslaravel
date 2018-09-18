<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_distribution_sex_number_households_area_density_model extends Model
{
    //@Charles Ndirangu
    //Household population by sex households area density model
    protected $primaryKey = "distribution_id";
    protected $table = "population_distribution_sex_number_households_area_density";
    protected $fillable = [
            'county_id',
    		'area_in_square_km',
            'county_name',
    		'female',
    		'male',
            'no_of_houseHolds',
    		'total_population',
    		'density',
    		
    ];
}
