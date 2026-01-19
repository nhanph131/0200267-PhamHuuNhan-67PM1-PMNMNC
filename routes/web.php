<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('pages.login');
});

// Route::get('/pages/error', function () {
//     return view('pages.error404');
// })->name('pages.error');
Route::fallback(function () {
    return view('errors.404');
});

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = null, $mssv = null) {

    if ($name === null) {
        $name = 'Luong Xuan Hieu';
    }

    if ($mssv === null) {
        $mssv = '123456';
    }

    return view('sinhvien.index', [
        'name' => $name,
        'mssv' => $mssv
    ]);

})->name('sinhvien.info');

Route::prefix('product')->group(function () {

    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id}', function ($id) {
        return view('product.product_view', ['id' => $id]);
    })->name('product.show');

});

Route::get('/banco/{n}', function ($n) {
        return view('banco', ['size' => $n]);
    })->name('banco');