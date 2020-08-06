<?php
    class AdminUser{
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
    
?>