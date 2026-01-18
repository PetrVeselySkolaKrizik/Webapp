<?php

class Text{

    public function words ($con){

        $words = [];

        $sql = "SELECT * FROM word";
        $qry = $con->query($sql);

        while ($row = $qry->fetch(PDO::FETCH_ASSOC)) {
            $words[] = $row["word"];
        }
        return $words;
    }
}