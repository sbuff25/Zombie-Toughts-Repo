<?php 

    function check_password($username_or_email, $password){
        $username_or_email = mysqli_real_escape_string($database, $username_or_email);
        $password = mysqli_real_escape_string($database, $password);


        $check_user = "SELECT username, email, first_name, last_name, salt FROM AdminUser WHERE email = '$username_or_email' OR username = '$username_or_email'";
        $result = mysqli_query($database, $check_user);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $hashed_password = hash_pbkdf2('haval256,5', $password, $row['salt'], 10, 70);
            $check_pass = "SELECT EXISTS(SELECT username FROM AdminUser WHERE ((password = '$hashed_password' AND username = '$username_or_email') OR (password = '$hashed_password' AND email = '$username_or_email'))";

            $result2 = mysqli_query($database, $check_pass);
            if($result2){  // May need to fix and check what the result was
                while ($row) { 
                
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];

                } 
                return true;
            }
            else{
                return false;
            }
            
        }
        else{
            return false;
        }
        

    }

    function check_username_and_email($email, $username){
        $username = mysqli_real_escape_string($database, $username);
        $email = mysqli_real_escape_string($database, $email);


        $check_user = "SELECT username, email FROM AdminUser WHERE email = '$email' OR username = '$username'";
        $result = mysqli_query($database, $check_user);
        if(mysqli_num_rows($result) >= 1){
            return true;
        }
        else{
            return false;
        }
    }


    $errors = array();
    if (isset($_POST['submitLogin'])) {
        $email_or_username = mysqli_real_escape_string($db, $_POST['emailorusername']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($email_or_username)) {
            array_push($errors, "Username or email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        $is_password_valid = check_password();
        if(!$is_password_valid){
            array_push($errors, "Username, email, and/or password are incorrect.");
        }

        

        if (count($errors) == 0) {
            $_SESSION['success'] = "You are now logged in";
            header('location: AdminUser.php');
        }
    }

    if (isset($_POST['submitNewUser'])) {
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($db, $_POST['last_name']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($email)) {
            array_push($errors, "Username is required");
        }
        if (empty($first_name)) {
            array_push($errors, "first_name is required");
        }
        if (empty($last_name)) {
            array_push($errors, "last_name is required");
        }

        $user_exists = check_username_and_email();
        if($user_exists){
            array_push($errors, "That username and or email is already in use.");
        }
        

        if (count($errors) == 0) {
            $_SESSION['success'] = "New User was created, and an email was sent to the user.";
            header('location: CreateUser.php');
        }
    }
?>