<?php

namespace App\Models\Poverty;

use Illuminate\Database\Eloquent\Model;

class poverty_consumption_expenditure_and_quintile_distribution_model extends Model
{
     //@Charles Ndirangu
    //Poverty consumption expenditure and quantile distribution Model
    protected $primaryKey = "poverty_id";
    protected $table = "poverty_consumption_expenditure_and_quintile_distribution";
    protected $fillable = [
    		'county_id',
    		'mean',
    		'median',
    		'quarter1',
            'quarter2',
            'quarter3',
            'quarter4',
            'quarter5' 
    ]; 
}
