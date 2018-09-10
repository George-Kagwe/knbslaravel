<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class finance_outstanding_debt_international_organization_model extends Model
{
 
 protected $primaryKey = 'outstanding_debt_id';
    protected $table ='finance_outstanding_debt_international_organization';
    protected $fillable =[    'ida',
      'eec_eib',
      'imf',
      'adf_adb',
      'commercial_banks',
       'others',
      'year'  ];






}
