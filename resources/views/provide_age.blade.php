<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age?</title>
</head>
<body>
    <form action="{{ route('auth.saveage') }}">
        <label for="age">Nhập tuổi:</label>
        <input type="text" id="age" name="age">
        <button type="submit">Gửi</button>
    </form>

    <a href="{{ route('home') }}">Quay lại?</a>
</body>
</html>