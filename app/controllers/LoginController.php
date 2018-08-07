<?php
class LoginController extends Controller{
    public function index(){
       $this->loadView('login','login');
    }
    public function login(){    //Function for login
        if($_POST){
            $username = filter_input(INPUT_POST,'username');
            $password = filter_input(INPUT_POST,'password');
            if(preg_match('/^[a-z0-9]{4,}$/',$username) and preg_match('/^.{6,}$/',$password)){
               //$passwordHash = hash('sha512',$password); //Ovo treba ukljuciti
                 $user = UserModel::getActiveUserByUsernameAndPassHash($username,$password);
                 if($user){
                    
                    Session::set('user_id',$user->user_id);
                    Session::set('username',$user->username);
                    Session::set('status',$user->status);
                    Session::set('user_ip',filter_input(INPUT_SERVER,'REMOTE_ADDR',FILTER_FLAG_IPV4));
                    Session::set('user_agent',filter_input(INPUT_SERVER,'HTTP_USER_AGENT'));
                    if(Session::get('status')==3){
                        Misc::redirect('admin');    
                    }
                    Misc::redirect('products');
                 }else{
                    Misc::redirect('');
                 }
            }else{
                echo "Invalid user name";
            }
        }
    }
    
    public function logout(){       //Function for logout
        Session::end();
        header('Location: home');
    }
}