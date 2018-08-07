<?php
class AdminController extends Controller{
    public function index()
    {
        if(Session::get('status')!=3){
            Misc::redirect('');
        }else{
            $searchFild = filter_input(INPUT_POST,'search');
            $searchValue = trim($searchFild," "); 
            if(isset($searchValue) && preg_match('/^[A-z0-9 \-]+$/',$searchValue)){
                $param =" where name like '%". $searchValue ."%'";
                $product = ProductsModel::getAll($param);
                $this->loadView('admin','index',$product);
            }else{
                $pr = ProductsModel::getAll();
                $this->loadView('admin','index',$pr);
            }
        }
    }
    public function productCat($param){
        if(Session::get('status')!=3){
            Misc::redirect('');
        }else{
            $searchFild = filter_input(INPUT_POST,'search');
            $searchValue = trim($searchFild," "); 
            if(isset($searchValue) && preg_match('/^[A-z0-9 \-]+$/',$searchValue)){
                $param =" where name like '%". $searchValue ."%'";
                $product = ProductsModel::getAll($param);
                $this->loadView('admin','index',$product);
            }else{
                $products = ProductsModel::getAll(" where category = {$param}");
                $this->loadView("admin","products",$products);
            }
        }
    }
    public function update($id){
        if(Session::get('status')!=3){
            Misc::redirect('');
        }else{
            if($_POST){
                print_r($_POST);
                print_r($_FILES);
                
                // $product = ProductsModel::get($id);
                // $product->name = filter_input(INPUT_POST,'name');
                // $product->image = 'J0460_MG4234.jpg';
                // $product->price = filter_input(INPUT_POST,'price');
                // $product->category = 2;
                // $product->update(); 
                //Misc::redirect('admin');
            }else{
                $pr = ProductsModel::get($id);
                $this->loadView('admin','update',$pr);
            }
        }
            
    }

    public function delete($id){
        
    }
}