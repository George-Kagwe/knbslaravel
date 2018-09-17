<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_population_who_used_internet_by_place_model extends Model
{
     //@Charles Ndirangu
    //ICT population dont use internet and reason Model
    protected $primaryKey = "proportion_id";
    protected $table = "ict_kihibs_population_who_used_internet_by_place";
    protected $fillable = [
            'county_id',
            'mobility',
            'work',
            'cyber',
            'ed_centre',
            'comm_centre',
            'another_home',
            'at_home',
            'other',
            'population'  
    ]; 
}
 