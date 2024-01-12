<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * メインメニュー画面を表示
     */
    public function index()
    {
        // 必要に応じてユーザー情報やその他のデータを取得

        return view('home', [
            // 'user' => Auth::user(),
            // 'data' => $data,
        ]);
    }
}
