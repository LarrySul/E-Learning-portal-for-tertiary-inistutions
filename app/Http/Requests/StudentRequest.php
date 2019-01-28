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
        return [
            'fullname' => 'required|string',
            'matric' => 'required|numeric',
            'department' => 'required|string', 
            'level' => 'required|string', 
            'learn' => 'required|string',
            'email' => 'required|email|unique:students'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'fullname.required' => 'Fullname is required!',
            'department.required' => 'Department is required!',
            'level.required' => 'Level is required!',
            'learn.required' => 'Tell us what you want to learn!',
            'matric.required' => 'Matriculation Number is required!',
        ];
    }
}
