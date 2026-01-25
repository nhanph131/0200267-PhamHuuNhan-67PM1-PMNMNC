<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký</h2>

       
    @if($errors->has('reg'))
        <div style="color:red">
            {{ $errors->first('reg') }}
        </div>
    @endif

    <form action="{{ route('auth.adduser') }}" method="POST">
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
            <label for="con-password">Nhập lại mật khẩu</label><br>
            <input id="con-password" type="password" name="con-password" required>
        </div>
        <div>
            <button type="submit">Đăng ký</button>
        </div>
    </form>
    <div><a href="{{ route('auth.login') }}">Có tài khoản?</a></div>
    <a href="{{ route('home') }}">Quay lại?</a>
</body>
</html>