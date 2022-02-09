<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Admin\Products\Service\ProductService;
use App\Http\Controllers\Controller;
use App\Models\categories_product;
use App\Models\Models\Categories\Categories;
use App\Models\Models\Forms\Forms;
use App\Models\Models\Models\Parameters\Parameters;
use Illuminate\Http\Request;
use App\Models\Models\Colours\Colors;

class Products extends Controller
{

    /**
     * @var ProductService
     */
    private ProductService $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function add_product()
    {
//        $product = new \App\Models\Models\Products\Products();
//        $product->name = 'Сумка пельмень на завтрак';
//        $product->price = 950;
//        $product->colour_id = 2;
//        $product->form_id = 1;
//        $product->season_id = 2;
//        $product->categories_id = 8;
//        $product->sale = 0;
//
//        $product->save();
        $product = new \App\Models\Models\Products\Products();

        $objParam = new Parameters();
        $dataParam = $objParam->all();

        $objColor = new Colors();
        $dataColor = $objColor->all();

        $objForm = new Forms();
        $dataForm = $objForm->all();

        $objCategories = new categories_product();
        $dataCategories = $objCategories->all();

        $objMenu = new Categories();
        $dataMenu = $objMenu->all();


        return view('admin.pages.products.add',compact('product',$product,'dataParam',$dataParam,'dataColor',$dataColor, 'dataCategories', $dataCategories, 'dataForm',$dataForm, 'dataMenu',$dataMenu));

    }

    public function get_product($id) {

        $product = $this->productService->getById($id);


        return view('admin.pages.products.get',compact('product'));
    }

    public function action_product() {
//      dd($_POST);
      $name = $_POST["name"];
      $color = $_POST["color"];
      $form = $_POST["form"];
      $season = $_POST["season"];
      $price = $_POST["price"];
      $discount = $_POST["discount"];
      $photo = $_POST["photo"];
      $categories = $_POST["categories"];
//      $ = $_POST[""];

//"name" => "сумка1"
//"color" => "5"
//"form" => "5"
//"season" => "2"
//"price" => "1000"
//"discount" => "7"
//"photo" => ""
//"categories" => "9"



    }

}
