<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>メインメニュー</title>
</head>
<body>
    <h1>体調管理システム</h1>
    <ul>
        <li><a href="{{ route('health_info_input') }}">体調管理情報入力</a></li>
        <li><a href="{{ route('health_info') }}">累積データ一覧</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a></li>
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>

