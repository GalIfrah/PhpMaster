 <?php

  class dbService{



    static function MysqlConnect($host, $username, $password, $dbname){


        if($dbname != null){

            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        }


        else{

            $conn = new PDO("mysql:host=$host", $username, $password);
        }


        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        return $conn;
    }


    static function createDB(){

        $host="localhost";

        $root="root";
        $root_password="";

        $user='newuser';
        $pass='newpass';
        $db="newdb";

        try {
            $dbh = new PDO("mysql:host=$host", $root, $root_password);

            $dbh->exec("CREATE DATABASE `$db`;
                        CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';
                        GRANT ALL ON `$db`.* TO '$user'@'localhost';
                        FLUSH PRIVILEGES;")
            or die(print_r("gal", false));

        } catch (PDOException $e) {
            die("DB ERROR: ". $e->getMessage());
        }


    }


     function createTable(){

     }


     function insert(){
     }

}

