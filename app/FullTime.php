<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class FullTime extends Model
{
    //

    protected $table = 'full_time';
    public function Faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_id');
    }
}
