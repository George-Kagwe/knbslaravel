<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_population_proportion_that_took_trip_model extends Model
{
    //@Charles Ndirangu
    //Tourism population that took trip Model
    protected $primaryKey = "id";
    protected $table = "tourism_hotel_occupancy_by_zone";
    protected $fillable = [
    		'coastal_beach',
    		'coastal_other',
    		'coastal_hinterland',
    		'nairobi_high_class',
    		'nairobi_other',
    		'central',
            'masailand',
    		'nyanza_basin',
    		'western',
    		'northern',
    		'total_occupied',
    		'total_available',
    		'year'
    ]; 
} 
