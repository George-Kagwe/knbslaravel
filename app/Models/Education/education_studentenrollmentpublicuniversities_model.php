<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_studentenrollmentpublicuniversities_model extends Model
{
    //
     protected $primaryKey = 'student_enrollment_id';
    protected $table ='education_studentenrollmentpublicuniversities';
    protected $fillable =[
                          'undergraduates',
                          'postgraduates',                          
                          'other',
                          'year'
                         ];
}
