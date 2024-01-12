<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確定画面</title>
</head>
<body>
    <h2>確定しました。</h2>

    <div>
        <!-- Laravelのルーティングを使用したリンク -->
        <a href="{{ route('main') }}">メインメニューへ</a>
        <a href="{{ route('health_record.index') }}">累積一覧データへ</a>
    </div>
</body>
</html>
