<?php session_start(); ?>
<?php if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
        header('location: ./LoginPage');
        exit;

}
include_once('FormCheck.php');
?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zombie Thoughts Project: Requests</title>
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
        <!-- <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css"> -->
        </head>
    <body>

        <?php
        include_once('Navbar.php');
        include_once('InstitutionForm.php');
        include_once('IndividualForm.php');
        $InstArray = array();
        ?>
            <br><br><br><br><br>
        <div class="col-md-8 mx-auto bg-light text-dark text-center" >
            <div class="panel panel-default justify-content-center">
                <h1>Zombie Thoughts Requests</h1>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#MontanaInstitution">Montana Institution Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#OutInstitution">Out of State Institution Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#OutIndividual">Out of State Individual Requests</a>
                    </li>
                </ul>
                <br>
            </div>
        </div>

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

                <div class='tab-content mx-auto'>

                    <!-- __________________________________Montana Requests Table______________________________ -->
                    <div class='tab-pane container active' id='MontanaInstitution'>
                    <h2>Montana Institution Requests</h2>

                        <?php
                            $sortby = '';
                            $filterby='';
                        ?>

                        <?php
                            $stmt = $database->prepare("SELECT * FROM InstitutionInformation WHERE institution_state='Montana'");
                            $stmt->execute();
                            $result = $stmt->get_result();
                        ?>
                            <form action='RequestsPage' method='POST'>
                                <table class='table table-bordered text-dark table-hover table-striped table-light mx-auto mb-5'>
                                    <thead>
                                        <tr class='text-center bg-secondary'>
                                            <th colspan='12' class='text-center'><b>Montana Residents Zombie Thought Requests</b></th>
                                        </tr>
                                        <tr>
                                            <th scope='col'>Date Requested</th>
                                            <th scope='col'>Contact First Name</th>
                                            <th scope='col'>Contact Last Name</th>
                                            <th scope='col'>Contact Phone Number</th>
                                            <th scope='col'>Contact Extension (if available)</th>
                                            <th scope='col'>Contact Email</th>
                                            <th scope='col'>Institution Name</th>
                                            <th scope='col'>Institution City</th>
                                            <th scope='col'>Institution County</th>
                                            <th scope='col'>Contacted</th>
                                            <th scope='col'>Notes</th>
                                            <th scope='col'>Options</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php
                            if($result->num_rows > 0){   
                                while($row = $result->fetch_assoc()){
                                    $stmt2 = $database->prepare("SELECT note FROM InstitutionNotes WHERE institution_id=?");
                                    $stmt2->bind_param('i', $row['id']);
                                    $stmt2->execute();
                                    $result2 = $stmt2->get_result();
                        ?>
                                        <tr>
                                            <td><?php echo date('m/d/Y', strtotime($row['date_requested'])); ?></td>
                                            <td><?php echo $row['contact_first_name']; ?></td>
                                            <td><?php echo $row['contact_last_name']; ?></td>
                                            <td><?php echo $row['contact_phone']; ?></td>
                                            <td><?php echo $row['contact_ext']; ?></td>
                                            <td><?php echo $row['contact_email']; ?></td>
                                            <td><?php echo $row['institution_name']; ?></td>
                                            <td><?php echo $row['institution_city']; ?></td>
                                            <td><?php echo $row['institution_county']; ?></td>
                                            <td>
                                                <?php echo $row['contacted']; ?><br>
                                                <form action='RequestsPage' method='POST'>
                                                    <label for='contacted'>Contact Status</label>
                                                    <select name='contacted' id='contact_select'>
                                                        <option value='not contacted'>Not Contacted</option>
                                                        <option value='in-progress'>In Progress</option>
                                                        <option value='completed'>Complete</option>
                                                    </select>
                                                    <?php $id = $row['id']; 
                                                        $contacted = $row['contacted'];
                                                    ?>
                                                    <button type='submit' name='submitContacted' value="<?php echo $id; ?>">Submit</button>
                                                    <script>
                                                        document.getElementById('contact_select').selectedIndex="<?php echo $contacted; ?>";
                                                    </script>
                                                </form>
                                            
                                            </td>
                                            <td>
                                                <ul>
                                                    <?php
                                                        while($row2 = $result2->fetch_assoc()){
                                                    ?>
                                                            <li><?php echo $row2['note']; ?></li>
                                                    <?php
                                                        }
                                                    ?>
                                                
                                                </ul>
                                                <form action='RequestsPage' method='POST'>
                                                    <label for='note'>Create New Note</label>
                                                    <textarea class='form-control' size='5' name='note' placeholder='Enter New Note...'></textarea>
                                                    <?php $id = $row['id'];?>
                                                    <button type='submit' name='newNote' value="<?php echo $id;?>">Submit Note</button>
                                                </form>
                                            </td>
                                            <!--_______________________MT Institution Button Info______________-->
                                            <?php
                                                            $cFirstName = $row['contact_first_name'];
                                                            $cLastName = $row['contact_last_name'];
                                                            $cPhone = $row['contact_phone'];
                                                            $cExt = $row['contact_ext'];
                                                            $cEmail = $row['contact_email'];
                                                            $iName = $row['institution_name'];
                                                            $iAddress = $row['institution_mailing_address'];
                                                            $iCity = $row['institution_city'];
                                                            $iState = "Montana";
                                                            $iZip = $row['institution_zipcode'];
                                                            $iCounty = $row['institution_county'];
                                                            $iID = $row['id'];
        

                                                        // $InstArray[$row['id']] = $IArray;
                                                    ?>
                                            <td> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    
                                                    <form action='GiveInstitutionAccess' method='POST'>
                                                        <input id='accessCode' name='accessCode' hidden>
                                                        <input name="cFirstName" value="<?php echo $row['contact_first_name']; ?>" hidden>
                                                        <input name="cLastName" value="<?php echo $row['contact_last_name']; ?>" hidden>
                                                        <input name="cPhone" value="<?php echo $row['contact_phone']; ?>" hidden>
                                                        <input name="cExt" value="<?php echo $row['contact_ext']; ?>" hidden>
                                                        <input name='cEmail' value="<?php echo $row['contact_email']; ?>" hidden>
                                                        <input name='iName' value="<?php echo $row['institution_name']; ?>" hidden>
                                                        <input name='iAddress' value="<?php echo $row['institution_mailing_address']; ?>" hidden>
                                                        <input name='iCity' value="<?php echo $row['institution_city']; ?>" hidden>
                                                        <input name='iState' value='Montana' hidden>
                                                        <input name='iZip' value="<?php echo $row['institution_zipcode']; ?>" hidden>
                                                        <input name='iCounty' value="<?php echo $row['institution_county']; ?>" hidden>

                                                        <?php $id = $row['id'];?>   

                                                        <button class='dropdown-item' name='id' type="submit" value="<?php echo $id; ?>"><span class="material-icons">description</span>FORM</button>
                                                                                                                
                                                    </form>

                                                    <!--____________________________________________________________________________________________________________________-->
                                                    <form action='RequestsPage' method='POST'>
                                                        <?php $id = $row['id'];?>
                                                        <button class="dropdown-item bg-danger" type='submit' value="<?php echo $id; ?>" name='deleteInstitution'><span class="material-icons">delete</span>DELETE</button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    
                        <?php
                            $stmt2->close();
                                }
                            }
                            else{
                        ?>
                                <tr class='text-center'>
                                    <td colspan='12'>There are currently no Montana residents' requests.</td>
                                </tr>
                        <?php
                            }
                            $stmt->close();

                        ?>
                                    </tbody>
                                </table>
                            </form>
                    </div>

                    <!-- __________________________________Out of state Requests Table______________________________ -->

                    
                    <div class='tab-pane container fade' id='OutInstitution'>
                        <h2>Out of State Institution Requests</h2>
                        <?php
                            $stmt = $database->prepare("SELECT * FROM InstitutionInformation WHERE NOT institution_state='Montana'");
                            $stmt->execute();
                            $result = $stmt->get_result();
                        ?>
                            <form action='RequestsPage' method='POST'>
                                <table class='table table-bordered text-dark table-hover table-striped table-light mx-auto mb-5'>
                                    <thead>
                                        <tr class='text-center bg-secondary'>
                                            <th colspan='13' class='text-center'><b>Out of State Zombie Thought Requests</b></th>
                                        </tr>
                                        <tr>
                                            <th scope='col'>Date Requested</th>
                                            <th scope='col'>Contact First Name</th>
                                            <th scope='col'>Contact Last Name</th>
                                            <th scope='col'>Contact Phone Number</th>
                                            <th scope='col'>Contact Extension (if available)</th>
                                            <th scope='col'>Contact Email</th>
                                            <th scope='col'>Institution Name</th>
                                            <th scope='col'>Institution City</th>
                                            <th scope='col'>Institution State</th>
                                            <th scope='col'>Institution County</th>
                                            <th scope='col'>Contacted</th>
                                            <th scope='col'>Notes</th>
                                            <th scope='col'>Options</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            if($result->num_rows > 0){   
                                while($row = $result->fetch_assoc()){
                                    $stmt2 = $database->prepare("SELECT note FROM InstitutionNotes WHERE institution_id=?");
                                    $stmt2->bind_param('i', $row['id']);
                                    $stmt2->execute();
                                    $result2 = $stmt2->get_result();
                        ?>
                                        <tr>
                                            <td><?php echo date('m/d/Y', strtotime($row['date_requested'])); ?></td>
                                            <td><?php echo $row['contact_first_name']; ?></td>
                                            <td><?php echo $row['contact_last_name']; ?></td>
                                            <td><?php echo $row['contact_phone']; ?></td>
                                            <td><?php echo $row['contact_ext']; ?></td>
                                            <td><?php echo $row['contact_email']; ?></td>
                                            <td><?php echo $row['institution_name']; ?></td>
                                            <td><?php echo $row['institution_city']; ?></td>
                                            <td><?php echo $row['institution_state']; ?></td>
                                            <td><?php echo $row['institution_county']; ?></td>
                                            <td>
                                                <?php echo $row['contacted']; ?><br>
                                                <form action='RequestsPage' method='POST'>
                                                    <label for='contacted'>Contact Status</label>
                                                    <select name='contacted' id='contact_select'>
                                                        <option value='not contacted'>Not Contacted</option>
                                                        <option value='in-progress'>In Progress</option>
                                                        <option value='completed'>Complete</option>
                                                    </select>
                                                    <?php $id = $row['id']; 
                                                        $contacted = $row['contacted'];
                                                    
                                                    ?>
                                                    <button type='submit' name='submitContacted' value="<?php echo $id; ?>">Submit</button>
                                                    <script>
                                                        document.getElementById('contact_select').selectedIndex="<?php echo $contacted; ?>";
                                                    </script>
                                                </form>
                                            
                                            </td>
                                            <td>
                                                <ul>
                                                    <?php
                                                        while($row2 = $result2->fetch_assoc()){
                                                    ?>
                                                            <li><?php echo $row2['note']; ?></li>
                                                    <?php
                                                        }
                                                    ?>
                                                
                                                </ul>
                                                <form action='RequestsPage' method='POST'>
                                                    <label for='note'>Create New Note</label>
                                                    <textarea class='form-control' size='5' name='note' placeholder='Enter New Note...'></textarea>
                                                    <?php $id = $row['id']; ?>
                                                    <button type='submit' name='newNote' value='<?php echo $id?>'>Submit Note</button>
                                                </form>
                                            </td>
                                            <td> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                    
                                                    <form action='GiveInstitutionAccess' method='POST'>
                                                        <input id='accessCode' name='accessCode' hidden>
                                                        <input name="cFirstName" value="<?php echo $row['contact_first_name']; ?>" hidden>
                                                        <input name="cLastName" value="<?php echo $row['contact_last_name']; ?>" hidden>
                                                        <input name="cPhone" value="<?php echo $row['contact_phone']; ?>" hidden>
                                                        <input name="cExt" value="<?php echo $row['contact_ext']; ?>" hidden>
                                                        <input name='cEmail' value="<?php echo $row['contact_email']; ?>" hidden>
                                                        <input name='iName' value="<?php echo $row['institution_name']; ?>" hidden>
                                                        <input name='iAddress' value="<?php echo $row['institution_mailing_address']; ?>" hidden>
                                                        <input name='iCity' value="<?php echo $row['institution_city']; ?>" hidden>
                                                        <input name='iState' value="<?php echo $row['institution_state']; ?>" hidden>
                                                        <input name='iZip' value="<?php echo $row['institution_zipcode']; ?>" hidden>
                                                        <input name='iCounty' value="<?php echo $row['institution_county']; ?>" hidden>

                                                        <?php $id = $row['id'];?>   

                                                        <button name='id' class='dropdown-item' type="submit" value="<?php echo $id; ?>"><span class="material-icons">description</span>FORM</button>
                                                                                                                
                                                    </form>
                                                    <form action='RequestsPage' method='POST'>
                                                        <button class="dropdown-item bg-danger" type='submit' value="<?php echo $row['id']; ?>" name='deleteInstitution'><span class="material-icons">delete</span>DELETE</button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    
                        <?php
                                    $stmt2->close();

                                }
                            }
                            else{
                        ?>
                                <tr class='text-center'>
                                    <td colspan='13'>There are currently no out of state requests.</td>
                                </tr>
                        <?php
                            }
                            $stmt->close();

                        ?>
                                    </tbody>
                                </table>
                            </form>
                    </div>

                    <!-- __________________________________Out of state Individual Requests Table______________________________ -->

                    
                    <div class='tab-pane container fade' id='OutIndividual'>
                        <h2>Out of State Individual Requests</h2>
                        <?php
                            $stmt = $database->prepare("SELECT * FROM OutOfStateIndividual");
                            $stmt->execute();
                            $result = $stmt->get_result();
                        ?>
                            <form action='RequestsPage' method='POST'>
                                <table class='table table-bordered text-dark table-hover table-striped table-light mx-auto mb-5'>
                                    <thead>
                                        <tr class='text-center bg-secondary'>
                                            <th colspan='12' class='text-center'><b>Out of State Zombie Thought Requests</b></th>
                                        </tr>
                                        <tr>
                                            <th scope='col'>Date Requested</th>
                                            <th scope='col'>First Name</th>
                                            <th scope='col'>Last Name</th>
                                            <th scope='col'>Phone Number</th>
                                            <th scope='col'>Email</th>
                                            <th scope='col'>Address</th>
                                            <th scope='col'>City</th>
                                            <th scope='col'>State</th>
                                            <th scope='col'>County</th>
                                            <th scope='col'>Contacted</th>
                                            <th scope='col'>Notes</th>
                                            <th scope='col'>Options</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                            if($result->num_rows > 0){   
                                while($row = $result->fetch_assoc()){
                                    $stmt2 = $database->prepare("SELECT note FROM OSIndividualNotes WHERE individual_id=?");
                                    $stmt2->bind_param('i', $row['id']);
                                    $stmt2->execute();
                                    $result2 = $stmt2->get_result();
                        ?>
                                        <tr>
                                            <td><?php echo date('m/d/Y', strtotime($row['date_requested'])); ?></td>
                                            <td><?php echo $row['first_name']; ?></td>
                                            <td><?php echo $row['last_name']; ?></td>
                                            <td><?php echo $row['phone']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['city']; ?></td>
                                            <td><?php echo $row['state']; ?></td>
                                            <td><?php echo $row['county']; ?></td>
                                            <td>
                                                <?php echo $row['contacted']; ?><br>
                                                <form action='RequestsPage' method='POST'>
                                                    <label for='contacted'>Contact Status</label>
                                                    <select name='contacted' id='contact_select'>
                                                        <option value='not contacted'>Not Contacted</option>
                                                        <option value='in-progress'>In Progress</option>
                                                        <option value='completed'>Complete</option>
                                                    </select>
                                                    <?php $id = $row['id'];?>
                                                    <?php $contacted = $row['contacted']; ?>
                                                    <button type='submit' name='submitContactedIndividual' value="<?php echo $id; ?>">Submit</button>
                                                    <script>
                                                        document.getElementById('contact_select').selectedIndex="<?php echo $contacted; ?>";
                                                    </script>
                                                </form>
                                            
                                            </td>
                                            <td>
                                                <ul>
                                                    <?php
                                                        while($row2 = $result2->fetch_assoc()){
                                                    ?>
                                                            <li><?php echo $row2['note']; ?></li>
                                                    <?php
                                                        }
                                                    ?>
                                                
                                                </ul>
                                                <form action='RequestsPage' method='POST'>
                                                    <label for='note'>Create New Note</label>
                                                    <textarea class='form-control' size='5' name='note' placeholder='Enter New Note...'></textarea>
                                                    <?php $id = $row['id'];?>
                                                    <button type='submit' name='newIndividualNote' value="<?php echo $id;?>">Submit Note</button>
                                                </form>
                                            </td>
                                            <td> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <form action='GiveIndividualAccess' method='POST'>
                                                        
                                                        <input name="first_name" value="<?php echo $row['first_name']; ?>" hidden>
                                                        <input name="last_name" value="<?php echo $row['last_name']; ?>" hidden>
                                                        <input name="phone" value="<?php echo $row['phone']; ?>" hidden>
                                                        <input name='email' value="<?php echo $row['email']; ?>" hidden>
                                                        <input name='address' value="<?php echo $row['address']; ?>" hidden>
                                                        <input name='apt_num' value="<?php echo $row['apt_num']; ?>" hidden>
                                                        <input name='city' value="<?php echo $row['city']; ?>" hidden>
                                                        <input name='state' value="<?php echo $row['state']; ?>" hidden>
                                                        <input name='zipcode' value="<?php echo $row['zipcode']; ?>" hidden>

                                                        <?php $id = $row['id'];?>   

                                                        <button name='id' class='dropdown-item' type="submit" value="<?php echo $id; ?>"><span class="material-icons">description</span>FORM</button>
                                                                                                                
                                                    </form>
                                                    <!-- <button class="dropdown-item" type='button' data-toggle="modal" data-target="#IndividualForm" value="<?php //echo $row['id']; ?>"><span class="material-icons">description</span>FORM</button> -->
                                                    <form action='RequestsPage' method='POST'>
                                                        <?php $id = $row['id'];?>
                                                        <button class="dropdown-item bg-danger" type='submit' value="<?php echo $id; ?>" name='deleteIndividual'><span class="material-icons">delete</span>DELETE</button>
                                                    </form>
                                                </div>
                                            </td>

                                        </tr>
                                    
                        <?php
                                    $stmt2->close();

                                }
                            }
                            else{
                        ?>
                                <tr class='text-center'>
                                    <td colspan='12'>There are currently no out of state requests.</td>
                                </tr>
                        <?php
                            }
                            $stmt->close();

                        ?>
                                    </tbody>
                                </table>
                            </form>
                    </div>
                </div>


        <!--Footer-->
        <footer class="sticky-footer center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>    

    </body>
</html>