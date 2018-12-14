<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
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
        // $messages = [
        //     'current-password.required' => 'Please enter current password',
        //     'password.required' => 'Please enter password',
        // ];
        // return [
        //     'oldpassword' => 'required|min:6|max:50',
        //     'password' => 'required|min:6|max:50',
        //     'repassword' => 'required|min:6|max:50',
        // ];

    }
}
