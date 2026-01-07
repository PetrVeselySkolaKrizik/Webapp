<?php
require_once (dirname(__DIR__) ."/model/user.php");


if (!empty($_POST["usr"])&&!empty($_POST["pswd"])&&!empty($_POST["pswdvrf"])){
    $usr=trim($_POST["usr"]);
    $pswd=trim($_POST["pswd"]);
    $pswdvrf=trim($_POST["pswdvrf"]);

    $registered= User::registered($usr);
    if($registered){

        $data = User::get_user_data($usr);
        if($data->rowCount()> 0){

        if($pswd == $data["password"]){

            $_SESSION["user_id"] = $data["id"];
            echo $data['username'];
            exit();

        } else{
            header("Location: /index.php?logging_in=true");
            exit;
        }
    } else {
        header("Location: /index.php?logging_in=true");
            exit;
    }

    }else{
        echo "Mium";
    }
} else {
    header("Location: /index.php?logging_in=true");
    exit;
}
