<?php
class Typespace {
    public static function generate() {
        require_once "model/conn.php";
        $content = "";
        $sql = "SELECT word FROM words"; // Better to select specific column
        $qry = $con->prepare($sql);
        $qry->execute();

        // Fix: Use $qry instead of $get, and fetch directly in the loop
        while ($row = $qry->fetch(PDO::FETCH_ASSOC)) {
            $content .= $row["word"] . " ";
        }

        return trim($content);
    }
}