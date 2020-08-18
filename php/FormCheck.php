<?php 

require_once("./Classes/Database.php");


    $errors = array();
    if (isset($_POST['submitLogin'])) {
        $email_or_username = mysqli_real_escape_string($database, $_POST['emailorusername']);
        $password = mysqli_real_escape_string($database, $_POST['password']);

        if (empty($email_or_username)) {
            array_push($errors, "Username or email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }


        if (count($errors) == 0) {
            $stmt = $database->prepare("SELECT email, username, first_name, last_name, salt, privilege_level FROM AdminUser WHERE email = ? OR username = ?");
            $stmt->bind_param("ss", $email_or_username, $email_or_username);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows === 1){
                $row = $result->fetch_assoc();
                $hashed_password = hash_pbkdf2('haval256,5', $password, $row['salt'], 10, 70);
                
                $check_pass1 = $database->prepare("SELECT EXISTS(SELECT * FROM AdminUser WHERE (password = ? AND username = ?))");
                $check_pass1->bind_param("ss", $hashed_password, $email_or_username);
                $check_pass1->execute();
                $result2 = $check_pass1->get_result();


                $check_pass2 = $database->prepare("SELECT EXISTS(SELECT * FROM AdminUser WHERE (password = ? AND email = ?))");
                $check_pass2->bind_param("ss", $hashed_password, $email_or_username);
                $check_pass2->execute();
                $result3 = $check_pass1->get_result();

                if($result2 || $result3){  // May need to fix and check what the result was

                    $_SESSION['username'] = $row['username'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];
                    $_SESSION['privilege'] = $row['privilege_level'];

                }
                else {
                    array_push($errors, "Username, email, and/or password are incorrect.");
                }
                $check_pass1->close();
                $check_pass2->close();

            }
            else{
                array_push($errors, "Username, email, and/or password are incorrect.");
            }
            $stmt->close();
        }

        

        if (count($errors) == 0) {
            $email = $_SESSION['email'];
            $username = $_SESSION['username'];
            $privilege = $_SESSION['privilege_level'];
            $_SESSION['success'] .= "<br>You are now logged in as $email, $username, $privilege.";
            header('Location: ./AdminPage.php');
        }
    }

    if (isset($_POST['submitNewUser'])) {
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $privilege = mysqli_real_escape_string($database, $_POST['privilege']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($first_name)) {
            array_push($errors, "first_name is required");
        }
        if (empty($last_name)) {
            array_push($errors, "last_name is required");
        }

        $email = mysqli_real_escape_string($database, $email);


        //$check_user = "SELECT username, email FROM AdminUser WHERE email = '$email'";

        $stmt = $database->prepare("SELECT username, email FROM AdminUser WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        //$result = mysqli_query($database, $check_user);
        //if(mysqli_num_rows($result) >= 1){
        if($result->num_rows >= 1){
            array_push($errors, "That email is already in use.");
        }

        
        $key = hash_pbkdf2('haval256,5', $email, 555, 5, 50);
        // $user_created = create_temp_admin_user($errors, $privilege, $email, $first_name, $last_name, $key);
        $exp_date = "DATE_ADD(NOW(), INTERVAL 4 DAY)";
        // $insertSQL = "INSERT INTO TempUser(email, first_name, last_name, privilege_level, exp_Date, tempkey) VALUES('$email', '$first_name', '$last_name', '$privilege', $exp_date, '$key')";
        // $result = mysqli_query($database, $insertSQL);

        $stmt = $database->prepare("INSERT INTO TempUser(email, first_name, last_name, privilege_level, exp_Date, tempkey) VALUES(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $email, $first_name, $last_name, $privilege, $exp_date, $key);
        $stmt->execute();
        $result = $stmt->get_result();

        if(!$result){
            array_push($errors, "ERROR: Not able to execute. " . mysqli_error($database));
        }
        // if(!$user_created){
        //     array_push($errors, "There was a problem creating the user.");
        // }

        require_once("./Functions/NewUserEmail.php");
        require_once("./Classes/SendEmail.php");

        
        $body = new_user_email_body($email, $first_name, $last_name, $key);
        $subject = new_user_email_subject();
        $email = new SendEmail($email, $subject, $body);

        if (count($errors) === 0) {
            $_SESSION['success'] = "New User was created, and an email was sent to the user.";
        }
    }

    if (isset($_POST['set_new_user'])) {
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $privilege = mysqli_real_escape_string($database, $_POST['privilege_level']);
        $password = mysqli_real_escape_string($database, trim($_POST['password']));
        $confirm_password = mysqli_real_escape_string($database, trim($_POST['confirm_password']));

        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($first_name)) {
            array_push($errors, "First Name is required");
        }
        if (empty($last_name)) {
            array_push($errors, "Last Name is required");
        }
        if(strcmp($password, $confirm_password) != 0){
            array_push($errors, "The passwords do not match.");
            array_push($errors, $password);
            array_push($errors, $confirm_password);
        }

        $user = mysqli_real_escape_string($database, $_POST['username']);
        $check_user = "SELECT username FROM AdminUser WHERE username = '$user'";
        $result = mysqli_query($database, $check_user);
        if(mysqli_num_rows($result) >= 1){
            array_push($errors, "That username is already in use.");
        }

        if (count($errors) === 0) {
            // Generate salt__________________________________________________________________
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $salt = '';
            for($i = 0; $i < 30; $i++){
                $salt .= $characters[rand(0, strlen($characters) - 1)];
            }
            // End Generate salt_______________________________________________________________
            
            $hashed_password = hash_pbkdf2('haval256,5', $password, $salt, 10, 70);
            

            $insertSQL = "INSERT INTO AdminUser(email, username, first_name, last_name, password, salt, privilege_level)
                                    VALUES ('$email', '$user', '$first_name', '$last_name', '$hashed_password', '$salt', '$privilege')";
            $result = mysqli_query($database, $insertSQL);

            if(!$result){
                array_push($errors, "Could not create account.");
                array_push($errors, "ERROR: Not able to execute $insertSQL. " . mysqli_error($database));
            }
        }

        if (count($errors) === 0) {
            $deleteSQL = "DELETE FROM TempUser WHERE email='$email'";
            $result = mysqli_query($database, $deleteSQL);

            if(!$result){
                array_push($errors, "Could not remove entry from tempuser.");
            }
        }

        
        if (count($errors) == 0) {
            $_SESSION['success'] = "New Account created.";
            $_SESSION['username'] = $user;
            $_SESSION['email'] = $email;
        }
    }

    if (isset($_POST['deleteUser'])) {
        $email = mysqli_real_escape_string($database, $_POST['deleteUser']);

        $sql = "DELETE FROM AdminUser WHERE email='$email'";
        $result = mysqli_query($database, $sql);

        if(!$result){
            array_push($errors, "Could not delete user.");
        }
    
        if (count($errors) == 0) {
            $_SESSION['success'] = "The User: $email, Was Deleted Successfully.";
        }

    }
    
?>