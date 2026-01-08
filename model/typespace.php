<?php
class Typespace {
    public static function get($con) {
        $words = [];
        $sql = "SELECT word FROM words"; // Better to select specific column
        $qry = $con->prepare($sql);
        $qry->execute();

        // Fix: Use $qry instead of $get, and fetch directly in the loop
        while ($row = $qry->fetch(PDO::FETCH_ASSOC)) {
            $words[] = $row["word"];
        }

        return $words;
    }

}