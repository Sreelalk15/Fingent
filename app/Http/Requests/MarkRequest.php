<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkRequest extends FormRequest
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
    public function rules()
    {
        $rules = [
            'student_id' => 'required', 
            'maths' => 'required|regex:/^[0-9]{1,2}$/',
            'science' => 'required|regex:/^[0-9]{1,2}$/',
            'history' => 'required|regex:/^[0-9]{1,2}$/',
            'term' => 'required',
        ];

        
        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'student_id.required' => 'The name field is required.',
            'maths.required' => 'The maths field is required.',
            'science.required' => 'The science field is required.',
            'history.required' => 'The history field is required.',
            'term.required' => 'The term field is required.',

            'maths.regex' => 'Maths should be a integer of minimum 1 and maximum 2 length',
            'science.regex' => 'Science should be a integer of minimum 1 and maximum 2 length',
            'history.regex' => 'History should be a integer of minimum 1 and maximum 2 length',
        ];
    }
}
