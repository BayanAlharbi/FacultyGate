<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Community extends Model
{
    //
    protected $table = 'communities';

    protected $fillable = ['faculty_id', 'event_name', 'event_date', 'target_audience', 'participated_students', 'participated_faculties'];
    protected $guarded = [];

    public function Faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_id');
    }
}
