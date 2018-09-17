<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_studentenrollmentbysextechnicalinstitutions_model extends Model
{
    //
         protected $primaryKey = 'student_enrollment_id';
    protected $table ='education_studentenrollmentbysextechnicalinstitutions';
    protected $fillable =[
                          'institution',
                          'male',                          
                          'female',
                          'year'
                         ];
}
