<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_by_type_of_disability_model extends Model
{
    //@Charles Ndirangu
    //population by type of disability Model
    protected $primaryKey = "disability_id";
    protected $table = "population_by_type_of_disability";
    protected $fillable = [
    		'disability',
    		'females',
    		'males',
    		'total_population'
    ];
}
