<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_households_with_internet_by_type_model extends Model
{
     //@Charles Ndirangu
    //ICT households by intenet type Model
    protected $primaryKey = "distribution_id";
    protected $table = "ict_kihibs_households_with_internet_by_type";
    protected $fillable = [
    		'county_id',
    		'fixed_wired',
    		'fixed_wireless',
    		'mobile_broadband',
            'mobile',
            'other',
            'households'
    ]; 
}
