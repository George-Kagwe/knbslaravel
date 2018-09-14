<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_hholds_in_rented_dwellings_model extends Model
{




protected $primaryKey = 'dwelling_id';
    protected $table ='housing_conditions_kihibs_hholds_in_rented_dwellings';
    protected $fillable =[     'county_id',
                          'govt_national',
                          'govt_county',
                          'parastatal',
                          'company_directly',
                          'company_agent',
                          'individual_directly',
                          'individual_agent',
                          'other',
                          'not_stated',
                          'households',
                  
                       
                         ];






}
