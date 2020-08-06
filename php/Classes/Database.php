<?php 

    class Database {
        private var $database;
        function __construct(){
            $ini_file = parse_ini_file('/home3/yqepxzmy/db.ini');
            $database = mysqli_connect ("localhost", $ini_file['username'], $ini_file['password'], $ini_file['db'])
            or die ('I cannot connect to the database.');
        }

        function get_database(){
            return $database;
        }

        function create_admin_user($privilege_level, $username, $email, $password, $first_name, $last_name){
            $insertSQL = "INSERT INTO AdminUser(email, username, first_name, last_name, password, privilege_level)
                                    SELECT * FROM(SELECT '$email', '$username', '$first_name', '$last_name', '$password', '$privilege_level') AS user 
                                    WHERE NOT EXISTS (SELECT email, username FROM AdminUser WHERE email = '$email' OR username = '$username')";
            $result = mysqli_query($database, $insertSQL);
            if($result){
                return 1;
            }
            else{
                return -1;
            }
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