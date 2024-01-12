<?php
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HealthRecordController;
use App\Http\Controllers\Auth\LoginController;

// ログイン画面
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// ログアウト
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// // ① ログイン画面
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);

// ② ログイン失敗時のエラー画面（①のルーティングに含まれる）

// ③ メインメニュー画面
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// ④ 体調情報入力画面
Route::get('/health_record/create', [HealthRecordController::class, 'create'])->name('health_record.create')->middleware('auth');
Route::post('/health_record/store', [HealthRecordController::class, 'store'])->name('health_record.store')->middleware('auth');

// ⑤ 体調情報入力確認画面
// このルーティングは、フォームの処理によって決定されるため、別途設定する必要があります

// ⑥ 入力情報登録完了画面
// 通常は④のstoreメソッドのリダイレクト先として設定します

// ⑦ 過去の入力情報一覧表示画面
Route::get('/health_records', [HealthRecordController::class, 'index'])->name('health_record.index')->middleware('auth');

// ログアウトルーティング（例）
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//ホームページのルーティング
Route::get('/', function () {
    return view('welcome');
});





// use App\Http\Controllers\ProfileController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HealthInfoController;
// use Illuminate\Support\Facades\Auth; // Auth ファサードをインポート


// use App\Http\Controllers\HealthDataController;
// use App\Http\Controllers\Auth\LoginController;

// // 体調管理情報入力ページへのルート
// Route::get('/health-info-input', [HealthInfoController::class, 'create'])->name('routeName1');

// // 健康データ一覧ページへのルート
// Route::get('/health-data-list', [HealthDataController::class, 'index'])->name('routeName2');

// // ログインページへのルート
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('routeName3');

// // 他のルート定義...


// // 健康情報のリスト表示
// Route::get('/health-infos', [HealthInfoController::class, 'index'])->name('healthInfos.index');

// // 健康情報の登録（フォームからのPOSTリクエスト用）
// Route::post('/health-infos', [HealthInfoController::class, 'store'])->name('healthInfos.store');

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');


