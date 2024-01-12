<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HealthRecord;
use Illuminate\Support\Facades\Auth;

class HealthRecordController extends Controller
{
    // 体調情報入力フォームの表示
    public function create()
    {
        return view('health_record.create');
    }

    // 体調情報の保存
    public function store(Request $request)
    {
        // フォームデータのバリデーション
        $validatedData = $request->validate([
            'mood' => 'required|string|max:255',
            'temperature' => 'required|numeric',
            'sleep_hours' => 'required|numeric',
        ]);

        // 体調情報を保存
        $healthRecord = new HealthRecord();
        $healthRecord->user_id = Auth::id(); // ログインしているユーザーのID
        $healthRecord->mood = $validatedData['mood'];
        $healthRecord->temperature = $validatedData['temperature'];
        $healthRecord->sleep_hours = $validatedData['sleep_hours'];
        $healthRecord->save();

        // 保存後、別のページ（例えばホーム画面など）にリダイレクト
        return redirect()->route('home');
    }

     // 過去の入力情報の一覧表示
     public function index()
     {
         // HealthRecordモデルを使用して全ての体調情報を取得
         $healthInfoList = HealthRecord::all();

         // 取得したデータをビューに渡す
         return view('health_record.index', ['healthInfoList' => $healthInfoList]);
     }
}
