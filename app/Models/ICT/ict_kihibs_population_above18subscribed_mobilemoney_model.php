<?php

namespace App\Models\ICT;

use Illuminate\Database\Eloquent\Model;

class ict_kihibs_population_above18subscribed_mobilemoney_model extends Model
{
     //@Charles Ndirangu
    //ICT population subsciribers of mobile money Model
    protected $primaryKey = "proportion_id";
    protected $table = "ict_kihibs_population_above18subscribed_mobilemoney";
    protected $fillable = [
    		'county_id',
    		'mobile_money',
    		'mobile_banking',
    		'population'
    ]; 
}
