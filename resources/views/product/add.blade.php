<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm mới</h2>

<form action="{{ url('/product/') }}" method="POST">
    @csrf

    <label>Tên sản phẩm</label><br>
    <input type="text" name="name" required><br><br>

    <label>Giá</label><br>
    <input type="number" name="price" required><br><br>

    <label>Mô tả</label><br>
    <textarea name="description"></textarea><br><br>

    <button type="submit">Thêm</button>
</form>

<a href="{{ route('product.index') }}">Quay lại?</a>
</body>
</html>
