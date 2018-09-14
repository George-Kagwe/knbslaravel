<?php

namespace App\Models\Health;

use Illuminate\Database\Eloquent\Model;

class HealthNhifResources_Model extends Model
{
    //
      protected $primaryKey = 'resource_id';
    protected $table ='health_nhif_resources';
    protected $fillable =['benefits',
                          'contributions_net_benefits',
                          'receipts',                          
                          'year'
                         ];
}
