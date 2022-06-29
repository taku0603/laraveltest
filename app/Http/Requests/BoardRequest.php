<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * このフォームリクエストを利用が許可されているかを示す。問題なければtrue
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * バリデーションの検証ルールを設定する
     * @return array
     */
    public function rules()
    {
        return [
            'subject' => 'required|max:10',
            'email' => 'email',
            'message' => 'required|max:50',
        ];
    }

    /**
     * エラーメッセージを日本語化
     *
     */
    public function messages()
    {
        return [
            'subject.required' => '件名を入力してください',
            'subject.max' => '件名は10文字以内で入力してください',
            'email.email' => 'メールアドレスとして正しい形式ではありません',
            'message.required' => 'メッセージを入力してください',
            'message.max' => 'メッセージは50文字以内で入力してください',
        ];
    }
}
