<?php
include "model/conn.php";

class Typespace{

    public static function generate(){
        $content = "";
        $sql = "SELECT * FROM tasks";
        foreach ($conn->query($sql) as $row){
            $content += $row["task"] + " ";
        }
        return $content;
    }
}