<?php
    class AdminUser{
        private var current_user;
        private var current_email;
        private var current_first_name;
        private var current_last_name;

        private function generate_salt(){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $salt = '';
            for($i = 0; $i < 30; $i++){
                $salt .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $salt;
        }

        public function create_admin_user($privilege_level, $username, $email, $password, $first_name, $last_name){
            var $salt = generate_salt();
            var $hashed_password = hash_pbkdf2('haval256,5', $password, $salt, 10, 70);
            

            $insertSQL = "INSERT INTO AdminUser(email, username, first_name, last_name, password, salt, privilege_level)
                                    SELECT * FROM(SELECT '$email', '$username', '$first_name', '$last_name', '$hashed_password', '$salt', '$privilege_level') AS user 
                                    WHERE NOT EXISTS (SELECT email, username FROM AdminUser WHERE email = '$email' OR username = '$username')";
            $result = mysqli_query($database, $insertSQL);
            if($result){
                return 1;
            }
            else{
                return -1;
            }
        }

        public function delete_admin_user($deleter_privilege_level, $username_to_delete, $email_to_delete){
            if(strcmp($deleter_privilege_level, 'high')){
                $deleteSQL = "DELETE FROM AdminUser WHERE username = '$username_to_delete' AND email = '$email_to_delete'";
                $result = mysqli_query($database, $deleteSQL);
                if($result){
                    return "Delete was successful";
                }
                else{
                    return "Something went wrong while trying to delete that user.";
                }

            }
            else{
                return "You do not have the authority to delete users.";
            }

        }

        

        public function logout(){
            <?php if (isset($_GET['logout'])) {
                session_destroy();
                unset($_SESSION['email']);
                unset($_SESSION['username']);
                unset($_SESSION['first_name']);
                unset($_SESSION['last_name']);
                header("location: ../../index.php");
            } 
            ?>
        }
    }
    
?>