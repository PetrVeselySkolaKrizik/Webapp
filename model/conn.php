<?php
class connect_pdo {
    protected $dbh;

    public function __construct() {
        try {
            $db_host = '127.0.0.1';
            $db_name = 'petrvesely';
            $db_user = 'petrvesely';
            $user_pw = 'kaiYe7ahth';

            // Assign directly to $this->dbh
            $this->dbh = new PDO("mysql:host=$db_host;port=3306;dbname=$db_name", $db_user, $user_pw);  
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->exec("SET CHARACTER SET utf8");
        } catch (PDOException $err) {  
            die("Database connection error:" . $err->getMessage()); 
        }
    }

    public function dbh() {
        return $this->dbh;
    }
}

// Initialize the connection
$database = new connect_pdo();
$con = $database->dbh();