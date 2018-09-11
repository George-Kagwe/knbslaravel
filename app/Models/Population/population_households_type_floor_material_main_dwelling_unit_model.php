<?php

namespace App\Models\Population;

use Illuminate\Database\Eloquent\Model;

class population_households_type_floor_material_main_dwelling_unit_model extends Model
{
    //@Charles Ndirangu
    //Household population by household type of floor material main dwelling unit Model
    protected $primaryKey = "floor_material_id";
    protected $table = "population_households_type_floor_material_main_dwelling_unit";
    protected $fillable = [
    		'material',
    		'households'
    ];
}
