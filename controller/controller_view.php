<?php
include "model/typespace.php";

class ControlView {

    public static function load(){
        require "view/page_main.php";
    }

    public static function load_login(){
        require "view/page_login.php";
    }

    public static function render(){
        $content = Typespace::generate();
        return $content;
    }

}

?>