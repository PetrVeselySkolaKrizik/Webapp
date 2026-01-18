<?php

class ControlUser{
    
    function login($con, $usr, $pwd){
        include "model/user.php";
        $user = new User();
        if($user->is_registered($con, $usr)){
            if($user->login($con, $usr, $pwd)){
                return "login";
            } else{
                return "password";
            }
        } else {
            return "user";
        }
    }

    function logout(){
        $_SESSION["user_id"] = null;
    }
}