<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalBackground extends Model
{
    //

    protected $table = 'educational_background';
    public function Faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_badge');
    }
}
