<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>体調管理情報入力</title>
</head>
<body>
    <h2>体調管理情報入力</h2>

    <!-- エラーメッセージ表示 -->
    @if(session('errorMessage'))
        <p style="color: red;">{{ session('errorMessage') }}</p>
    @endif

    <form action="{{ route('health_info_input') }}" method="post">
        @csrf

        <!-- 日時 -->
        <label for="recDateTime">記録時間:</label>
        <input type="datetime-local" id="recDateTime" name="recDateTime" required value="{{ old('recDateTime') }}">
        <br>

        <!-- 体温 -->
        <label for="bdTemp">体温:</label>
        <select id="bdTemp" name="bdTemp" required>
            <option value="">選択してください</option>
            @for ($temp = 350; $temp <= 410; $temp++)
                <option value="{{ $temp/10.0 }}" {{ old('bdTemp') == $temp/10.0 ? 'selected' : '' }}>{{ $temp/10.0 }} 度</option>
            @endfor
        </select>
        <br>

        <!-- 体重 -->
        <label for="bdWeight">体重:</label>
        <select id="bdWeight" name="bdWeight" required>
            <option value="">選択してください</option>
            @for ($weight = 400; $weight <= 2000; $weight++)
                <option value="{{ $weight/10.0 }}" {{ old('bdWeight') == $weight/10.0 ? 'selected' : '' }}>{{ $weight/10.0 }} kg</option>
            @endfor
        </select>
        <br>

        <!-- 血圧上 -->
        <label for="bpUp">血圧上:</label>
        <select id="bpUp" name="bpUp" required>
            <option value="">選択してください</option>
            @for ($bp = 30; $bp <= 300; $bp++)
                <option value="{{ $bp }}" {{ old('bpUp') == $bp ? 'selected' : '' }}>{{ $bp }} mmHg</option>
            @endfor
        </select>
        <br>

        <!-- 血圧下 -->
        <label for="bpDown">血圧下:</label>
        <select id="bpDown" name="bpDown" required>
            <option value="">選択してください</option>
            @for ($bp = 30; $bp <= 300; $bp++)
                <option value="{{ $bp }}" {{ old('bpDown') == $bp ? 'selected' : '' }}>{{ $bp }} mmHg</option>
            @endfor
        </select>
        <br>

        <!-- 戻るリンク -->
        <a href="{{ route('main') }}">戻る</a>

        <!-- 確定ボタン -->
        <input type="submit" value="確定" style="background-color: blue; margin-right: 50%; transform: translateX(50%)">
    </form>
</body>
</html>
