<?php
class ProductsModel extends ActivRecord{
    public $product_id;
    public $name;
    public $image;
    public $price;
    public $category;
    public static $table = "products";
	public static $key = "product_id";
}