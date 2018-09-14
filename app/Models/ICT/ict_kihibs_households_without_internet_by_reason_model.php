<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_households_without_internet_by_reason_model extends Model
{
     //@Charles Ndirangu
    //ICT households without internet and reasons Model
    protected $primaryKey = "distribution_id";
    protected $table = "ict_kihibs_households_without_internet_by_reason";
    protected $fillable = [
    		'county_id',
    		'dont_need',
    		'lack_skills',
    		'no_network',
            'access_elsewhere',
            'doesnt_meet_needs',
            'service_cost_high',
            'equipment_cost_high',
            'cultural_reasons',
            'other_reasons',
            'households', 
    ]; 
}
