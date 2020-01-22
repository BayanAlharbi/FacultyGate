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
        return $this->hasOne('App\ContactInfo', 'faculty_badge', 'badge');
    }
}
