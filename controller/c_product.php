<?php
include "models/m_product.php";
class c_product{
    public function index(){

        $m_product = new m_product();
         $products = $m_product->readProduct();
//        $m_product->readProduct(0,5);
//        $productsSideBar = $m_product->readProduct(0,3);
//        print_r($productsSideBar);
//        die();
        $view  = "views/products/v_product.php";
        include "templates/products/layouts.php";
    }



}
