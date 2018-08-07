<?php
class RegisterController extends Controller{
    public function index(){     //Function for registration
        $this->loadView('register','index');
    }
    public function register(){
        if($_POST){
            $user = new UserModel;
                $name = filter_input(INPUT_POST,'username');
                $email = filter_input(INPUT_POST,'email');
                $address = filter_input(INPUT_POST,'address');
                $br_tel = filter_input(INPUT_POST,'br_tel');
                $username = filter_input(INPUT_POST,'username');
                $password = filter_input(INPUT_POST,'password');
                
                if(preg_match('/^[A-Za-z\'\- ]*$/',$name) and preg_match('/^[a-z0-9.@\-]*$/',$email) and preg_match('/^[A-z0-9 \-\/.\']*$/',$address) and preg_match('/^[0-9+? \/?\-?]{6,14}$/',$br_tel) and preg_match('/^[a-z0-9]{4,}$/',$username) and preg_match('/^.{6,}$/',$password)){
    
                    $user = new UserModel;
                    
                    $user->name = $name;
                    $user->email = $email;
                    $user->address = $address;
                    $user->br_tel = $br_tel;
                    $user->username = $username;
                    $user->password = $password;
                    $user->status = 1;
                    $user->save();
                    Misc::redirect('products');
        
            }else{
                Misc::redirect('');
            }
        }
    }
}