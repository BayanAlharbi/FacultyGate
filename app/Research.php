<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    //
    //'pbl','research_proposal_supervised','research_proposal_cosupervised','irb_approval','research_presentation','publication','student_involvement');
    protected $table = 'researches';
    protected $fillable = ['faculty_id', 'pbl', 'research_proposal_supervised', 'research_proposal_cosupervised', 'irb_approval', 'research_presentation', 'publication', 'student_involvement'];
    public function Faculty()
    {
        return $this->belongsTo('App\Faculty', 'faculty_id');
    }
}
