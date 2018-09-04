<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sugar_Harvested extends Model
{
	protected $primaryKey = 'area_id';
    protected $table ='agriculture_area_under_sugarcane_harvested_production_avg_yield';
    protected $fillable =['area_under_cane_ha','area_harvested_ha','production_tonnes','average_yield_tonnes_per_ha','year'];


}
