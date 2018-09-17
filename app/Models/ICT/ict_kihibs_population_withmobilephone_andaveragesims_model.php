<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_population_withmobilephone_andaveragesims_model extends Model
{
     //@Charles Ndirangu
    //ICT households owned ict equipments Model
    protected $primaryKey = "proportion_id";
    protected $table = "ict_kihibs_population_withmobilephone_andaveragesims";
    protected $fillable = [
    		'county_id',
    		'phone',
    		'population',
    		'avg_sims',
            'population_sims'
    ]; 
}
