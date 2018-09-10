<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_households_by_main_source_of_water_model extends Model
{
    //@Charles Ndirangu
    //Household population by main source of water Model
    protected $primaryKey = "source_of_water_id";
    protected $table = "population_households_by_main_source_of_water";
    protected $fillable = [
    		'source',
    		'total'
    ];
}
