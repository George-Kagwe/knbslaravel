<?php

namespace App\Models\Environment;

use Illuminate\Database\Eloquent\Model;

class land_and_climate_surface_area_by_category_model extends Model
{
    protected $primaryKey = 'surface_area_id';
    protected $table ='land_and_climate_surface_area_by_category';
    protected $fillable =['county_id',
                          'category_id',
                          'area_sq_km'
                  
                         ];




}
