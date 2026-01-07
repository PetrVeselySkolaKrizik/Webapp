<?php
require "conn.php";
class User{

    public static function registered($username){
        $sql = "SELECT * FROM user WHERE username=:username"; // Better to select specific column
        $qry = $con->prepare($sql);
        $qry->bindParam(":username", $username, PDO::PARAM_STR);
        $qry->execute();

        return (bool)$qry->fetchColumn();
    }

    public static function get_user_data($username){
        $sql = "SELECT * FROM user WHERE username = :username LIMIT 1";
        $qry = $con->prepare($sql);
        $qry->bindParam(":username", $username, PDO::PARAM_STR);
        $qry->execute();
        return $qry->fetch(PDO::FETCH_ASSOC);
    }
}