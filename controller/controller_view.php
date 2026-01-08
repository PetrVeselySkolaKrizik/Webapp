<?php
include "model/typespace.php";

class ControlView {

    public static function load(){
        require "view/page_main.php";
    }

    public static function load_login(){
        require "view/page_login.php";
    }

    public static function render($con){
        $content = "";
        $words = Typespace::get($con);
        for($i = 0; $i < count($words)*10; $i++){
            $rnd = rand(1,count($words));
            $content .= $words[$rnd]. " ";
        }
        return trim($content);
    }

}

?>