<?php

namespace App\Models\Administration;

use Illuminate\Database\Eloquent\Model;

class political_units_model extends Model
{
    //@Charles Ndirangu
    //Political Units Model
    protected $primaryKey = "political_unit_id";
    protected $table = "political_units";
    protected $fillable = [
    		'county_id',
    		'subcounty_id',
    		'county_ward'
    ];
}
