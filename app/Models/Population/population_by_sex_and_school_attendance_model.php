<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_by_sex_and_school_attendance_model extends Model
{
    //@Charles Ndirangu
    //population by sex and school attendance Model
    protected $primaryKey = "attendance_id";
    protected $table = "population_by_sex_and_school_attendance";
    protected $fillable = [
    		'education_level',
    		'female',
    		'male',
    		'total_population'
    ];
}
