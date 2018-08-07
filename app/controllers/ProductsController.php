<?php
class ProductsController extends Controller{
	public function index() {
        if(!Session::exists('user_id')){
               Misc::redirect('home');
        }else{
            $searchFild = filter_input(INPUT_POST,'search');
            $searchValue = trim($searchFild," "); 
                if(isset($searchValue) && preg_match('/^[A-z0-9 \-]+$/',$searchValue)){
                    $param =" where name like '%". $searchValue ."%'";
                    $product = ProductsModel::getAll($param);
                    $this->loadView('products','index',$product);    
            }else{
                
                $pr = ProductsModel::getAll();  
                $this->loadView('products','index',$pr);
            }    
        }
    }
        
    
    public function productsCat($param){
        $searchFild = filter_input(INPUT_POST,'search');
        $searchValue = trim($searchFild," "); 
            if(isset($searchValue) && preg_match('/^[A-z0-9 \-]+$/',$searchValue)){
                $param =" where name like '%". $searchValue ."%'";
                $product = ProductsModel::getAll($param);
                $this->loadView('products','index',$product);
        }else{
        $products = ProductsModel::getAll(" where category = {$param}");
        $this->loadView("products","products",$products);
        }
    }
	public function details($id){
        $product = ProductsModel::get($id);
        $this->loadView('products','details',$product);
    }
}