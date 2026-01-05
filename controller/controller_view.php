<?php
include "model/typespace.php";

class ControlView {

    public static function load(){
        require "view/page_main.php";
    }

    public static function render(){
        return Typespace::generate();
    }

}

?>