<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z]{2,15}+$/u', 
            'age' => 'required|regex:/^[0-9]{1,2}$/',
            'gender' => 'required|regex:/^[FM]{1}+$/',
            'reporting_teacher' => 'required',
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
            'name.required' => 'The name field is required.',
            'age.required' => 'The age field is required.',
            'gender.required' => 'The gender field is required.',
            'reporting_teacher.required' => 'The teacher field is required.',

            'name.regex' => 'Name should be a string of minimum 2 and maximum 15 length.',
            'age.regex' => 'Age should be a integer of minimum 1 and maximum 2 length',
            'gender.regex' => 'Only M and F are allowed for gender.',
        ];
    }
}
