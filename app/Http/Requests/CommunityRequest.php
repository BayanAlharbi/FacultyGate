<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommunityRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    /**-- event_name,event_date, target_audience,participated_students,participated_faculties-->*/
    public function rules()
    {
        return [
            'faculty_id' => '',
            'event_name' => '',
            'event_date' => 'date',
            'target_audience' => '',
            'participated_students' => '',
            'participated_faculties' => ''
        ];
    }
}
