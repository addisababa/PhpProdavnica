<?php
class ContactController extends Controller{
	public function index(){

		if(!Session::exists('user_id')){
            Misc::redirect('home');
        }else{
            $this->loadView('contact','index');
        }
	}
}