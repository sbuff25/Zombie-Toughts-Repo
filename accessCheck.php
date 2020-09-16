<?php 

require_once("./php/Classes/Database.php");


    $errors = array();
    if (isset($_POST['submitCode'])) {
        $code = mysqli_real_escape_string($database, $_POST['accessCode']);
        if(strlen($code) < 17 || strlen($code) > 17){
            array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");
        }
        if(substr($code, 0, 3) === "zti" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT * FROM IndividualAccessCode WHERE code=?");
            $stmt->bind_param("s", $code);
            $stmt->execute();

        }
        elseif(substr($code, 0, 3) === "ztI" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT counselor_first_name, counselor_last_name, counselor_email, counselor_phone, counselor_office_number, counselor_bldg, total_number_of_accesses FROM InstitutionAccessCode WHERE code=?");
            $stmt->bind_param("s", $code);
            $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows === 1){
                $row = $result->fetch_assoc();
                if(int($row['total_number_of_accesses']) <= 0){
                    array_push($errors, "The code you have entered has passed its access limit. If you are a student, please contact your teacher.");
                }

            }
            else{

                array_push($errors, "Please check your access code to ensure that it was entered correctly. It is case-sensitive.");

            }

        }
        elseif(substr($code, 0, 3) === "ztp" && strlen($code) === 17){
            $stmt = $database->prepare("SELECT * FROM PreviewAccessCode WHERE code=?");
            $stmt->bind_param("s", $code);
            $stmt->execute();

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
        $stmt->bind_param("sssssssssis", $first_name, $last_name, $email, $phone, $ext, $institution_name, $address, $city, $state, $zipcode, $county);
        $stmt->execute();

        if(!$stmt){
            array_push($errors, "There was a problem processing your request. Please try your request again, and if it still does not work please contact the Montana Repertory Theatre directly for access.");
        }

        if(count($errors) === 0){
            // Send request processing email
        }

    }

    if (isset($_POST['individualAccessRequest'])) {

        $first_name = mysqli_real_escape_string($database, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($database, $_POST['last_name']);
        $email = mysqli_real_escape_string($database, $_POST['email']);
        $phone = mysqli_real_escape_string($database, $_POST['phone']);
        $address = mysqli_real_escape_string($database, $_POST['address']);
        $city = mysqli_real_escape_string($database, $_POST['city']);
        $state = mysqli_real_escape_string($database, $_POST['state']);
        $zipcode = mysqli_real_escape_string($database, $_POST['zipcode']);
        $county = mysqli_real_escape_string($database, $_POST['county']);

        $stmt = $database->prepare("INSERT INTO OutOfStateIndividual (first_name, last_name, email, phone, address, city, state, zipcode, county, contacted) VALUES(?, ?, ?, ?, ?, ?, ?, ?, 'not contacted')");
        $stmt->bind_param("sssssssss", $first_name, $last_name, $email, $phone, $address, $city, $state, $zipcode, $county);
        $stmt->execute();

        if(!$stmt){
            array_push($errors, "There was a problem processing your request. Please try your request again, and if it still does not work please contact the Montana Repertory Theatre directly for access.");
        }

        if(count($errors) === 0){
            // Send request processing email
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
        }
    }
?>