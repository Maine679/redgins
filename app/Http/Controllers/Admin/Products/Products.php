<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Admin\Products\Service\ProductService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

//        return "Запись добавлена.";

        return view('admin.products.add',compact('product'));

    }

    public function get_product($id) {

        $product = $this->productService->getById($id);

        return view('admin.products.get',compact('product'));
    }
}