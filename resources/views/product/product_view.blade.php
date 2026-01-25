<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <style>
        .container {
            width: 400px;
            border: 1px solid #333;
            padding: 16px;
        }
        .row {
            margin-bottom: 8px;
        }
        .label {
            font-weight: bold;
        }
        a {
            display: inline-block;
            margin-top: 12px;
        }
    </style>
</head>
<body>

@php
    $products = [
        1 => [
            'id' => '123',
            'name' => 'iPhone 15', 
            'price' => 25000000,
            'quantity' => 10,
            'description' => 'Điện thoại Apple',
            'image' => 'storage/products/iphone.jpg'
        ],
        2 => [
            'id' => '124',
            'name' => 'Samsung S24',
            'price' => 22000000,
            'quantity' => 5,
            'description' => 'Điện thoại Samsung',
            'image' => 'storage/products/samsung.jpg'
        ],
        3 => [
            'id' => '125',
            'name' => 'Xiaomi 14',
            'price' => 18000000,
            'quantity' => 8,
            'description' => 'Điện thoại Xiaomi',
            'image' => 'storage/products/sony.jpg'
        ],
    ];

    $product = null;

    foreach ($products as $p) {
        if ($p['id'] == $id) {
            $product = $p;
            break;
        }
    }

    if (!$product) {
        abort(404);
    }
@endphp
    <div class="container">
        <h3>{{ $product['name'] }}</h3>

        <div class="row">
            <span class="label">Giá:</span>
            {{ number_format($product['price']) }} VNĐ
        </div>

        <div class="row">
            <span class="label">Số lượng:</span>
            {{ $product['quantity'] }}
        </div>
        <div class="row">
             <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" style="height: 160px;">
        </div>
        <div class="row">
            <span class="label">Mô tả:</span>
            {{ $product['description'] }}
        </div>

        <a href="{{ route('product.index') }}">⬅ Quay về danh sách</a>
    </div>
</body>
</html>
