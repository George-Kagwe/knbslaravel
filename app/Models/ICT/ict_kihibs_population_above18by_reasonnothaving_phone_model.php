<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_population_above18by_reasonnothaving_phone_model extends Model
{
     //@Charles Ndirangu
    //ICT households without phone and reason Model
    protected $primaryKey = "population_id";
    protected $table = "ict_kihibs_population_above18by_reasonnothaving_phone";
    protected $fillable = [
            'county_id',
            'population',
            'too_young',
            'dont_need',
            'restricted',
            'no_network',
            'gender_bias',
            'no_electricity',
            'phone_expe',
            'maintain_expe',
            'other',
            'households',  
    ]; 
}
 