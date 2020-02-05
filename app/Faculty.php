<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    //
    use SoftDeletes;

    public function ContactInfo()
    {
        return $this->hasOne('App\ContactInfo', 'faculty_id', 'id');
    }
    public function DemographicInfo()
    {
        return $this->hasOne('App\DemographicInfo', 'faculty_id', 'id');
    }
    public function EducationalBackground()
    {
        return $this->hasMany('App\EducationalBackground', 'faculty_id', 'id');
    }
}
