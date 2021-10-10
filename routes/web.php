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

//Route::group(['prefix' => '/'], function () {
  Route::get('/',                     function () {return view('public.pages.index');})->name('index-page');
  Route::get('/about',                function () {return view('public.pages.about');});
  Route::get('/services',             function () {return view('public.pages.services');});
  Route::get('/portfolio',            function () {return view('public.pages.portfolio');});
  Route::get('/contact',              function () {return view('public.pages.contact');});
//});


//Route::get('/about', function () {
//    return view('public/pages/about');
//});
//Route::get('/contacts', function () {
//    return view('public/pages/contacts');
//});
//Route::get('/delivery', function () {
//    return view('public/pages/delivery');
//});

Route::group(['prefix' => 'admin-panel'], function () {
//    Route::get('/',    [\App\Http\Controllers\AdminController::class, 'IndexPage'])->name('admin-index-page');
    Route::get('/',    function () {return view('admin.pages.index');})->name('admin-index-page');
});

Route::get('/admin/products/product/add', [\App\Http\Controllers\Admin\Products\Products::class,'add_product']);

//работа с цветами
Route::get('/admin/products/product/edit_color', function () {
  $objColor = new App\Models\Models\Colours\Colors();
  $dataColor = $objColor->all();

  return view('admin.pages.products.edit_color', compact('dataColor',$dataColor));
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

//Работа с параметрами (дополнительные характеристики объектов, можно добавлять)
Route::get('/admin/products/product/edit_param', function () {
    $objParam = new App\Models\Models\Models\Parameters\Parameters();
    $dataParam = $objParam->all();

    return view('admin.pages.products.edit_parameter', compact('dataParam',$dataParam));
});

Route::post('/admin/action/edin_parameter',function() {
    dd('edit_parameter');
});


Route::get('/admin/products/product/{id}',[\App\Http\Controllers\Admin\Products\Products::class,'get_product']);

