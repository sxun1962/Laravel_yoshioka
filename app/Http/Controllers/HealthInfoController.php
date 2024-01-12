<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthInfo; // 体調情報を保存するためのモデル（適宜作成）

class HealthInfoController extends Controller
{
    /**
     * 体調情報入力フォームを表示する。
     */
    public function create()
    {
        return view('health_info.create');
    }

    /**
     * 体調情報を保存する。
     */
    public function store(Request $request)
    {
        // バリデーションルール
        $validatedData = $request->validate([
            'recDateTime' => 'required|date',
            'bdTemp'      => 'required|numeric',
            'bdWeight'    => 'required|numeric',
            'bpUp'        => 'required|numeric',
            'bpDown'      => 'required|numeric',
        ]);

        // 体調情報を保存
        $healthInfo = new HealthInfo($validatedData);
        $healthInfo->save();

        // 保存後のリダイレクト先（例: メインメニュー）
        return redirect()->route('main')->with('success', '体調情報が保存されました。');
    }
}
