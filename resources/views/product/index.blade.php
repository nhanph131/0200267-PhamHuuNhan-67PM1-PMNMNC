<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Danh sách sản phẩm</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        img {
            width: 80px;
        }
    </style>
</head>
<body>
<a href="{{ route('home') }}">Về trang chủ</a> <br>
<h2>{{ $title }}</h2>

@php
    $products = $p_list
@endphp

<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá (VNĐ)</th>
            <th>Số lượng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $index => $product)
            <tr>
                <td>{{ $index }}</td>
                <td><a href="{{ route('product.show', $product['id']) }}">{{ $product['name'] }}</a></td>
                <td>
                    <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
                </td>
                <td>{{ number_format($product['price']) }}</td>
                <td>{{ $product['quantity'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<br>
<a href="{{ route('product.add') }}">➕ Thêm sản phẩm</a> <br>
</body>
</html>
