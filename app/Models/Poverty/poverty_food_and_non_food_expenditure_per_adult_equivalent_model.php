<?php

namespace App\Models\Poverty;

use Illuminate\Database\Eloquent\Model;

class poverty_food_and_non_food_expenditure_per_adult_equivalent_model extends Model
{
     //@Charles Ndirangu
    //Poverty food and non food expenditure per adult Model
    protected $primaryKey = "poverty_id";
    protected $table = "poverty_food_and_non_food_expenditure_per_adult_equivalent";
    protected $fillable = [
    		'county_id',
    		'food',
    		'non_food',
    		'category',
    ]; 
}
