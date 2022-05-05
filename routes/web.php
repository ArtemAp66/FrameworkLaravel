<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-name', function () {
    return 'Старовойтов Артём Павлович';
});

Route::get('/my-friend', function () {
    return 'Пивоваров Вадим Павлович';
});

Route::get('/get-friend/{name}', function ($name = 'Vadim228') {
    return $name;
});

Route::get('/my-city/{city}', function ($city = 'Vadim228') {
    return $city;
});

Route::get('/level/{lvl}', function ($lvl) {
    if ($lvl > 0 && $lvl < 26)
        return 'Новичок';
    if ($lvl > 25  && $lvl < 51)
        return 'Специалист';
    if ($lvl > 50 && $lvl < 76)
        return 'Босс';
    if ($lvl > 75 && $lvl < 98)
        return 'Старик';
    if ($lvl == 99)
        return 'Король';
});

# Создаем правило проверки на прослойку
# Внутри group будут маршруты
Route::middleware('validationToken')->group(function () {
    Route::get('project', function (){ return 'Project One';});
});

# Прописали маршрут до MainController метода test
# ССылка http://localhost/main
Route::get('main', [MainController::class, 'test']);

Route::get('ip', [MainController::class, 'index']);

# Маршрут с параметрами для id пользователя
Route::get('user/{id}', [MainController::class, 'user'])->whereNumber('id');

Route::get('main', function (){
   return view('viewTemplate');
});




