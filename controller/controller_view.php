<?php


class ControlView {

    public function generate($con){

        include "model/text.php";
        $text = new Text();
        $words = $text->words($con);
        $content = "";
        $lastRnd = -1;

        for ($i = 0; $i < 99; $i++) {

            $hi = $i + 1;
            do {
                $rnd = rand(0, count($words) - 1);
            } while ($rnd == $lastRnd);

            //this is where the magic happens

                $exploded = str_split($words[$rnd]);
                $content .= "<div class=\"word";
                if ($i == 0){
                    $content .= " active";
                }
                $content .= "\" data-wordindex=\"" . $hi . "\">";

                for ($j = 0; $j < count($exploded); $j++) {
                    $content .= "<p>" . $exploded[$j] . "</p>";
                }
                $content .= "</div>";

            //end of magic

            $lastRnd = $rnd;
        }

        return $content;
    }
}