<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_population_proportion_that_took_trip_model extends Model
{
    //@Charles Ndirangu
    //Tourism population proportion that took the trip Model
    protected $primaryKey = "population_id";
    protected $table = "tourism_population_proportion_that_took_trip";
    protected $fillable = [
    		'county_id',
    		'proportion',
    		'no_of_individuals', 
    		
    ]; 
}
