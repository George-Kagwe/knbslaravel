<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_primary_school_enrolments_by_sex_model extends Model
{
    //

      protected $primaryKey = 'enrolment_id';
    protected $table ='education_primary_school_enrolments_by_sex';
    protected $fillable =['number',
                          'boys',
                            'girls',
                           'total',
                           'percentage_girls',
                           'parity_index',            
                          'year'
                         ];
}
