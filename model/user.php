<?php

class User{

    public static function registered($username){
        require_once "conn.php";
        $sql = "SELECT id FROM user WHERE username=:username"; // Better to select specific column
        $qry = $con->prepare($sql);
        $qry->bindParam(":username", $usernamem, PDO::PARAM_STR);
        $qry->execute();

        if($qry->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }
}