<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthRecord extends Model
{
    // このモデルが使用するテーブル名
    protected $table = 'health_records';

    // マスアサインメント可能な属性
    protected $fillable = [
        'user_id',   // ユーザーID
        'mood',      // 気分
        'temperature', // 体温
        'sleep_hours' // 睡眠時間
    ];

    // ユーザーモデルとのリレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
