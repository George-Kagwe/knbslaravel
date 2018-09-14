<?php

namespace App\Models\Housing;

use Illuminate\Database\Eloquent\Model;

class housing_conditions_kihibs_owner_occupier_dwellings_model extends Model
{
  protected $primaryKey = 'dwelling_id';
    protected $table ='housing_conditions_kihibs_owner_occupier_dwellings';
    protected $fillable =[       
                          'county_id',
                          'purchased_cash',
                          'purchased_loan',
                          'purchased_cash_loan',
                          'constructed_cash',
                          'constructed_loan',
                          'constructed_cash_loan',
                          'inherited',
                          'gift',
                          'bartered',
                          'other',
                          'households',
                       
                         ];
}

                     