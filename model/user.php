<?php
class User{

    public static function registered($con, $username){
        $sql = "SELECT * FROM user WHERE username=:username"; // Better to select specific column
        $qry = $con->prepare($sql);
        $qry->bindParam(":username", $username, PDO::PARAM_STR);
        $qry->execute();

        return (bool)$qry->fetchColumn();
    }

    public static function get_user_data($con, $username){
        $sql = "SELECT * FROM user WHERE username = :username";
        $qry = $con->prepare($sql);
        $qry->bindParam(":username", $username, PDO::PARAM_STR);
        $qry->execute();
        
        return $qry->fetch(PDO::FETCH_ASSOC);
    }
}