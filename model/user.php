<?php

session_start();
class User{

    public function is_registered($con, $usr){
        $sql = "SELECT * FROM user WHERE username=:username";
        $qry = $con->prepare($sql);
        $qry->bindParam("username", $usr, PDO::PARAM_STR);
        $qry->execute();

        return (bool)$qry->fetchColumn();
    }

    public function login($con, $usr, $pwd){
        $sql = "SELECT id, password FROM user WHERE username=:username";
        $qry = $con->prepare($sql);
        $qry->bindParam("username", $usr, PDO::PARAM_STR);
        $qry->execute();

        $row = $qry->fetch(PDO::FETCH_ASSOC);

        if($row["password"] != $pwd){
            return false;
        } else {
            $_SESSION["user_id"] = $row["id"];
            return true;
        }
    }
}