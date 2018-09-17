<?php

namespace App\Models\Poverty;

use Illuminate\Database\Eloquent\Model;

class poverty_distribution_of_households_by_pointofpurchasedfooditems_model extends Model
{
     //@Charles Ndirangu
    //Poverty consumption expenditure and quantile distribution Model
    protected $primaryKey = "poverty_id";
    protected $table = "poverty_distribution_of_households_by_pointofpurchasedfooditems";
    protected $fillable = [
    		'county_id',
    		'supermarket',
    		'open_market',
    		'kiosk',
            'general_shop',
            'specialised_shop',
            'informal_sources',
            'other_formal_points',
            'number_of_observations' 
    ]; 
}
