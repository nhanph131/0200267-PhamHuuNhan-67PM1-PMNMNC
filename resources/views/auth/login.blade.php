<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <h2>Đăng nhập</h2>

    @if($errors->has('login'))
        <div style="color:red">
            {{ $errors->first('login') }}
        </div>
    @endif

    <form action="{{ route('auth.authenticate') }}" method="POST">
        @csrf

        <div>
            <label for="username">Username</label><br>
            <input id="username" name="username" required autofocus>
        </div>

        <div>
            <label for="password">Mật khẩu</label><br>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
    <div><a href="{{ route('auth.register') }}">Chưa có tài khoản?</a></div>
    <a href="{{ route('home') }}">Quay lại?</a>
</body>
</html>