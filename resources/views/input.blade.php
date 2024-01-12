{{-- resources/views/health_info/input.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <title>体調管理情報入力</title>
</head>
<body>
    <form method="post" action="{{ route('health_info.store') }}">
        @csrf
        <!-- フォームの要素 -->
        <button type="submit">送信</button>
    </form>
</body>
</html>
