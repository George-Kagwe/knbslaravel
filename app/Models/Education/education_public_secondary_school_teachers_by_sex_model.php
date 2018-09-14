<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_public_secondary_school_teachers_by_sex_model extends Model
{
    //

      protected $primaryKey = 'candidate_id';
    protected $table ='education_public_secondary_school_teachers_by_sex';
    protected $fillable =['number',
                          'proportion',
                            'gender',
                           'total',
                                    
                          'year'
                         ];
}
