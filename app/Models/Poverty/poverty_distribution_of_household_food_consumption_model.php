<?php

namespace App\Models\Poverty;

use Illuminate\Database\Eloquent\Model;

class poverty_distribution_of_household_food_consumption_model extends Model
{
     //@Charles Ndirangu
    //Poverty distribution of household consumption Model
    protected $primaryKey = "poverty_id";
    protected $table = "poverty_distribution_of_household_food_consumption";
    protected $fillable = [
    		'county_id',
    		'purchases',
    		'stock',
    		'own_production',
            'gifts'
    ]; 
}
