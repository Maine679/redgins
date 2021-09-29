<?php

use App\Models\Models\Colours\Colors;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
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
    return view('main');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/admin/products/product/add', [\App\Http\Controllers\Admin\Products\Products::class,'add_product']);
Route::get('/admin/products/product/edit_color', function () {
    $objColor = new App\Models\Models\Colours\Colors();
    $dataColor = $objColor->all();

    return view('admin.products.edit_color', compact('dataColor',$dataColor));
});

Route::post('/admin/action/edit_color', function () {

    $select = $_POST['select_color'];
    $colorName = $_POST['colorName'];
    $productId = $_POST['productId'];
    $colorValue = $_POST['color'];

    $objColor = new App\Models\Models\Colours\Colors();

    if($select == -1) { //Добавляем новый цвет.

        $objColor->name = $colorName;
        $objColor->color = $colorValue;
        $objColor->save();

    } else { //Редактируем существующий цвет. Крутотенюшка!
        $color = $objColor->where('id',$productId)->first();
        $color->color = $colorValue;
        $color->name = $colorName;
        $color->save();
    }

    return Redirect::to('/admin/products/product/edit_color');
});


Route::get('/admin/products/product/edit_color', function () {
    $objParam = new App\Models\Models\Models\Parameters\Parameters();
    $dataParam = $objParam->all();





    return view('admin.products.edit_color', compact('$dataParam',$$dataParam));
});

Route::post('/admin/action/edin_parameter',function() {
    dd('epit_parameter');
});


Route::get('/admin/products/product/{id}',[\App\Http\Controllers\Admin\Products\Products::class,'get_product']);

