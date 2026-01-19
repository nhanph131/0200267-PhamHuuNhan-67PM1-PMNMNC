<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>==============Thông tin sinh viên=========</h1>
    <h2>Họ tên: {{ $name }}</h2>
    <h2>MSSV: {{ $mssv }}</h2>
    <h2>Lớp: 67PM1</h2>
    <a href="{{ route('home') }}">⬅ Quay về danh sách</a>
</body>
</html>