<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Admin\Products\Service\ProductService;
use App\Http\Controllers\Controller;
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

        return view('admin.pages.products.add',compact('product',$product,'dataParam',$dataParam,'dataColor',$dataColor));

    }

    public function get_product($id) {

        $product = $this->productService->getById($id);


        return view('admin.pages.products.get',compact('product'));
    }
}
