<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BoardRequest;// ←★(1)追加

class BoardController extends Controller
{
    /**
     * フォーム画面
     *
     */
    public function index(Request $request)
    {
        $data = [
            'msg'  => '投稿内容を入力してください',
        ];

        return view('board.index', $data);
    }

    /**
     * バリデーション設定
     *
     */
    public function add(BoardRequest $request)
    {
        $data = [
            'msg'  => '正しく入力されました！',
        ];

        // BoardRequestにバリデーション処理をまとめたのでコメントアウト。
//        // ルールの設定
//        $validate_rule = [
//            'subject' => 'required|max:10',
//            'email' => 'email',
//            'message' => 'required|max:50',
//        ];
//
//        // 実行部分
//        $this->validate($request, $validate_rule);

        // viewをリターン
        return view('board.index', $data);
    }
}
