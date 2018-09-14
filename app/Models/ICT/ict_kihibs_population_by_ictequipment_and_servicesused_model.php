<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_population_by_ictequipment_and_servicesused_model extends Model
{
     //@Charles Ndirangu
    //ICT population by ict equipments used Model
    protected $primaryKey = "proportion_id";
    protected $table = "ict_kihibs_population_by_ictequipment_and_servicesused";
    protected $fillable = [
    		'county_id',
    		'television',
    		'radio',
    		'mobile',
            'computer',
            'internet',
            'population'
    ]; 
}
