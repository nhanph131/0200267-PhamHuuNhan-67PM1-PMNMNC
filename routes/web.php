<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckTimeAccess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('pages.login');
});


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

Route::prefix('product')->middleware([CheckAge::class])->group(function () {

    Route::get('/', [ProductController::class, 'index'])->name('product.index')->middleware([CheckTimeAccess::class]);

    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    Route::get('/{id}', [DetailController::class, 'GetDetail'])->name('product.show');

});

Route::get('/banco/{n}', function ($n) {
        return view('banco', ['size' => $n]);
    })->name('banco');

Route::get('/age', function () {
        return view('provide_age');
    })->name('age');

Route::prefix('auth')->group(function (){
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::post('/adduser', [AuthController::class, 'adduser'])->name('auth.adduser');

    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');

    Route::post('/saveage', [AuthController::class, 'saveage'])->name('auth.saveage');
});