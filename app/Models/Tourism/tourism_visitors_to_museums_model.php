<?php

namespace App\Models\Tourism;

use Illuminate\Database\Eloquent\Model;

class tourism_visitors_to_museums_model extends Model
{
    //@Charles Ndirangu
    //Tourism visitor to Museums Model
    protected $primaryKey = "visitor_museums_id";
    protected $table = "tourism_visitors_to_museums";
    protected $fillable = [
    		'nairobi_snake_park',
            'fort_jesus',
            'kisumu',
            'kitale',
            'gede',
            'meru',
            'lamu',
            'jumba_la_mtwana',
            'kariandusi',
            'hyrax_hill',
            'karen_blixen',
            'malindi',
            'kilifi_mnarani',
            'kabarnet',
            'kapenguria',
            'swahili_house',
            'narok',
            'german_post',
            'takwa_ruins',
            'year'
    ]; 
} 
 