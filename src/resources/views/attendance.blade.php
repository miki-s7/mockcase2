<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <p>勤務時間外</p>
        <p>日付</p>
        <p>時間</p>
        <form action="/attendance" method="post">
            @csrf
            <button type="submit">出勤</button>
        </form>
        <form action="/attendance" method="post">
            @csrf
            <button type="submit">退勤</button>
        </form>

    </main>
</body>
</html>