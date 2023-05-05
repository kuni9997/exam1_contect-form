<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customerRequest extends FormRequest
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
            'last-name' => 'required',
            'first-name' => 'required',
            'gender' => 'required',
            'email' => 'required|email:filter',
            'postcode' => 'required|size:8',
            'address' => 'required',
            'building_name' => 'nullable',
            'opinion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'last-name.required' => '名前を入力してください',
            'first-name.required' => '名前を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => '正しいメールアドレスを入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.size' => '「ー」を含めた８文字で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'お問い合わせ内容を入力してください',
        ];
    }
}