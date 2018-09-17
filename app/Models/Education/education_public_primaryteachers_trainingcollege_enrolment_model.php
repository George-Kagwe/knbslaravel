<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_public_primaryteachers_trainingcollege_enrolment_model extends Model
{
    //
    
      protected $primaryKey = 'candidate_id';
    protected $table ='education_public_primaryteachers_trainingcollege_enrolment';
    protected $fillable =['number',
                          'proportion',
                            'gender',
                           'total',
                                    
                          'year'
                         ];
}
