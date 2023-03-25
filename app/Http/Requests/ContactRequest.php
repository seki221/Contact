<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
    'name' => 'required',
    'gender' => 'required',
    'email' => 'required|email:rfc,dns',
    'postal_code'=>'required|nam',
    'address' => 'required|string',
    'opinion' => 'required|string|max:120',
    ];
    }

    public function messages()
    {
    return [
    'firstname.required' => '名字を入力してください',
    'lastname.required' => '名前を入力してください',
    'email.required' => 'メールアドレスを入力してください',
    'email.email' => 'メールアドレスの形式で入力してください',
    
    ];
  }
}
