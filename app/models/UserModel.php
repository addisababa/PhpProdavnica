<?php
class UserModel extends ActivRecord{
    public $user_id;
    public $name;
    public $email;
    public $address;
    public $br_tel;
    public $username;
    public $password;
    public $status;
	public static $table = "user";
	public static $key = "user_id";

    public static function getActiveUserByUsernameAndPassHash($username,$passwordHash){
        $sql = 'select * from user where username = ? and password = ? ;';
        $prep = DB::getInstance()->prepare($sql);
        $prep->bindParam(1, $username);
        $prep->bindParam(2, $passwordHash);

        //$prep = DB::getInstance()->prepare($sql);
        $prep->execute();
       // $prep->setFetchMode(PDO::FETCH_CLASS,get_called_class());//Ovde mozda ima greska
        return $prep->fetch(PDO::FETCH_OBJ);
    }
}