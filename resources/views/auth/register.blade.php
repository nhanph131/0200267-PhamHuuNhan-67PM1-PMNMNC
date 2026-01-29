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
            <label for="repassword">Nhập lại mật khẩu</label><br>
            <input id="repassword" type="password" name="repassword" required>
        </div>
        <div>
            <label for="mssv">Mã sinh viên:</label><br>
            <input id="mssv" type="text" name="mssv" required>
        </div>
        <div>
            <label for="lopmonhoc">Lớp môn học:</label><br>
            <input id="lophonhoc"  name="lopmonhoc" required>
        </div>
        <div>
            <label for="gender">Giói tính:</label><br>
            <input id="gender"  name="gender" required>
        </div>
        <div>
            <button type="submit">Đăng ký</button>
        </div>
    </form>
    <div><a href="{{ route('auth.login') }}">Có tài khoản?</a></div>
    <a href="{{ route('home') }}">Quay lại?</a>
</body>
</html>