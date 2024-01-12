<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthInfo extends Model
{
    /**
     * モデルで使用するテーブルの名前。
     *
     * @var string
     */
    protected $table = 'health_infos';

    /**
     * モデルの属性のデフォルト値。
     *
     * @var array
     */
    protected $attributes = [
        // デフォルト値を設定する場合
    ];

    /**
     * モデルの日付カラムのストレージ形式。
     *
     * @var string
     */
    protected $dateFormat = 'Y-m-d H:i:s';

    /**
     * モデルの日付属性。
     *
     * @var array
     */
    protected $dates = [
        'recDateTime',
    ];

    /**
     * バルク代入可能な属性。
     *
     * @var array
     */
    protected $fillable = [
        'recDateTime',
        'bdTemp',
        'bdWeight',
        'bpUp',
        'bpDown',
    ];

    // ここに他のモデルメソッドや関係性を追加する場合があります。
}

