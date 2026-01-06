<?php

include "controller/controller_view.php";
include "controller/controller_user.php";

if (isset($_SESSION["user_id"])) {
$user_set = true;
} else {
$user_set = false;
}


$content = ControlView::render();
require "view/page_main.php";

?>