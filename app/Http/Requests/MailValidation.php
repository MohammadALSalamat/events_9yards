<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //validation to info
            'emailFrom' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ];
    }
    public function messages()
    {
        return [
            //validation to info
            'required' => 'please this file is required',
            'email.email' => 'this must be a valid email including @',
            'username.min' => 'the name must be at least 5 letters',
            'username.max' => 'the name must be not more than 100 letters',
            'username.string' => 'Name must be a characters only',
        ];
    }
}
