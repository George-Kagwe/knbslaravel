<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class finance_national_government_expenditure_purpose_model extends Model
{
    //
 protected $primaryKey = 'purpose_id';
    protected $table ='finance_national_government_expenditure_purpose';
    protected $fillable =['general_publicservices',
        'public_debttransactions',
        'transfers',
        'defense',
         'order_safety',
         'economic_commercial_labor',
         'agriculture',
         'fuel_energy',
         'mining_manufacturing_construction',
         'transport',
         'communication',
         'other_industries',
        'environmental_protection',
        'housing_communityamenities',
        'health',
       'recreation_culture_religion',
       'education',
       'socialprotection',

      'year'
                         ];





}
