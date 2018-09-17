<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_population_that_didntuseinternet_by_reason_model extends Model
{
     //@Charles Ndirangu
    //ICT population dont use internet and reason Model
    protected $primaryKey = "proportion_id";
    protected $table = "ict_kihibs_population_that_didntuseinternet_by_reason";
    protected $fillable = [
            'county_id',
            'too_young',
            'dont_need',
            'lack_skill',
            'expensive',
            'no_internet',
            'culture',
            'control',
            'security',
            'others', 
            'not_started',
            'population'  
    ]; 
}
 