<?php
class Model
{
    private $database;
    public function __construct()
    {
        $this->database = new PDO('mysql:host=localhost; dbname=afrika; charset = utf8', 'root', '');
    }
    public function loginAdmin($name,$password){
        $query="SELECT * FROM admin";
        $stmt = $this->database->prepare($query);
        $stmt -> execute();
        $result=$stmt -> fetchAll(PDO::FETCH_ASSOC);
        if(empty($result)){
          $password=password_hash($password,PASSWORD_DEFAULT);
          $query="INSERT INTO admin (login,pass) VALUES(:name ,:password)";
          $stmt = $this->database->prepare($query);
          $stmt -> execute(
            [
                'name' => $name,
                'password'=> $password
            ]
          );
        }
        else{
            if($name==$result[0]['login'] && password_verify($password,$result[0]['pass'])){
               return $result;  
            }
        }
      return [];
    }
}
