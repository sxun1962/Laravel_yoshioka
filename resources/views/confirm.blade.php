<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体調管理情報入力確認</title>
</head>
<body>
    <h2>体調管理情報入力確認</h2>
    <p>以下の情報で確定します。間違いありませんか？</p>
    <p>問題なければ「確定」を押してください。</p>

    <!-- 入力データ表示 -->
    <table border="1">
        <tr>
            <th>項目</th>
            <th>入力内容</th>
        </tr>
        <tr>
            <td>記録時間</td>
            <td>{{ session('recDateTime') }}</td>
        </tr>
        <tr>
            <td>体温</td>
            <td>{{ session('bdTemp') }} 度</td>
        </tr>
        <tr>
            <td>体重</td>
            <td>{{ session('bdWeight') }} kg</td>
        </tr>
        <tr>
            <td>血圧上</td>
            <td>{{ session('bpUp') }} mmHg</td>
        </tr>
        <tr>
            <td>血圧下</td>
            <td>{{ session('bpDown') }} mmHg</td>
        </tr>
    </table>

    <!-- 確定フォーム -->
    <form action="{{ route('health_record.confirm') }}" method="post">
        @csrf
        <input type="hidden" name="recDateTime" value="{{ session('recDateTime') }}">
        <input type="hidden" name="bdTemp" value="{{ session('bdTemp') }}">
        <input type="hidden" name="bdWeight" value="{{ session('bdWeight') }}">
        <input type="hidden" name="bpUp" value="{{ session('bpUp') }}">
        <input type="hidden" name="bpDown" value="{{ session('bpDown') }}">

        <!-- 戻るリンク（Laravelのルーティングを使用） -->
        <a href="{{ route('health_record.create') }}">戻る</a>
        <input type="submit" value="確定">
        <br>
    </form>
</body>
</html>
