<?php

namespace App\Models\Finance;

use Illuminate\Database\Eloquent\Model;

class CDFAllocation_Model extends Model
{
    protected $primaryKey = 'cdf_allocation_id';
    protected $table ='finance_cdf_allocation_by_constituency';
    protected $fillable =['county_id',
                          'subcounty_id',
                          'cdf_amount',
                          'year'
                         ];
}