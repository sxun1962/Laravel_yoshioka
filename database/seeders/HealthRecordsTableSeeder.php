<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\HealthRecord;

class HealthRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テストデータの作成
        HealthRecord::create([
            'user_id' => 1, // 既存のユーザーIDを想定
            'recDateTime' => now(),
            'bdTemp' => 36.5,
            'bdWeight' => 60.0,
            'bpUp' => 120,
            'bpDown' => 80
        ]);

        // さらにテストデータを追加したい場合は、上記のコードを繰り返す
    }
}


//

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class HealthRecordsTableSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         //
//     }
// }
