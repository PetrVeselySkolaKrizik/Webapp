<?php

try {
        $dbhost = '127.0.0.1:3306';
        $dbname='petrvesely';
        $dbuser = 'petrvesely';
        $dbpass = 'kaiYe7ahth';
        $connect = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    }
   catch (PDOException $e) {
        echo "Error : " . $e->getMessage() . "<br/>";
        die();
    }