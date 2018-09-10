<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_hotel_occupancy_by_residence_model extends Model
{
    //@Charles Ndirangu
    //Tourism Hotel Occupancy by residence Model
    protected $primaryKey = "hotel_occupancy_id";
    protected $table = "tourism_hotel_occupancy_by_residence";
    protected $fillable = [
    		'permanent_occupants',
    		'germany',
    		'switzerland',
    		'united_kingdom',
    		'italy',
    		'france',
    		'scandinavia',
    		'other_europe',
    		'europe',
    		'kenya_residents',
    		'uganda',
    		'tanzania',
    		'east_and_central_africa',
    		'west_africa',
    		'north_africa',
    		'south_africa',
    		'other_africa',
    		'africa',
    		'usa',
    		'canada',
    		'other_america',
    		'america',
    		'japan',
    		'india',
    		'middle_east',
    		'other_asia',
    		'asia',
    		'australia_and_new_zealand',
    		'all_other_countries',
    		'total_occupied',
    		'total_available',
    		'occupancy_percentage_rate',
    		'year'
    ]; 
}
