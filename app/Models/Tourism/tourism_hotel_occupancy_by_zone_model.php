<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_hotel_occupancy_by_zone_model extends Model
{
    //@Charles Ndirangu
    //Tourism Hotel by Occupancy zone Model
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
