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
    if ($this->path() == '/') {
      return true;
    } else {
      return false;
    }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    return [
    'firstname' => 'required|string',
    'lastname' => 'required|string',
    'gender' => 'required',
    'email' => 'required|email:rfc,dns',
    'postal_code'=>'required|nameric-dash',
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
    'postal_code'=>'ハイホンを含む数字のみで入力して下さい',
    'address'=>'正しい住所を入力してください',
    'opinion'=>'120以内で入力して下さい',
    ];
  }
}
