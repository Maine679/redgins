<?php

namespace App\Http\Controllers\Admin\Products\Service;

use App\Http\Controllers\Admin\Products\Repository\ProductRepository;
use App\Http\Controllers\Admin\Products\Utils\CommonBody;
use App\Http\Controllers\Admin\Products\Utils\ListBody;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductService extends Controller
{
    private $productRepository;
    private $productCreateBody;

    public function __construct(ProductRepository $productRepository,CommonBody $productCreateBody, ListBody $productListBody)
    {
        $this->productRepository = $productRepository;
        $this->productCreateBody = $productCreateBody;
    }

    public function getById(int $id) :array {
        $product = $this->productRepository->get_by_id($id);

        return $this->productCreateBody->create($product);
    }
}
