<?php 

require_once("./Admin/Classes/Database.php");


    $errors = array();
    if (isset($_POST['submitCode'])) {
        $code = trim(mysqli_real_escape_string($database, $_POST['accessCode']));
        if(strlen($code) < 17 || strlen($code) > 17){
            array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");
        }
        if(substr($code, 0, 3) === "zti" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT * FROM IndividualAccessCode WHERE code=?");
    
            if(!$stmt->bind_param("s", $code)){
                //array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
                array_push($errors, "There has been problem accepting your code. Please wait a couple minutes, and then try again.");
         
            }

            if(!$stmt->execute()){
                array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
            }

            $result = $stmt->get_result();
            

            if($result->num_rows === 1){
                $row = $result->fetch_assoc();
                if(date('Y-m-d H:i:s', strtotime($row['end_date'])) <= date('Y-m-d H:i:s')){
                    array_push($errors, "Access period has ended.");

                }
                else{
                    if(count($errors) === 0 && is_null($row['clicked_date'])){
                        $clicked_date = date('Y-m-d H:i:s');
                        $new_end_date = date('Y-m-d', strtotime("+2 days"));
                        $stmt2 = $database->prepare("UPDATE IndividualAccessCode SET clicked_date=?, end_date=? WHERE code=?");
    
                        if(!$stmt2->bind_param("sss", $clicked_date, $new_end_date, $code)){
                            array_push($errors, "Binding parameters failed: (" . $stmt2->errno . ") " . $stmt2->error);
                    
                        }

                        if(!$stmt2->execute()){
                            array_push($errors, "Execute failed: (" . $stmt2->errno . ") " . $stmt2->error);
                        }
                        $stmt2->close();
                    }
                }
                
            }
            else {
                array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");
            }
            $stmt->close();

        }
        elseif(substr($code, 0, 3) === "ztI" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT counselor_first_name, counselor_last_name, counselor_email, counselor_phone, counselor_office_number, counselor_bldg, total_number_of_accesses, times_accessed FROM InstitutionAccessCode WHERE code=?");
            if(!$stmt->bind_param("s", $code)){
                array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
        
            }

            if(!$stmt->execute()){
                array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
            }

            
            $result = $stmt->get_result();
            if($result->num_rows === 1){
                $row = $result->fetch_assoc();
                $times_accessed = 0;
                if(strcasecmp ( $row['times_accessed'] , "NULL" )){}
                else{
                    $times_accessed = intval($row['times_accessed']);
                }
                if(intval($row['total_number_of_accesses']) <= $times_accessed){
                    array_push($errors, "The code you have entered has passed its access limit. If you are a student, please contact your teacher.");
                }else{
                    $times_accessed = $times_accessed + 1;
                    $stmt2 = "";
                    if (!$stmt2 = $database->prepare("UPDATE InstitutionAccessCode SET times_accessed=? WHERE code=?")) {
                        array_push($errors, "Prepare failed: (" . $stmt2->errno . ") " . $stmt2->error);
                    }
                    else{
                        if(!$stmt2->bind_param("is", $times_accessed, $code)){
                            array_push($errors, "Binding parameters failed: (" . $stmt2->errno . ") " . $stmt2->error);
                        }
                        else{
                            if(!$stmt2->execute()){
                                array_push($errors, "Execute failed: (" . $stmt2->errno . ") " . $stmt2->error);
                            }
                            $stmt2->close();
                        }
                    }
                }
                

                
                // array_push($errors, $code . " " . $times_accessed);
                

            }
            else{

                array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");

            }
            $stmt->close();

        }
        elseif(substr($code, 0, 3) === "ztp" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT * FROM PreviewAccessCode WHERE code=?");
            $stmt->bind_param("s", $code);
            $stmt->execute();


            $stmt->close();

        }
        else{
            array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");
        }

        if(count($errors) === 0){
            $_SESSION['code'] = $code;
        }
        
    }

    if (isset($_POST['institutionAccessRequest'])) {
        $first_name = mysqli_real_escape_string($database, $_POST['contact_first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['contact_last_name']);
        $email = mysqli_real_escape_string($database, $_POST['contact_email']);
        $phone = mysqli_real_escape_string($database, $_POST['contact_phone']);
        $ext = mysqli_real_escape_string($database, $_POST['ext']);
        $institution_name = mysqli_real_escape_string($database, $_POST['institution_name']);
        $address = mysqli_real_escape_string($database, $_POST['mailing_address']);
        $city = mysqli_real_escape_string($database, $_POST['institution_city']);
        $state = mysqli_real_escape_string($database, $_POST['institution_state']);
        $zipcode = mysqli_real_escape_string($database, $_POST['institution_zipcode']);
        $county = mysqli_real_escape_string($database, $_POST['institution_county']);

        $stmt = $database->prepare("INSERT INTO InstitutionInformation (contact_first_name, contact_last_name, contact_email, contact_phone, contact_ext, institution_name, institution_mailing_address, institution_city, institution_state, institution_zipcode, institution_county, contacted) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'not contacted')");

        if(!$stmt->bind_param("sssssssssis", $first_name, $last_name, $email, $phone, $ext, $institution_name, $address, $city, $state, $zipcode, $county)){
            array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
        }

        if(!$stmt->execute()){
            array_push($errors, "There was a problem processing your request. Please try your request again, and if it still does not work please contact the Montana Repertory Theatre directly for access.");
        }
        $stmt->close();

        require_once("./Admin/Functions/Emails.php");
        require_once("./Admin/Classes/SendEmail.php");
        $plainBody = "";
        $subject = "";
        if($state === "Montana"){
            $plainBody = MT_institution_email_plain_body($code);
            $subject = MT_institution_email_subject($code);
        }
        else{
            $plainBody = OOS_request_email_plain_body();
            $subject = OOS_request_email_subject();
        }
        

        $objSendEmail = new SendEmail($email, $subject, $plainBody, $errors, "An email has been sent to you.", "There has been an issue processing your request.");
        

        if(count($errors) === 0){
            // Send request processing email
            $_SESSION['success'] = "Your request has been processed. A Zombie Thoughts representative will contact you soon.";
        }

    }

    if (isset($_POST['individualAccessRequest'])) {

        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $phone = mysqli_real_escape_string($database, $_POST['phone']);
        $address = mysqli_real_escape_string($database, $_POST['address']);
        $apt_num = mysqli_real_escape_string($database, $_POST['apt_num']);
        $city = mysqli_real_escape_string($database, $_POST['city']);
        $state = mysqli_real_escape_string($database, $_POST['state']);
        $zipcode = mysqli_real_escape_string($database, $_POST['zipcode']);
        $county = mysqli_real_escape_string($database, $_POST['county']);

        $stmt = $database->prepare("INSERT INTO OutOfStateIndividual (first_name, last_name, email, phone, address, apt_num, city, state, zipcode, county, contacted) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'not contacted')");
        if(!$stmt->bind_param("ssssssssss", $first_name, $last_name, $email, $phone, $address, $apt_num, $city, $state, $zipcode, $county)){
            array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
        }

        if(!$stmt->execute()){
            array_push($errors, "There was a problem processing your request. Please try your request again, and if it still does not work please contact the Montana Repertory Theatre directly for access.");
        }
        $stmt->close();

        require_once("./Admin/Functions/Emails.php");
        require_once("./Admin/Classes/SendEmail.php");
        $plainBody = OOS_request_email_plain_body();
        $subject = OOS_request_email_subject();
        

        $objSendEmail = new SendEmail($email, $subject, $plainBody, $errors, "An email has been sent to you.", "There has been an issue processing your request.");
        

        if(count($errors) === 0){
            // Send request processing email
            $_SESSION['success'] = "Your request has been processed. A Zombie Thoughts representative will contact you soon.";
        }
    }

    if (isset($_POST['individualMTAccessForm'])) {

        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $phone = mysqli_real_escape_string($database, $_POST['phone']);
        $address = mysqli_real_escape_string($database, $_POST['address']);
        $apt_num = mysqli_real_escape_string($database, $_POST['apt_num']);
        $city = mysqli_real_escape_string($database, $_POST['city']);
        $state = mysqli_real_escape_string($database, $_POST['state']);
        $zipcode = mysqli_real_escape_string($database, $_POST['zipcode']);
        $code = mysqli_real_escape_string($database, $_POST['generate_code']);
        

        $stmt = $database->prepare("INSERT INTO IndividualAccessCode (code, first_name, last_name, email, phone, address, apt_num, city, state, zipcode, end_date) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, DATE_ADD(NOW(), INTERVAL 7 DAY))");
        $stmt->bind_param("ssssssssssss", $code, $first_name, $last_name, $email, $phone, $address, $apt_num, $city, $state, $zipcode, $county);
        $stmt->execute();

        if(!$stmt){
            array_push($errors, "There was a problem processing your request. Please try your request again, and if it still does not work please contact the Montana Repertory Theatre directly for access.");
        }
        $stmt->close();

        if(count($errors) === 0){
            // Send request processing email
            $_SESSION['success'] = "Your request has been processed. Please check your email for instructions on how to access Zombie Thoughts.";
        }
    }

    if (isset($_POST['submitIndAccess'])) {
        $code = mysqli_real_escape_string($database, $_POST['generate_code']);
        // $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        // $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $email = mysqli_real_escape_string($database, $_POST['email']);
        // $phone = mysqli_real_escape_string($database, $_POST['phone']);
        $county = mysqli_real_escape_string($database, $_POST['county']);


        // $address = mysqli_real_escape_string($database, $_POST['address']);
        // $apt_num = mysqli_real_escape_string($database, $_POST['apt_num']);
        // $city = mysqli_real_escape_string($database, $_POST['city']);
        // $state = mysqli_real_escape_string($database, $_POST['state']);
        // $zipcode = mysqli_real_escape_string($database, $_POST['zipcode']);

        $end_date = date('Y-m-d', strtotime("+7 days"));
        $id = mysqli_real_escape_string($database, $_POST['id']);


        $stmt = $database->prepare("INSERT INTO AccessCode (code) VALUES (?)");
        if(!$stmt->bind_param("s", $code)){
            array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        if(!$stmt->execute()){
            array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close();

        
        // $stmt = $database->prepare(
        //     "INSERT INTO IndividualAccessCode (
        //         code, 
        //         first_name, 
        //         last_name, 
        //         email, 
        //         phone, 
        //         address, 
        //         apt_num, 
        //         city, 
        //         state, 
        //         zipcode,
        //         end_date
        //         ) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        // );

        $stmt = $database->prepare(
            "INSERT INTO IndividualAccessCode (
                code, 
                state,
                county,
                end_date
                ) VALUES(?, ?, ?, ?)"
        );

        // if(!$stmt->bind_param("sssssssssss", 
        //     $code, 
        //     $first_name, 
        //     $last_name,
        //     $email, 
        //     $phone,
        //     $address, 
        //     $apt_num,
        //     $city, 
        //     $state, 
        //     $zipcode, 
        //     $end_date
        // )){
        //     array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
     
        // }

        if(!$stmt->bind_param("ssss", 
        $code,
        $state,
        $county, 
        $end_date
    )){
        array_push($errors, "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
 
    }

        // $stmt->execute();

        if(!$stmt->execute()){
            array_push($errors, "Execute failed: (" . $stmt->errno . ") " . $stmt->error);
        }
        $stmt->close();

        
        require_once("./Admin/Functions/Emails.php");
        require_once("./Admin/Classes/SendEmail.php");
        $plainBody = MT_resident_email_plain_body($code);
        // $htmlBody = MT_resident_email_html_body($code);
        $subject = MT_Resident_email_subject($code);

        $objSendEmail = new SendEmail($email, $subject, $plainBody, $errors, "An email has been sent to you with instructions for accessing Zombie Thoughts.", "There has been an issue creating an access code.");
        
        if(count($errors) === 0){
            // Send request processing email
            
            $_SESSION['success'] = "An email has been sent to you with instructions for accessing Zombie Thoughts. You have seven days to enter your Zombie Thoughts code. Once you enter your code, you have 48 hours to finish playing Zombie Thoughts.";
        }

    }
?>