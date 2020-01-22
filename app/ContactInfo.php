<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactInfo extends Model
{
    //

    use SoftDeletes;
    protected $table = 'contact_info';
    public function Faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_badge');
    }
}
