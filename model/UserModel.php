<?php
require_once 'BaseModel.php';
class UserModel extends BaseModel
{
        function getUserByEmail($email){
            $query = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
            $query->execute([$email]);
            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        } 
        
        function saveUser($email,$password){
            $query = $this->db->prepare("INSERT INTO usuario(email,password) VALUES (?,?)");
            $query->execute([$email,$password]);
        }
}
