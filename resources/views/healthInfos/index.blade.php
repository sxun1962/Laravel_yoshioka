{{-- resources/views/healthInfos/index.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Infos</title>
</head>
<body>
    <h1>Health Infos</h1>
    <ul>
        @foreach ($healthInfos as $info)
            <li>{{ $info->rec_datetime }}: {{ $info->bd_temp }} / {{ $info->bd_weight }} / {{ $info->bp_up }} / {{ $info->bp_down }}</li>
        @endforeach
    </ul>
</body>
</html>
