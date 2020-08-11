<?php 

$ini_file = parse_ini_file('/home3/yqepxzmy/db.ini');
$database = mysqli_connect ("localhost", $ini_file['username'], $ini_file['password'], $ini_file['db'])
or die ('I cannot connect to the database.');
    

    // function check_password($username_or_email, $password){
    //     $DatabaseObject = new Database();
    //     $database = $DatabaseObject->get_database();
    //     $username_or_email = mysqli_real_escape_string($database, $username_or_email);
    //     $password = mysqli_real_escape_string($database, $password);


    //     $check_user = "SELECT username, email, first_name, last_name, salt FROM AdminUser WHERE email = '$username_or_email' OR username = '$username_or_email'";
    //     $result = mysqli_query($database, $check_user);
    //     if(mysqli_num_rows($result) == 1){
    //         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //         $hashed_password = hash_pbkdf2('haval256,5', $password, $row['salt'], 10, 70);
    //         $check_pass = "SELECT EXISTS(SELECT username FROM AdminUser WHERE ((password = '$hashed_password' AND username = '$username_or_email') OR (password = '$hashed_password' AND email = '$username_or_email'))";

    //         $result2 = mysqli_query($database, $check_pass);
    //         if($result2){  // May need to fix and check what the result was
    //             while ($row) { 
                
    //                 $_SESSION['username'] = $row['username'];
    //                 $_SESSION['first_name'] = $row['first_name'];
    //                 $_SESSION['last_name'] = $row['last_name'];

    //             } 
    //             return true;
    //         }
    //         else{
    //             return false;
    //         }
            
    //     }
    //     else{
    //         return false;
    //     }
        

    // }

    // function check_username_and_email($email, $username){
    //     $DatabaseObject = new Database();
    //     $database = $DatabaseObject->get_database();
    //     $username = mysqli_real_escape_string($database, $username);
    //     $email = mysqli_real_escape_string($database, $email);


    //     $check_user = "SELECT username, email FROM AdminUser WHERE email = '$email' OR username = '$username'";
    //     $result = mysqli_query($database, $check_user);
    //     if(mysqli_num_rows($result) >= 1){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

    // function check_email($database, $email){
    //     $email = mysqli_real_escape_string($database, $email);


    //     $check_user = "SELECT username, email FROM AdminUser WHERE email = '$email'";
    //     $result = mysqli_query($database, $check_user);
    //     if(mysqli_num_rows($result) >= 1){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

    // function check_user($database, $user){
    //     $user = mysqli_real_escape_string($database, $user);


    //     $check_user = "SELECT username FROM AdminUser WHERE username = '$user'";
    //     $result = mysqli_query($database, $check_user);
    //     if(mysqli_num_rows($result) >= 1){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }

    // function create_admin_user($database, $privilege_level, $email, $password, $first_name, $last_name){
    //     $salt = generate_salt();
    //     $hashed_password = hash_pbkdf2('haval256,5', $password, $salt, 10, 70);
        

    //     $insertSQL = "INSERT INTO AdminUser(email, username, first_name, last_name, password, salt, privilege_level)
    //                             SELECT * FROM(SELECT '$email', '$username', '$first_name', '$last_name', '$hashed_password', '$salt', '$privilege_level') AS user 
    //                             WHERE NOT EXISTS (SELECT email, username FROM AdminUser WHERE email = '$email' OR username = '$username')";
    //     $result = mysqli_query($database, $insertSQL);
    //     if($result){
    //         return 1;
    //     }
    //     else{
    //         return -1;
    //     }
    // }

    // function create_temp_admin_user($database, $errors, $privilege_level, $email, $first_name, $last_name, $key){
    //     $exp_date = "CURRENT_DATE() + 4";
    //     $insertSQL = "INSERT INTO TempUser(email, first_name, last_name, privilege_level, exp_Date, tempkey) VALUES('$email', '$first_name', '$last_name', '$privilege_level', '$exp_date', '$key')";
    //     array_push($errors, $insertSQL);
    //     $result = mysqli_query($database, $insertSQL);
    //     if(!$result){
    //         array_push($errors, "ERROR: Not able to execute $insertSQL. " . mysqli_error($database));
    //     }
    // }


    $errors = array();
    if (isset($_POST['submitLogin'])) {
        $DatabaseObject = new Database();
        $database = $DatabaseObject->get_database();
        $email_or_username = mysqli_real_escape_string($database, $_POST['emailorusername']);
        $password = mysqli_real_escape_string($database, $_POST['password']);

        if (empty($email_or_username)) {
            array_push($errors, "Username or email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        $username_or_email = mysqli_real_escape_string($database, $email_or_username);
        $password = mysqli_real_escape_string($database, $password);


        $check_user = "SELECT username, email, first_name, last_name, salt FROM AdminUser WHERE email = '$username_or_email' OR username = '$username_or_email'";
        $result = mysqli_query($database, $check_user);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $hashed_password = hash_pbkdf2('haval256,5', $password, $row['salt'], 10, 70);
            $check_pass = "SELECT EXISTS(SELECT username FROM AdminUser WHERE ((password = '$hashed_password' AND username = '$username_or_email') OR (password = '$hashed_password' AND email = '$username_or_email'))";

            $result2 = mysqli_query($database, $check_pass);
            if($result2){  // May need to fix and check what the result was
                
                $_SESSION['username'] = $row['username'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];
            }
        }
        else{
            array_push($errors, "Username, email, and/or password are incorrect.");
        }

        

        if (count($errors) == 0) {
            $_SESSION['success'] = "You are now logged in";
            header('location: AdminUser.php');
        }
    }

    if (isset($_POST['submitNewUser'])) {
        $DatabaseObject = new Database();
        $database = $DatabaseObject->get_database();
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


        $check_user = "SELECT username, email FROM AdminUser WHERE email = '$email'";
        $result = mysqli_query($database, $check_user);
        if(mysqli_num_rows($result) >= 1){
            array_push($errors, "That email is already in use.");
        }

        
        $key = hash_pbkdf2('haval256,5', $email, 555, 5, 50);
        // $user_created = create_temp_admin_user($errors, $privilege, $email, $first_name, $last_name, $key);
        $exp_date = "DATE_ADD(NOW(), INTERVAL 4 DAY)";
        $insertSQL = "INSERT INTO TempUser(email, first_name, last_name, privilege_level, exp_Date, tempkey) VALUES('$email', '$first_name', '$last_name', '$privilege', $exp_date, '$key')";
        $result = mysqli_query($database, $insertSQL);
        if(!$result){
            array_push($errors, "ERROR: Not able to execute $insertSQL. " . mysqli_error($database));
        }
        // if(!$user_created){
        //     array_push($errors, "There was a problem creating the user.");
        // }

        require_once("./Functions/NewUserEmail.php");
        require_once("./Classes/SendEmail.php");

        
        $body = new_user_email_body($email, $first_name, $last_name, $key);
        $subject = new_user_email_subject();
        $email = new SendEmail($email, $subject, $body);

        if (count($errors) == 0) {
            $_SESSION['success'] = "New User was created, and an email was sent to the user.";
            header('location: AdminPage.php');
        }
    }

    if (isset($_POST['set_new_user'])) {
        $DatabaseObject = new Database();
        $database = $DatabaseObject->get_database();
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $privilege = mysqli_real_escape_string($database, $_POST['privilege_level']);
        $password = mysqli_real_escape_string($database, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($database, $_POST['confirm_password']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($first_name)) {
            array_push($errors, "First Name is required");
        }
        if (empty($last_name)) {
            array_push($errors, "Last Name is required");
        }
        if(!strcmp($password, $confirm_password)){
            array_push($errors, "The passwords do not match.");
        }

        $user = mysqli_real_escape_string($database, $_POST['username']);
        $check_user = "SELECT username FROM AdminUser WHERE username = '$user'";
        $result = mysqli_query($database, $check_user);
        if(mysqli_num_rows($result) >= 1){
            array_push($errors, "That username is already in use.");
        }

        $salt = generate_salt();
        $hashed_password = hash_pbkdf2('haval256,5', $password, $salt, 10, 70);
        

        $insertSQL = "INSERT INTO AdminUser(email, username, first_name, last_name, password, salt, privilege_level)
                                VALUES ('$email', '$username', '$first_name', '$last_name', '$hashed_password', '$salt', '$privilege_level')";
        $result = mysqli_query($database, $insertSQL);

        if(!$result){
            array_push($errors, "Could not create account.");
        }

        $deleteSQL = "DELETE FROM TempUser WHERE email='$email'";
        $result = mysqli_query($database, $insertSQL);

        if(!$result){
            array_push($errors, "Could not remove entry from tempuser.");
        }

        
        if (count($errors) == 0) {
            $_SESSION['success'] = "New Account created.";
            $_SESSION['username'] = $user;
            header('location: AdminPage.php');
        }
    }
?>