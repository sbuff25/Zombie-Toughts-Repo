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
            header('Location: ./AdminPage');
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


        // $stmt = $database->prepare("SELECT username, email FROM AdminUser WHERE email = ?");
        // $stmt->bind_param("s", $email);
        // $stmt->execute();
        // $result = $stmt->get_result();

        // if($result->num_rows >= 1){
        //     array_push($errors, "That email is already in use.");
        //     $stmt->close();
        // }
        // else{

            $key = hash_pbkdf2('haval256,5', $email, 555, 5, 50);
            // $user_created = create_temp_admin_user($errors, $privilege, $email, $first_name, $last_name, $key);
            $exp_date = "DATE_ADD(NOW(), INTERVAL 4 DAY)";
            // $insertSQL = "INSERT INTO TempUser(email, first_name, last_name, privilege_level, exp_Date, tempkey) VALUES('$email', '$first_name', '$last_name', '$privilege', $exp_date, '$key')";
            // $result = mysqli_query($database, $insertSQL);


            require_once("./Functions/Emails.php");
            require_once("./Classes/SendEmail.php");
            $body = new_user_email_body($email, $first_name, $last_name, $key);
            $subject = new_user_email_subject();
            $email = new SendEmail($email, $subject, $body, $errors, "An email was sent to the user, with a link to set their password.", "Could not email user with link to access admin.");
            // $stmt->close();

            // if(count($errors) === 0){
            //     $stmt = $database->prepare("INSERT INTO TempUser(email, first_name, last_name, privilege_level, exp_date, tempkey) VALUES(?, ?, ?, ?, DATE_ADD(NOW(), INTERVAL 4 DAY), ?)");
            //     $stmt->bind_param("sssss", $email, $first_name, $last_name, $privilege, $key);
            //     $stmt->execute();
            //     //$result = $stmt->get_result();
            //     if(!$stmt){
            //         array_push($errors, "ERROR: Not able to execute. " . mysqli_error($database));
            //     }

            // }

            
        // }



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
        $check_user = $database->prepare("SELECT username FROM AdminUser WHERE username = ?");
        $check_user->bind_param("s", $user);
        $check_user->execute();
        $result = $check_user->get_result();

        
        if($result->num_rows >= 1){
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
            

            $insertSQL = $database->prepare("INSERT INTO AdminUser(email, username, first_name, last_name, password, salt, privilege_level)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)");
            $insertSQL->bind_param("sssssss", $email, $user, $first_name, $last_name, $hashed_password, $salt, $privilege);
            $insertSQL->execute();
            // $result = $insertSQL->get_result();
            // $result = mysqli_query($database, $insertSQL);

            if(!$insertSQL){
                array_push($errors, "Could not create account.");
                array_push($errors, "ERROR: Not able to execute. " . mysqli_error($database));
            }
            $insertSQL->close();

        }

        if (count($errors) === 0) {
            $deleteSQL = $database->prepare("DELETE FROM TempUser WHERE email=?");
            $deleteSQL->bind_param("s", $email);
            $deleteSQL->execute();
            //$result = mysqli_query($database, $deleteSQL);

            if(!$deleteSQL){
                array_push($errors, "Could not remove entry from tempuser.");
            }
            $deleteSQL->close();
        }

        
        if (count($errors) == 0) {
            $_SESSION['success'] = "New Account created.";
            $_SESSION['username'] = $user;
            $_SESSION['email'] = $email;
            $_SESSION['privilege'] = $privilege;
            $_SESSION['first_name'] = $first_name;
            $_SESSION['last_name'] = $last_name;
            header('Location: ./AdminPage');
        }
        $check_user->close();
    }

    if (isset($_POST['deleteUser'])) {
        $email = mysqli_real_escape_string($database, $_POST['deleteUser']);

        $sql = $database->prepare("DELETE FROM AdminUser WHERE email=?");
        $sql->bind_param("s", $email);
        $sql->execute();
        //$result = mysqli_query($database, $sql);

        if(!$sql){
            array_push($errors, "Could not delete user.");
        }
    
        if (count($errors) == 0) {
            $_SESSION['success'] = "The User: $email, Was Deleted Successfully.";
        }
        $sql->close();

    }

    if (isset($_POST['deleteInstitution'])) {
        $id = mysqli_real_escape_string($database, $_POST['deleteInstitution']);

        $sql = $database->prepare("DELETE FROM InstitutionInformation WHERE id=?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $result = $sql->get_result();

        if(!$sql){
            array_push($errors, "Could not delete contact.");
        }

        if (count($errors) === 0) {
            $_SESSION['success'] = "Successfully deleted contact";
        }
    }

    if (isset($_POST['newNote'])) {
        $id = mysqli_real_escape_string($database, $_POST['newNote']);
        $note = mysqli_real_escape_string($database, $_POST['note']);

        $checkMax = $database->prepare("SELECT MAX(note_id) as max_note_id FROM InstitutionNotes WHERE id=?");
        $checkMax->bind_param("i", $id);
        $checkMax->execute();
        $result = $checkMax->get_result();
        $row = $result->fetch_assoc();

        if($checkMax){
            if($result->num_rows > 0){
                $note_id = intval($row['max_note_id']) + 1;
                $insertSQL = $database->prepare("INSERT INTO InstitutionNotes (note_id, id, note) VALUES (?, ?, ?)");
                $insertSQL->bind_param("iis", $note_id , $id, $note);
                $insertSQL->execute();
                if(!$insertSQL){
                    array_push($errors, "Unable to insert note.");
                }
                $insertSQL->close();
            }
            else{
                $insertSQL = $database->prepare("INSERT INTO InstitutionNotes (note_id, id, note) VALUES (0, ?, ?)");
                $insertSQL->bind_param("is", $id, $note);
                $insertSQL->execute();
                if(!$insertSQL){
                    array_push($errors, "Unable to insert note.");
                }
                $insertSQL->close();
            }
        }
        else{
            array_push($errors, "Unable to insert note.");
        }
        $checkMax->close();

        

        if (count($errors) === 0) {
            $_SESSION['success'] = "Successfully added note!";
        }
    }

    if (isset($_POST['submitContacted'])) {
        $id = mysqli_real_escape_string($database, $_POST['submitContacted']);
        $contacted = mysqli_real_escape_string($database, $_POST['contacted']);
        
        $updateSQL = $database->prepare("UPDATE InstitutionInformation SET contacted=? WHERE id=?");
        $updateSQL->bind_param("si", $contacted , $id);
        $updateSQL->execute();

        if(!$updateSQL){
            array_push($errors, "Could not update contacted.");
        }


        if (count($errors) === 0) {
            $_SESSION['success'] = "Change Contact Status";
        }
    }

    if (isset($_POST['newIndividualNote'])) {
        $id = mysqli_real_escape_string($database, $_POST['newIndividualNote']);
        $note = mysqli_real_escape_string($database, $_POST['note']);

        $checkMax = $database->prepare("SELECT MAX(note_id) as max_note_id FROM OSIndividualNotes WHERE individual_id=?");
        $checkMax->bind_param("i", $id);
        $checkMax->execute();
        $result = $checkMax->get_result();
        $row = $result->fetch_assoc();

        if($checkMax){
            if($result->num_rows > 0){
                $note_id = intval($row['max_note_id']) + 1;
                $insertSQL = $database->prepare("INSERT INTO OSIndividualNotes (note_id, individual_id, note) VALUES (?, ?, ?)");
                $insertSQL->bind_param("iis", $note_id , $id, $note);
                $insertSQL->execute();
                if(!$insertSQL){
                    array_push($errors, "Unable to insert note.");
                }
                $insertSQL->close();
            }
            else{
                $insertSQL = $database->prepare("INSERT INTO OSIndividualNotes (note_id, individual_id, note) VALUES (0, ?, ?)");
                $insertSQL->bind_param("is", $id, $note);
                $insertSQL->execute();
                if(!$insertSQL){
                    array_push($errors, "Unable to insert note.");
                }
                $insertSQL->close();
            }
        }
        else{
            array_push($errors, "Unable to insert note.");
        }
        $checkMax->close();

        

        if (count($errors) === 0) {
            $_SESSION['success'] = "Successfully added note!";
        }
    }

    if (isset($_POST['submitContactedIndividual'])) {
        $id = mysqli_real_escape_string($database, $_POST['submitContactedIndividual']);
        $contacted = mysqli_real_escape_string($database, $_POST['contacted']);
        
        $updateSQL = $database->prepare("UPDATE OutOfStateIndividual SET contacted=? WHERE id=?");
        $updateSQL->bind_param("si", $contacted , $id);
        $updateSQL->execute();

        if(!$updateSQL){
            array_push($errors, "Could not update contacted.");
        }


        if (count($errors) === 0) {
            $_SESSION['success'] = "Changed Contact Status";
        }
    }

    if (isset($_POST['deleteIndividual'])) {
        $id = mysqli_real_escape_string($database, $_POST['deleteIndividual']);

        $sql = $database->prepare("DELETE FROM OutOfStateIndividual WHERE id=?");
        $sql->bind_param("i", $id);
        $sql->execute();
        $result = $sql->get_result();

        if(!$sql){
            array_push($errors, "Could not delete contact.");
        }

        if (count($errors) === 0) {
            $_SESSION['success'] = "Successfully deleted contact";
        }
    }

    if (isset($_POST['submitInstAccess'])) {
        $code = mysqli_real_escape_string($database, $_POST['generate_code']);
        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $phone = mysqli_real_escape_string($database, $_POST['phone']);
        $ext = mysqli_real_escape_string($database, $_POST['ext']);
        $name = mysqli_real_escape_string($database, $_POST['name']);
        $address = mysqli_real_escape_string($database, $_POST['mailing_address']);
        $city = mysqli_real_escape_string($database, $_POST['city']);
        $state = mysqli_real_escape_string($database, $_POST['state']);
        $zipcode = mysqli_real_escape_string($database, $_POST['zipcode']);
        $county = mysqli_real_escape_string($database, $_POST['county']);
        $couFirst = mysqli_real_escape_string($database, $_POST['counselor_first_name']);
        $couLast = mysqli_real_escape_string($database, $_POST['counselor_last_name']);
        $couPhone = mysqli_real_escape_string($database, $_POST['counselor_phone']);
        $couExt = mysqli_real_escape_string($database, $_POST['counselor_ext']);
        $couEmail = mysqli_real_escape_string($database, $_POST['counselor_email']);
        $couOffice = mysqli_real_escape_string($database, $_POST['counselor_office']);
        $couBldg = mysqli_real_escape_string($database, $_POST['counselor_bldg']);
        $num_access = mysqli_real_escape_string($database, $_POST['accesses']);
        $id = mysqli_real_escape_string($database, $_POST['id']);

        $grades = $_POST['student_grade'];

        $stmt = $database->prepare("INSERT INTO AccessCode (code) VALUES (?)");
        if(!$stmt->bind_param("s", $code)){
            array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        if(!$stmt->execute()){
            array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close();

        
        $stmt = $database->prepare(
            "INSERT INTO InstitutionAccessCode (
                code, 
                first_name, 
                last_name, 
                email, 
                phone, 
                ext, 
                name, 
                mailing_address, 
                city, 
                state, 
                zipcode, 
                county, 
                counselor_first_name, 
                counselor_last_name, 
                counselor_office_Number, 
                counselor_bldg,
                counselor_email,
                counselor_phone, 
                counselor_ext, 
                total_number_of_accesses) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        if(!$stmt->bind_param("sssssissssssssssssii", 
            $code, 
            $first_name, 
            $last_name,
            $email, 
            $phone, 
            $ext, 
            $name, 
            $address, 
            $city, 
            $state, 
            $zipcode, 
            $county,
            $couFirst,
            $couLast,
            $couOffice,
            $couBldg,
            $couEmail,
            $couPhone,
            $couExt,
            $num_access
        )){
            array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
     
        }

        // $stmt->execute();

        if(!$stmt->execute()){
            array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close();
      
        if(count($errors) === 0){
            // Insert Grades into InstGrades
            $gradeQuery = "";
            $paramBind = "";
            foreach ($grades as $grade){
                $stmt = $database->prepare("INSERT INTO InstGrades (grade, instCode) VALUES (?, ?)");
                if(!$stmt->bind_param("ss", $grade, $code)){
                    array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
                }
                if(!$stmt->execute()){
                    array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
                }
                // $gradeQuery .= "(" . $grade . ", " . $code . ")";
                //$paramBind .= "ss";
                // $gradeQuery .= "( ? , ? )";
            }

            

            // if(!$stmt){
            //     array_push($errors, "(Error Code: 1) There was a problem processing your request. Please try your request again, and if it still does not work please contact the Montana Repertory Theatre directly for access.");
            // }
            $stmt->close();
        }

        
        if(count($errors) === 0){
            $updateSQL = $database->prepare("UPDATE InstitutionInformation SET contacted='completed' WHERE id=?");
            
            

            if(!$updateSQL->bind_param("i", $id))
            {
                array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
            
            }
            if(!$updateSQL->execute()){
                array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
            }
            $updateSQL->close();
        }

        if(count($errors) === 0){
            // Send request processing email
            $_SESSION['success'] = "Successfully Added Institution Access";
        }

    }



    if (isset($_POST['submitIndAccess'])) {
        $code = mysqli_real_escape_string($database, $_POST['generate_code']);
        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $phone = mysqli_real_escape_string($database, $_POST['phone']);


        $address = mysqli_real_escape_string($database, $_POST['address']);
        $apt_num = mysqli_real_escape_string($database, $_POST['apt_num']);
        $city = mysqli_real_escape_string($database, $_POST['city']);
        $state = mysqli_real_escape_string($database, $_POST['state']);
        $zipcode = mysqli_real_escape_string($database, $_POST['zipcode']);

        $end_date = mysqli_real_escape_string($database, $_POST['end_date']);
        $id = mysqli_real_escape_string($database, $_POST['id']);


        $stmt = $database->prepare("INSERT INTO AccessCode (code) VALUES (?)");
        if(!$stmt->bind_param("s", $code)){
            array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        if(!$stmt->execute()){
            array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close();

        
        $stmt = $database->prepare(
            "INSERT INTO IndividualAccessCode (
                code, 
                first_name, 
                last_name, 
                email, 
                phone, 
                address, 
                apt_num, 
                city, 
                state, 
                zipcode,
                end_date
                ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );

        if(!$stmt->bind_param("sssssssssss", 
            $code, 
            $first_name, 
            $last_name,
            $email, 
            $phone,
            $address, 
            $apt_num,
            $city, 
            $state, 
            $zipcode, 
            $end_date
        )){
            array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
     
        }

        // $stmt->execute();

        if(!$stmt->execute()){
            array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close();

        
        if(count($errors) === 0){
            $updateSQL = $database->prepare("UPDATE OutOfStateIndividual SET contacted='completed' WHERE id=?");
            
            

            if(!$updateSQL->bind_param("i", $id))
            {
                array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
            
            }
            if(!$updateSQL->execute()){
                array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
            }
            $updateSQL->close();
        }

        if(count($errors) === 0){
            // Send request processing email
            $_SESSION['success'] = "Successfully Added Out-of-State Individual Access";
        }

    }
    
    
?>