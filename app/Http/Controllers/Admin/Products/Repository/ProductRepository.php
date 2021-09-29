<?php

namespace App\Http\Controllers\Admin\Products\Repository;

use App\Http\Controllers\Controller;
use App\Models\Models\Products\Products;
use Illuminate\Http\Request;

class ProductRepository extends Controller
{
    public function get_by_id(int $id): Products {
        return Products::findOrFail($id);
    }

    public function get_latest(int $count) {
        return Products::latest()->paginate($count);
    }
}
