<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemographicInfo extends Model
{
    //


    protected $table = 'demographic_info';
    public function Faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_badge');
    }
}
