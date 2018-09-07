<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_departures_model extends Model
{
    //@Charles Ndirangu
    //Tourism Departures Model
    protected $primaryKey = "departures_id";
    protected $table = "tourism_departures";
    protected $fillable = [
    		'quarter',
    		'holiday',
    		'business', 
    		'transit',
    		'other',
    		'year'
    ]; 
}
