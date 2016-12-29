<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactSend extends FormRequest
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
            'title' => 'required|max:255',
            'name' => 'required',
            'email' => 'required',
            'content' => 'required',
            'captcha' => 'required|captcha'
        ];
    }

    public function messages()
    {
        return [
            'captcha.captcha' => 'captcha error'
        ];
    }

}
