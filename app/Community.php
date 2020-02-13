<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Community extends Model
{
    //

    protected $table = 'communities';
    public function Faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_id');
    }
}
