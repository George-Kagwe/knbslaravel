<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;

class administrative_unit_model extends Model
{
    //@Charles Ndirangu
    //Administrative Units Model
    protected $primaryKey = "administrative_unit_id";
    protected $table = "administrative_unit";
    protected $fillable = [
    		'county_id',
    		'subcounty_id',
    		'county_ward',
    		'divisions',
    		'locations',
    		'sub_locations'
    ];
}
