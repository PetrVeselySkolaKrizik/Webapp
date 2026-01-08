<?php

if (!isset($_SESSION['active'])){
    session_start();
    $_SESSION['active'] = true;
}

include "controller/controller_view.php";
require "model/conn.php";
include "model/user.php";

$viwc = new ControlView();

if (isset($_GET["login"])) {
require "view/page_login.php";
} else {
echo $_SESSION["user_id"];
$content = ControlView::render($con);
require "view/page_main.php";
}

?>