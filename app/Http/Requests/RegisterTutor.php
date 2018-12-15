<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterTutor extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //ai cung co the thuc hien request nay
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50|min:3',
            'phone' =>'required|min:8|max:9|numeric', 
            'address' =>'required|min:8|max:100', 
            'password' =>'required|min:3|max:20', 
            'repassword' =>'required|same:password', 
            'subject' =>'required|min:2', 
            'salary' =>'required|min:3', 
            'time' =>'required|min:3', 
            'time' =>'required|min:3'

        ];
    }
    public function messages){
        return [
            'name.required' => 'Vui lòng nhập họ và tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'repassword.required' => 'Xác nhận mật khẩu không đúng',
            'subject.required' => 'Vui lòng nhập họ và tên',
            'time.required' => 'Vui lòng nhập họ và tên'


        ];
    }
}
