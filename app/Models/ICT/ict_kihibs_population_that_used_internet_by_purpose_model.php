<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_population_that_used_internet_by_purpose_model extends Model
{
     //@Charles Ndirangu
    //ICT population dont use internet and reason Model
    protected $primaryKey = "distribution_id";
    protected $table = "ict_kihibs_population_that_used_internet_by_purpose";
    protected $fillable = [
            'county_id',
            'seek_info',
            'make_app',
            'get_info',
            'newspaper',
            'banking',
            'voip',
            'selling',
            'ordering',
            'course',
            'research', 
            'informative',
            'write_article',
            'social_nets',
            'movie',
            'search_work',
            'other',
            'population'  
    ]; 
}
 