<?php
require_once 'BaseModel.php';
class UserModel extends BaseModel
{
        function getUserById(){
            $query = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
            $query->execute();
            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        } 
        
        function saveUser($email,$password){
            $query = $this->db->prepare("INSERT INTO usuario(email,password) VALUES (?,?)");
            $query->execute([$email,$password]);
        }
}
