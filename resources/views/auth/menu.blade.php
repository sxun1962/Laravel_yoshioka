<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー画面</title>
    <!-- ここにCSSのリンクやその他のヘッド要素を追加 -->
</head>
<body>
    <div class="menu-container">
        <ul>
            <li><a href="{{ route('routeName1') }}">体調管理情報入力</a></li>
            <li><a href="{{ route('routeName2') }}">健康データ一覧</a></li>
            <li><a href="{{ route('routeName3') }}">ログイン画面に戻る</a></li>
            <!-- その他のメニュー項目 -->
        </ul>
    </div>
</body>
</html>
