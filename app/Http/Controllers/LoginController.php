<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * ログインフォームを表示する。
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * ログイン処理。
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // 認証に成功した
            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

        // 認証に失敗した場合、ログインフォームに戻る
        return redirect()->back()
            ->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => '指定されたユーザー情報が見つかりません。']);
    }

    /**
     * ログイン時のバリデーションルール。
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    /**
     * ログアウト処理。
     */
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/login');
    }
}
