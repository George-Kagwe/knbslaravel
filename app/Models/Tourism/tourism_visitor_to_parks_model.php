<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_visitor_to_parks_model extends Model
{
    //@Charles Ndirangu
    //Tourism visitor to parks Model
    protected $primaryKey = "visitor_parks_id";
    protected $table = "tourism_visitor_to_parks";
    protected $fillable = [
    		'nairobi',
            'nairobi_safari_walk',
            'nairobi_mini_orphanage',
            'amboseli',
            'tsavo_west',
            'tsavo_east',
            'aberdare',
            'lake_nakuru',
            'europe',
            'masai_mara',
            'hallers_park',
            'malindi_marine',
            'lake_bogoria',
            'meru',
            'shimba_hills',
            'mt_kenya',
            'samburu',
            'kisite_mpunguti',
            'mombasa_marine',
            'watamu_marine',
            'hells_gate',
            'impala_sanctuary_kisumu',
            'mt_longonot',
            'other',
            'year'
    ]; 
} 
