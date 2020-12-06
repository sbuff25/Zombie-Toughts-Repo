<?php session_start(); ?>
<?php if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
        header('location: ./LoginPage');
        exit;

    }
    $id;
    include_once('FormCheck.php');
    if(isset($_POST['ViewInstitution'])){
        $id = $_POST['ViewInstitution'];
        $_SESSION['inst_id'] = $id;
    }
    elseif($_SESSION['inst_id']){
        $id = $_SESSION['inst_id'];
    }
    
    
    // Get Institution Information_________________________________________________________________
    $stmt1 = $database->prepare("SELECT * FROM InstitutionInformation WHERE id=?");
    if(!$stmt1->bind_param('i', $id))
    {
        array_push($errors, "Binding parameters failed: (" . $stmt1->errno . ") " . $stmt1->error);
    
    }
    if(!$stmt1->execute()){
        array_push($errors, "Execute failed: (" . $stmt1->errno . ") " . $stmt1->error);
    }
    $result1 = $stmt1->get_result();

    $contacted;
    $contact_first_name;
    $contact_last_name;
    $contact_phone;
    $contact_ext;
    $contact_email;
    $institution_name;
    $institution_mailing_address;
    $institution_city;
    $institution_state;
    $institution_zipcode;
    $institution_county;

    while($row1 = $result1->fetch_assoc()){
        $contacted = $row1['contacted'];
        $contact_first_name = $row1['contact_first_name'];
        $contact_last_name = $row1['contact_last_name'];
        $contact_phone = $row1['contact_phone'];
        $contact_ext = $row1['contact_ext'];
        $contact_email = $row1['contact_email'];
        $institution_name = $row1['institution_name'];
        $institution_mailing_address = $row1['institution_mailing_address'];
        $institution_city = $row1['institution_city'];
        $institution_state = $row1['institution_state'];
        $institution_zipcode = $row1['institution_zipcode'];
        $institution_county = $row1['institution_county'];
    }





    // Get Institution Notes______________________________________________________________________
    $stmt2 = $database->prepare("SELECT note FROM InstitutionNotes WHERE institution_id=?");
    if(!$stmt2->bind_param('i', $id))
    {
        array_push($errors, "Binding parameters failed: (" . $stmt2->errno . ") " . $stmt2->error);
    
    }
    if(!$stmt2->execute()){
        array_push($errors, "Execute failed: (" . $stmt2->errno . ") " . $stmt2->error);
    }
    $result2 = $stmt2->get_result();
?>


<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $institution_name;?> - Zombie Thoughts Project</title>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" href="./phpforms.css">

    </head>
    <body>

        <?php
            include_once('Navbar.php');
            include_once('InstitutionForm.php');            
        ?>
        <br><br><br><br><br>

        <div class="col-lg-10 mx-auto bg-light text-dark text-center" >
            <div class="panel panel-default justify-content-center">
                <h1>Zombie Thoughts Request - <?php echo $institution_name;?></h1>
                <br>
                <?php include_once("errors.php"); ?>

                <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                <p>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
                </p>
                </div>
                <?php endif ?>
                <h4>Contact Status: <?php echo $contacted; ?></h4>
                <form action='InstitutionPage' method='POST'>
                    <label for='contacted'>Update Contact Status</label>
                    <select name='contacted' id='contact_select'>
                        <option value='not contacted'>Not Contacted</option>
                        <option value='in-progress'>In Progress</option>
                        <option value='completed'>Complete</option>
                    </select>
                    <button type='submit' name='submitContacted' value="<?php echo $id; ?>">Submit</button>
                </form>
                <br>
                <h4 class='contact-info-h4'>Institution Name: <?php echo $institution_name;?></h4>
                <h5 class='contact-info-h5'>Mailing Address:</h5>
                <h5 class='contact-info-h5'><?php echo $institution_mailing_address; ?></h5>
                <h5 class='contact-info-h5'><?php echo $institution_city . ", " . $institution_state . " " . $institution_zipcode . " " . $institution_county; ?></h5>

                <br>
                <h4 class='contact-info-h5'>Contact: <?php echo $contact_first_name . " " . $contact_last_name;?></h4>
                <h5 class='contact-info-h6'>Email: <a href="mailto:<?php echo $contact_email;?>"><?php echo $contact_email;?></a></h5>
                <h5 class='contact-info-h6'>Phone: <?php echo $contact_phone; ?></h5>
                <h5 class='contact-info-h6'>Ext: <?php echo $contact_ext;?></h5>

                <form action='GiveInstitutionAccess' method='POST'>
                    <input id='accessCode' name='accessCode' hidden>
                    <input name="cFirstName" value="<?php echo $contact_first_name; ?>" hidden>
                    <input name="cLastName" value="<?php echo $contact_last_name; ?>" hidden>
                    <input name="cPhone" value="<?php echo $contact_phone; ?>" hidden>
                    <input name="cExt" value="<?php echo $contact_ext; ?>" hidden>
                    <input name='cEmail' value="<?php echo $contact_email; ?>" hidden>
                    <input name='iName' value="<?php echo $institution_name; ?>" hidden>
                    <input name='iAddress' value="<?php echo $institution_mailing_address; ?>" hidden>
                    <input name='iCity' value="<?php echo $institution_city; ?>" hidden>
                    <input name='iState' value='Montana' hidden>
                    <input name='iZip' value="<?php echo $institution_zipcode; ?>" hidden>
                    <input name='iCounty' value="<?php echo $institution_county; ?>" hidden>  

                    <button class='btn btn-primary' name='id' type="submit" value="<?php echo $id; ?>"><span class="material-icons">description</span>FORM</button>
                                                                            
                </form>
                <br>

                <div class='institution_notes_area'>
                    <h3 class='notes-title'>Notes</h3>
                    <div>
                    </div>
                    <ul class='notes-list'>
                        <?php
                            while($row2 = $result2->fetch_assoc()){
                        ?>
                                <li><?php echo $row2['note']; ?></li>
                        <?php
                            }
                        ?>
                    
                    </ul>
                    <form action='InstitutionPage' method='POST'>
                        <textarea class='form-control' size='5' name='note' placeholder='Enter New Note...'></textarea>
                        <button type='submit' name='newNote' value="<?php echo $id;?>">Submit Note</button>
                    </form>
                </div>

            </div>
        </div>
        <?php 
        $stmt1->close();
        $stmt2->close(); 
        ?>

        <script>
            document.getElementById('contact_select').selectedIndex="<?php echo $contacted; ?>";
        </script>
    </body>

</html>