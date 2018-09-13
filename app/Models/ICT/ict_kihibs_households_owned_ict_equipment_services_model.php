<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_households_owned_ict_equipment_services_model extends Model
{
     //@Charles Ndirangu
    //ICT households owned ict equipments Model
    protected $primaryKey = "household_id";
    protected $table = "ict_kihibs_households_owned_ict_equipment_services";
    protected $fillable = [
    		'county_id',
    		'computer',
    		'television',
    		'households'
    ]; 
}
