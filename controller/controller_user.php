<?php
require_once "model/user.php";

if (!empty($_POST["usr"])||!empty($_POST["pswd"])||!empty($_POST["pswdvrf"])){
    $usr=trim($_POST["usr"]);
    $pswd=trim($_POST["pswd"]);
    $pswdvrf=trim($_POST["pswdvrf"]);
    $registered=User::get($usr);
    echo $registered;
} else {
    header("Location: /index.php?logging_in=true");
    exit;
}