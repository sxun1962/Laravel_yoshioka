<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体調管理情報</title>
</head>
<body>
    <h2>累積データ一覧</h2>
    <table border="1">
        <thead>
            <tr>
                <th>記録時間</th>
                <th>体温(度)</th>
                <th>体重(kg)</th>
                <th>血圧上(mmHg)</th>
                <th>血圧下(mmHg)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($healthInfoList as $healthInfo)
                <tr>
                    <td>{{ $healthInfo->recDatetime }}</td>
                    <td>{{ $healthInfo->bdTemp }}</td>
                    <td>{{ $healthInfo->bdWeight }}</td>
                    <td>{{ $healthInfo->bpUp }}</td>
                    <td>{{ $healthInfo->bpDown }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- 戻るリンク -->
    <a href="{{ route('main') }}">戻る</a>
    <a href="{{ route('logout') }}">ログイン画面に戻る</a>
</body>
</html>
