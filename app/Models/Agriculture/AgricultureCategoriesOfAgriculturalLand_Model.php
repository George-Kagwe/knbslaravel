<?php

namespace App\Models\Agriculture;

use Illuminate\Database\Eloquent\Model;

class AgricultureCategoriesOfAgriculturalLand_Model extends Model
{
    //
      protected $primaryKey = 'land_id';
    protected $table ='agriculture_categories_of_agricultural_land';
    protected $fillable =['county_id',
                          'high_potential',
                          'medium_potential',
                          'low_potential',
                           'total_land',
                            'all_other_land',
                             'total_land_area'
                              
                         ];
}
