<?php
class HomeController extends Controller{
	public function index(){
		$this->loadView('home','index');
	}
	// public function detalji($products_id){#sada moze direktno da uzima parametar bez $_GET

	// }
}