<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Model;

class education_csa_teachertrainingcolleges_model extends Model
{
 

 protected $primaryKey = 'teacher_colleges_id';
    protected $table ='education_csa_teachertrainingcolleges';
    protected $fillable =['county_name'=>'required',
                  
                           'pre_primary',
                           'category',
                           'primary_sc',
                           'secondary',
                           'year',


                         ];





}
