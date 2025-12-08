<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>ログイン画面</title>
</head>
<body>
    <header>
        <div>

        </div>
    </header>
    <main>
        <h2>管理者ログイン</h2>

        <form class="form" action="/admin/attendance/list" method="post">
            @csrf
            <div>
                <div>メールアドレス</div>
                <input type="text" name="email" value="{{ old('email') }}" />
                <div class="form__error"></div>
            </div>
            <div>
                <div>パスワード</div>
                <input type="password" name="password" />
                <div class="form__error"></div>
            </div>
            <div>
                <button type="submit">ログインする</button>
            </div>
        </form>
        <a>会員登録はこちら</a>
    </main>
</body>
</html>