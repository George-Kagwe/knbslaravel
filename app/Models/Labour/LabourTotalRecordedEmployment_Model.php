<?php

namespace App\Models\Labour;

use Illuminate\Database\Eloquent\Model;

class LabourTotalRecordedEmployment_Model extends Model
{
    //
       protected $primaryKey = 'total_employment_id';
    protected $table ='labour_total_recorded_employment';
    protected $fillable =['sector_category',
                          'total_employment',
                           'year'
                         
                         ];
}
