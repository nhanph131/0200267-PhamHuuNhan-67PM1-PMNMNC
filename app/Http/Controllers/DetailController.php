<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    //
    public function GetDetail(){
        $id = '123';
        return view(view: 'product.product_view', data: ['id' => $id]);
    }
}
