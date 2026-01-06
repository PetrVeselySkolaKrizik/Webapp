<?php

include "controller/controller_view.php";
$viwc = new ControlView();

if (isset($_SESSION["user_id"])) {
$user_set = true;
} else {
$user_set = false;
}

if (isset($_GET["logging_in"])) {
require "view/page_login.php";
} else {
$content = ControlView::render();
require "view/page_main.php";
}

?>