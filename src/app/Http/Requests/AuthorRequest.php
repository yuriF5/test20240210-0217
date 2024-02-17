<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
    ublic function rules()
    {
        return [
        'last_name' => ['required', 'string', 'max:255'],
        'first_name' => ['required', 'string', 'max:255'],
        'gender' => ['required'],
        'tel' => ['required','max:5'],
        'email' => ['required', 'string', 'email', 'max:255'],
        'address' => ['required', 'string', 'max:255'],
        'content' => ['required'],
        'detail' => ['required', 'string', 'max:120'],
        'password' => ['required'],
        ];
    }
    public function messages()
    {
    return [
        'last_name.required' => '性を入力してください',
        'first_name.required' => '名を入力してください',
        'gender' => '性別を入力してください',
        'email.required' => 'メールアドレスを入力してください',
        'email.email' => '有効なメールアドレス形式を入力してください',
        'tel.max' => '電話番号を5桁以内で入力してください',
        'address.required' => '住所を入力してください',
        'content.required' => 'お問い合わせ種類を選択してください',
        'detail.max' => 'お問い合わせ内容は120文字以内で入力してください',
        'password.required'=>'パスワードを入力して下さい',
        ];
    
    }
}
