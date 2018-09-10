<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_percentage_households_ownership_household_assets_model extends Model
{
    //@Charles Ndirangu
    //Household population by percentage households ownership household assets model
    protected $primaryKey = "ownership_id";
    protected $table = "population_percentage_households_ownership_household_assets";
    protected $fillable = [
    		'asset',
    		'percentage'
    ];
}
