<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
</head>
<body>

    <!-- バリデーションエラーの表示 -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- セッションエラーメッセージの表示 -->
    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <p>ログイン</p>
    <form method="post" action="{{ route('login') }}">
        @csrf <!-- CSRF対策 -->

        <table>
            <tr>
                <td>ユーザー名</td>
                <td><input type="text" name="email"></td> <!-- 'email'を使用 -->
            </tr>
            <tr>
                <td>パスワード</td>
                <td><input type="password" name="password"></td> <!-- 'password'を使用 -->
            </tr>
        </table>
        <input type="submit" value="ログイン" style="background-color:#0000ff;">
        <input type="reset" value="リセット" style="background-color:#0000ff;" name="reset">
    </form>

</body>
</html>





{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン画面</title>
</head>
<body>
    @if(session('error')) <!-- エラーメッセージの表示 -->
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <p>ログイン</p>
    <form method="post" action="{{ route('login') }}">
        @csrf <!-- CSRF対策 -->
        <table>
            <tr>
                <td>ユーザー名</td>
                <td><input type="text" name="email"></td> <!-- 'email'を使用 -->
            </tr>
            <tr>
                <td>パスワード</td>
                <td><input type="password" name="password"></td> <!-- 'password'を使用 -->
            </tr>
        </table>
        <input type="submit" value="ログイン" style="background-color:#0000ff;">
        <input type="reset" value="リセット" style="background-color:#0000ff;" name="reset">
    </form>
</body>
</html> --}}





{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
