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
//  Route::get('/',                     function () {return view('public.pages.index');})->name('index-page');
//  Route::get('/about',                function () {return view('public.pages.about');});
//  Route::get('/services',             function () {return view('public.pages.services');});
//  Route::get('/portfolio',            function () {return view('public.pages.portfolio');});
//  Route::get('/contact',              function () {return view('public.pages.contact');});
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

//Route::group(['prefix' => 'admin-panel'], function () {
////    Route::get('/',    [\App\Http\Controllers\AdminController::class, 'IndexPage'])->name('admin-index-page');
//    Route::get('/',    function () {return view('admin.pages.index');})->name('admin-index-page');
//});


Route::get('/admin/products/product/add', [\App\Http\Controllers\Admin\Products\Products::class,'add_product']);
Route::post('/admin/action/product_add',[\App\Http\Controllers\Admin\Products\Products::class,'action_product']);


Route::get('/test',function () {

  return view('public.test');
});

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
    $action = $_POST['action'];

    $objColor = new App\Models\Models\Colours\Colors();

    if($select == -1) { //Добавляем новый цвет.

        $objColor->name = $colorName;
        $objColor->color = $colorValue;
        $objColor->save();

    } else { //Редактируем существующий цвет. Крутотенюшка!
        $color = $objColor->where('id',$productId)->first();

      if($action == -1) {

        $objProducts = new App\Models\Models\Products\Products();

        //Если цвет удаляется, то цвета товара которым он присвоен обнуляются.
        $dataProduct = $objProducts->all();
        foreach ($dataProduct as $item) {
          if($item->colour_id == $color->id) {
            $item->colour_id = -1;
            $item->save();
          }
        }
        $color->delete();

      } else {

        $color->color = $colorValue;
        $color->name = $colorName;
        $color->save();
      }
    }

    return Redirect::to('/admin/products/product/edit_color');
});

//Работа с параметрами (дополнительные характеристики объектов, можно добавлять)
Route::get('/admin/products/product/edit_parameter', function () {
    $objParam = new App\Models\Models\Models\Parameters\Parameters();
    $dataParam = $objParam->all();

    return view('admin.pages.products.edit_parameter', compact('dataParam',$dataParam));
});
Route::post('/admin/action/edit_parameter',function() {

  $select = $_POST['select_parameter'];
  $parameterName = $_POST['parameterName'];
  $productId = $_POST['productId'];
  $paramType = $_POST['select_type_parameter'];
  $action = $_POST['action'];


  $objParam = new App\Models\Models\Models\Parameters\Parameters();

  if($select == -1) { //Добавляем новый цвет.

    $objParam->name = $parameterName;
    $objParam->type = $paramType;
    $objParam->save();

  } else { //Редактируем существующий цвет. Крутотенюшка!
    $param = $objParam->where('id',$productId)->first();

    if($action == -1) {
      $param->delete();
    } else {
      $param->name = $parameterName;
      $param->type = $paramType;
      $param->save();
    }
  }
//  dd('test');

  return Redirect::to('/admin/products/product/edit_parameter');



});

//Здесь будут категории добавляться и изменяться.
Route::get('/admin/products/product/edit_menu',function () {

  $objCategories = new App\Models\Models\Categories\Categories();
  $dataCategories = $objCategories->all();

  return view('admin.pages.products.edit_menu', compact('dataCategories',$dataCategories));
});
Route::post('/admin/action/edit_menu', function () {

  $select = $_POST['select_categories'];
  $categoriesName = $_POST['categoriesName'];
  $productId = $_POST['categoriesId'];
  $parent = $_POST['parent_categories'];
  $action = $_POST['action'];

  $objCategories = new App\Models\Models\Categories\Categories();


  if($select == -1) { //Добавляем новый пункт меню.

    $objCategories->name = $categoriesName;
    $objCategories->parent_id = $parent;
    $objCategories->save();

  } else { //Редактируем существующуй пункт меню, меняем название или/и родительский пункт.

    $categories = $objCategories->where('id',$productId)->first();

    if($action == -1) {
      $parent = $categories->parent_id;

      $dataMenu = $objCategories->all();
      //Перед удалением требуется поменять родителя у вложенных категорий.
      foreach ($dataMenu as $paragraphMenu) {
        if($paragraphMenu->parent_id == $categories->id) {
          $paragraphMenu->parent_id = $categories->parent_id;
          $paragraphMenu->save();
        }
      }

      $categories->delete();
    } else {

      //Нельзя что бы пункт меню был вложен сам в себя.
      $categories->name = $categoriesName;
      if ($parent != $categories->id) {
        $categories->parent_id = $parent;
      }
      $categories->save();
    }
  }

  return Redirect::to('/admin/products/product/edit_menu');
});


Route::get('/admin/products/product/edit_categories',function () {

  $objCategories = new \App\Models\categories_product();
  $dataCategories = $objCategories->all();

  return view('admin.pages.products.edit_categories', compact('dataCategories',$dataCategories));
});
Route::post('/admin/action/edit_categories', function () {

  $select = $_POST['select_categories'];
  $categoriesName = $_POST['categoriesName'];
  $productId = $_POST['categoriesId'];
  $action = $_POST['action'];

  $objCategories = new \App\Models\categories_product();


  if($select == -1) { //Добавляем новый пункт меню.

    $objCategories->name = $categoriesName;
    $objCategories->save();

  } else {
    $categories = $objCategories->where('id',$productId)->first();

    if($action == -1) {
      $categories->delete();
    } else {
      $categories->name = $categoriesName;
      $categories->save();
    }
  }

  return Redirect::to('/admin/products/product/edit_categories');
});
Route::get('/admin/products/product/edit_form',function () {
    $objForm = new App\Models\Models\Forms\Forms();
    $dataForm = $objForm->all();


    return view('admin.pages.products.edit_form', compact('dataForm',$dataForm));
});
Route::post('/admin/action/edit_form', function () {

  $select = $_POST['select_form'];
  $formName = $_POST['formName'];
  $productId = $_POST['formId'];
  $action = $_POST['action'];

  $objForm = new App\Models\Models\Forms\Forms();


  if($select == -1) { //Добавляем новую форму

    if(!empty($formName)) {
      if(!$objForm->where('formname',$formName)->first()) {
        $objForm->formname = $formName;
        $objForm->save();
      }


    }
  } else {
    $form = $objForm->where('id',$productId)->first();

    if($action == -1) {
      $form->delete();
    } else {
      $form->formname = $formName;
      $form->save();
    }
  }

  return Redirect::to('/admin/products/product/edit_form');
});

Route::get('/admin/products/product/edit_season',function () {

  $objSeason = new \App\Models\Models\Seasons\Seasons();
  $dataSeason = $objSeason->all();

  return view('admin.pages.products.edit_season', compact('dataSeason',$dataSeason));
});

Route::get('/admin/products/product/{id}',[\App\Http\Controllers\Admin\Products\Products::class,'get_product']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

