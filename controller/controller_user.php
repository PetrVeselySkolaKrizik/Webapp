<?php
include (dirname(__DIR__) ."/model/user.php");
require (dirname(__DIR__) ."/model/conn.php");


if (!empty($_POST["usr"])&&!empty($_POST["pswd"])&&!empty($_POST["pswdvrf"])){
    $usr=trim($_POST["usr"]);
    $pswd=trim($_POST["pswd"]);
    $pswdvrf=trim($_POST["pswdvrf"]);

    $User = new User();
    //error starts here
    $registered= $User->registered($con, $usr);
    if($registered){

        $data = $User->get_user_data($con, $usr);
        
        if($pswd == $data["password"]){

            $_SESSION["user_id"] = $data["id"];
            header('Location: /index.php');
            exit;

        } else{
            header("Location: /index.php?login=true");
            exit;
        }

    }else{
        echo "Mium";
    }

    //ends here - probably the call function
} else {
    header("Location: /index.php?login=true");
    exit;
}
