<?php
namespace Libs\Database;
use PDOException;
class UsersTable
{ 
    private $db;

    public function __construct(MySQL $mysql)
    {
        $this->db =$mysql->connect();
    }

    public function insert($data)
    {
        try{
            $statement = $this->db->prepare("INSERT INTO users (name, email, phone, address, password, created_at) VALUES (:name, :email, :phone, :address, :password, NOW())");

            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $statement->execute($data);
            return $this->db->lastInsertId();
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }

    public function getAll()
    {
        try{
            $result  = $this->db->query(
                "SELECT users.*, roles.name AS role, roles.value
                FROM users LEFT JOIN roles 
                ON users.role_id = roles.id"
            );
            $rows = $result->fetchAll();
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
            exit;
        }
    }

    public function findByEmailAndPassword($email, $password)
    {
        try{
            // $statement = $this->db->prepare("SELECT users.*, roles.name AS role,roles.value FROM users LEFT JOIN roles ON users.role_id = roles.id WHERE users.email = :email AND users.password = :password"); 
            // $statement->execute(["email" => $email, "password" => $password]);
            // $user = $statement->fetch();
            // if($user){
            //     return $user;
            // }
            // return false;


            $statement = $this->db->prepare("SELECT users.*, roles.name AS role,roles.value FROM users LEFT JOIN roles ON users.role_id = roles.id WHERE users.email = :email");
            $statement->execute(["email" => $email]);
            $user = $statement->fetch();
            
            if($user){
                if(password_verify($password, $user->password)){
                    return $user;
                }
            }
            return false;
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }

    //clear
    public function clear()
    {
        $this->db->query("TRUNCATE TABLE users");
    }

    public function suspended($id){
        try{
            $statement = $this->db->prepare("UPDATE users SET suspended=1 WHERE id=:id");
            $statement->execute(["id" => $id]);
            return $statement->rowCount();
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }

    public function unsuspended($id){
        try{
            $statement = $this->db->prepare("UPDATE users SET suspended=0 WHERE id=:id");
            $statement->execute(["id" => $id]);
            return $statement->rowCount();
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }

    public function changeRole($id, $role){
        try{
            $statement = $this->db->prepare("UPDATE users SET role_id=:role WHERE id=:id");
            $statement->execute(["id"=>$id, "role" => $role]);
            return $statement->rowCount();
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }       
    }
    
    public function deleteRole($id){
        $statement = $this->db->prepare("DELETE FROM users WHERE id=:id");
        $statement->execute(["id"=>$id]);
        return $statement->rowCount();
    }


}