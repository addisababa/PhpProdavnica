<?php
class CategoriesModel extends ActivRecord{
	public $category_id;
	public $name;
	public $description;
	public static $table = "categories";
	public static $key = "category_id";
}