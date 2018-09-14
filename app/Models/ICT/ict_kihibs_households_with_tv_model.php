<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_households_with_tv_model extends Model
{
     //@Charles Ndirangu
    //ICT households with tv Model
    protected $primaryKey = "household_id";
    protected $table = "ict_kihibs_households_with_tv";
    protected $fillable = [
    		'county_id',
    		'digital_tv',
    		'pay_tv',
    		'free_to_air',
            'ip_tv',
            'none',
            'households' 
    ]; 
}
