<?php

class User{

    public static function get($username){
        try {
        require_once "model/conn.php";
        $sql = "SELECT id FROM user WHERE username=:username"; // Better to select specific column
        $qry = $con->prepare($sql);
        $qry->bindParam(':username', $username, PDO::PARAM_STR);
        $qry->execute();
        if($qry->rowCount() > 0){
            return true;
        }else{
            return false;
        }
        } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
        return false;
        }
    }
}