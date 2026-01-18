<?php

include "model/conn.php";
include "controller/controller_user.php";
include "controller/controller_view.php";

$ctrlusr = new ControlUser();
$ctrlviw = new ControlView();

session_start();

if (isset($_GET["page"])) {
    switch ($_GET["page"]) {
    case"profile":
        require "view/page_profile.php";
        break;
    case "login":
        require "view/page_login.php";
        break;
    case "logging_in":
        switch ($result = $ctrlusr->login($con, $_POST["username"], $_POST["password"])) {
        case "login":
            header ("Location:index.php");
            break;
        case "password":
            $error = "Incorrect password";
            require "view/page_login.php";
            break;
        case "user":
            $error = "Incorrect username";
            require "view/page_login.php";
            break;
        }
        break;
    case "logout":
        $ctrlusr->logout();
        header ("Location:index.php");
        break;
    }
} else {
    $content = $ctrlviw->generate($con);
    require "view/page_main.php";
}
