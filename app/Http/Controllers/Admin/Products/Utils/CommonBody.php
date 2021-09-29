<?php

namespace App\Http\Controllers\Admin\Products\Utils;

use App\Http\Controllers\Controller;
use App\Models\Models\Products\Products;
use Illuminate\Http\Request;

class CommonBody extends Controller
{
    private $product;

    public function __construct() {
        $this->product = [];
    }

    public function create(Products $products): array {

        $this->set_id('id',$products);
        $this->set_name('name',$products);
        $this->set_price('price',$products);
        $this->set_colour_id('colour_id',$products);
        $this->set_form_id('form_id',$products);
        $this->set_season_id('season_id',$products);
        $this->set_created_at('created_at',$products);
        $this->set_updated_at('updated_at',$products);
        $this->set_categories_id('categories_id',$products);
        $this->set_sale('sale',$products);

        return $this->product;
    }

    private function get_id($key, $product): int {
        return (int) $product->{$key};
    }
    private function get_name($key, $product): string {
        return (string) $product->{$key};
    }
    private function get_price($key, $product): int {
        return (int) $product->{$key};
    }
    private function get_colour_id($key, $product): int {
        return (int) $product->{$key};
    }
    private function get_form_id($key, $product): int {
        return (int) $product->{$key};
    }
    private function get_season_id($key, $product): int {
        return (int) $product->{$key};
    }
    private function get_created_at($key, $product) {
        return $product->{$key};
    }
    private function get_updated_at($key, $product) {
        return $product->{$key};
    }
    private function get_categories_id($key, $product): int {
        return (int) $product->{$key};
    }
    private function get_sale($key, $product):int {
        return (int) $product->{$key};
    }


    private function set_id($key,$product):void {
        $this->product[$product->id][$key] = $this->get_id($key,$product);
    }
    private function set_name($key,$product):void {
        $this->product[$product->id][$key] = $this->get_name($key,$product);
    }
    private function set_price($key,$product):void {
        $this->product[$product->id][$key] = $this->get_price($key,$product);
    }
    private function set_colour_id($key,$product):void {
        $this->product[$product->id][$key] = $this->get_colour_id($key,$product);
    }
    private function set_form_id($key,$product):void {
        $this->product[$product->id][$key] = $this->get_form_id($key,$product);
    }
    private function set_season_id($key,$product):void {
        $this->product[$product->id][$key] = $this->get_season_id($key,$product);
    }
    private function set_created_at($key,$product):void {
        $this->product[$product->id][$key] = $this->get_created_at($key,$product);
    }
    private function set_updated_at($key,$product):void {
        $this->product[$product->id][$key] = $this->get_updated_at($key,$product);
    }
    private function set_categories_id($key,$product):void {
        $this->product[$product->id][$key] = $this->get_categories_id($key,$product);
    }
    private function set_sale($key,$product):void {
        $this->product[$product->id][$key] = $this->get_sale($key,$product);
    }
}
