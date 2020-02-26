<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    // 'pbl','research_proposal_supervised','research_proposal_cosupervised','irb_approval','research_presentation','publication','student_involvement');
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'faculty_id' => '',
            'pbl' => '',
            'research_proposal_supervised' => '',
            'research_proposal_cosupervised' => '',
            'irb_approval' => '',
            'research_presentation' => '',
            'publication' => '',
            'student_involvement' => ''

        ];
    }
}
