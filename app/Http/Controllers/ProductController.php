<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function Index(){
        $title = 'Danh sách sản phẩm?';
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
                'name' => 'Samsung S24 ngu ngục',
                'price' => 22000000,
                'quantity' => 5,
                'description' => 'Điện thoại Samsung ngu ngục',
                'image' => 'storage/products/samsung.jpg'
            ],
            3 => [
                'id' => '125',
                'name' => 'Xiaomi 14',
                'price' => 18000000,
                'quantity' => 8,
                'description' => 'Điện thoại Xiaomi',
                'image' => 'storage/products/sony.jpg'
            ]
        ];
        return view(view: "product.index", data: ['title' => $title, 'p_list' => $products]);
    }
}
