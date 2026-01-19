<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Trang chủ</h1>
    <h2>Chọn page:</h2>
    <div><a href="{{ route('product.index') }}">Danh sách product</a></div>
    <div><a href="{{ route('product.add') }}">Trang thêm sản phẩm</a> <br></div>
    <div><a href="{{ route('product.show', '123') }}">Xem sản phẩm mặc định</a></div>
    <div><a href="{{ route('product.show', '120') }}">Xem sản phẩm sai</a></div>
    <div><a href="{{ route('sinhvien.info') }}">Xem thông tin sinh viên mặc định</a> <br></div>
    <div><a href="{{ route('sinhvien.info', ['Pham Huu Nhan', '0200267']) }}">Xem thông tin sinh viên real</a></div>
    <a href="{{ route('banco', 7) }}">Bàn cờ n=7</a> <br>
</body>
</html>