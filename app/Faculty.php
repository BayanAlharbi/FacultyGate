<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    //
    use SoftDeletes;

    protected $attributes = [
        'full_time' => '0'
    ];

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
    public function FullTime()
    {
        return $this->hasOne('App\FullTime', 'faculty_id', 'id');
    }
    public function Community()
    {
        return $this->hasMany('App\Community', 'faculty_id', 'id');
    }
    public function Research()
    {
        return $this->hasMany('App\Research', 'faculty_id', 'id');
    }
}
