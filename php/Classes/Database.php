<?php 

    class Database {
        private $database;
        function __construct(){
            $ini_file = parse_ini_file('/home3/yqepxzmy/db.ini');
            $this->$database = mysqli_connect ("localhost", $ini_file['username'], $ini_file['password'], $ini_file['db'])
            or die ('I cannot connect to the database.');
            echo "created class";
        }

        function get_database(){
            return $this->$database;
        }



    }

    // $sql = "show tables";
    // $showresult = mysqli_query($db, $sql);
    // if($showresult){
    //     while($table = mysqli_fetch_array($showresult)) { // go through each row that was returned in $result
    //         echo("Table: " . $table[0] . "<BR>");    // print the table that was returned on that row.
    //     }
    //     echo "Tables shown <BR>";
    // } else{
    //     echo "ERROR: Not able to execute $showresult. " . mysqli_error($db) . "<BR>";
    // }
    
?>