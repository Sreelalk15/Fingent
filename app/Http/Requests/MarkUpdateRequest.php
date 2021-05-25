<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkUpdateRequest extends FormRequest
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
            'maths' => 'required|regex:/^[0-9]{1,2}$/',
            'science' => 'required|regex:/^[0-9]{1,2}$/',
            'history' => 'required|regex:/^[0-9]{1,2}$/',
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
            'maths.required' => 'The maths field is required.',
            'science.required' => 'The science field is required.',
            'history.required' => 'The history field is required.',

            'maths.regex' => 'Maths should be a integer of minimum 1 and maximum 2 length',
            'science.regex' => 'Science should be a integer of minimum 1 and maximum 2 length',
            'history.regex' => 'History should be a integer of minimum 1 and maximum 2 length',
        ];
    }
}
