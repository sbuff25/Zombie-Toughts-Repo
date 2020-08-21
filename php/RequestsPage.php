<?php session_start(); ?>
<?php if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
        header('location: ./LoginPage.php');
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css">
        </head>
    <body>

        <?php
        include_once('Navbar.php');
        include_once('InstitutionForm.php');
        ?>
            <br><br><br><br><br>

        <h1>Zombie Thoughts Requests</h1>
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

        <h2>Institution Requests</h2>

        <!-- __________________________________Montana Requests Table______________________________ -->
        <?php
            $stmt = $database->prepare("SELECT * FROM InstitutionInformation WHERE institution_state='Montana'");
            $stmt->execute();
            $result = $stmt->get_result();
        ?>
            <form action='RequestsPage.php' method='POST'>
                <table class='table table-bordered text-dark table-hover table-striped table-light'>
                    <thead>
                        <tr class='text-center bg-secondary'>
                            <th colspan='11'><b>Montana Residents Zombie Thought Requests</b></th>
                        </tr>
                        <tr>
                            <th>Date Requested</th>
                            <th>Contact First Name</th>
                            <th>Contact Last Name</th>
                            <th>Contact Phone Number</th>
                            <th>Contact Email</th>
                            <th>Institution Name</th>
                            <th>Institution City</th>
                            <th>Institution County</th>
                            <th>Contacted</th>
                            <th>Notes</th>
                            <th>Options</th>

                        </tr>
                    </thead>
                    <tbody>
        <?php
            if($result->num_rows > 0){   
                //$row = $result->fetch_assoc();   
                // for($i = 0; $i < $result->num_rows; $i++){
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
                            <td><?php echo $row['contact_email']; ?></td>
                            <td><?php echo $row['institution_name']; ?></td>
                            <td><?php echo $row['institution_city']; ?></td>
                            <td><?php echo $row['institution_county']; ?></td>
                            <td>
                                <?php echo $row['contacted']; ?><br>
                                <form action='RequestsPage.php' method='POST'>
                                    <label for='contacted'>Contact Status</label>
                                    <select name='contacted' id='contact_select'>
                                        <option value='not contacted'>Not Contacted</option>
                                        <option value='in-progress'>In Progress</option>
                                        <option value='completed'>Complete</option>
                                    </select>
                                    <button type='submit' name='submitContacted' value='<?php echo $row['id']; ?>'>Submit</button>
                                    <script>
                                        document.getElementById('contact_select').selectedIndex=<?php echo $row['contacted']; ?>;
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
                                <form action='RequestsPage.php' method='POST'>
                                    <label for='note'>Create New Note</label>
                                    <textarea class='form-control' size='5' name='note' placeholder='Enter New Note...'></textarea>
                                    <button type='submit' name='newNote' value='<?php echo $row['id'];?>'>Submit Note</button>
                                </form>
                            </td>
                            <td> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button class="dropdown-item" data-toggle="modal" data-target="#InstitutionForm" value="<?php echo $row['id']; ?>"><span class="material-icons">description</span>FORM</button>
                                    <form action='RequestsPage.php' method='POST'>
                                        <button class="dropdown-item" type='submit' value="<?php echo $row['id']; ?>" name='deleteInstitution'><span class="material-icons">delete</span>DELETE</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
        <?php

                }
            }
            else{
        ?>
                <tr class='text-center'>
                    <td colspan='9'>There are currently no Montana residents' requests.</td>
                </tr>
        <?php
            }
            $stmt->close();

        ?>
                    </tbody>
                </table>
            </form>

        <!-- __________________________________Out of state Requests Table______________________________ -->

        <?php
            $stmt = $database->prepare("SELECT * FROM InstitutionInformation WHERE NOT institution_state='Montana'");
            $stmt->execute();
            $result = $stmt->get_result();
        ?>
            <form action='RequestsPage.php' method='POST'>
                <table class='table table-bordered text-dark table-hover table-striped table-light'>
                    <thead>
                        <tr class='text-center bg-secondary'>
                            <th colspan='10'><b>Out of State Zombie Thought Requests</b></th>
                        </tr>
                        <tr>
                            <th>Date Requested</th>
                            <th>Contact First Name</th>
                            <th>Contact Last Name</th>
                            <th>Contact Phone Number</th>
                            <th>Contact Email</th>
                            <th>Institution Name</th>
                            <th>Institution City</th>
                            <th>Institution State</th>
                            <th>Institution County</th>
                            <th>Options</th>

                        </tr>
                    </thead>
                    <tbody>
        <?php
            if($result->num_rows > 0){   
                //$row = $result->fetch_assoc();   
                // for($i = 0; $i < $result->num_rows; $i++){
                while($row = $result->fetch_assoc()){
        ?>
                        <tr>
                            <td><?php echo date('m/d/Y', strtotime($row['date_requested'])); ?></td>
                            <td><?php echo $row['contact_first_name']; ?></td>
                            <td><?php echo $row['contact_last_name']; ?></td>
                            <td><?php echo $row['contact_phone']; ?></td>
                            <td><?php echo $row['contact_email']; ?></td>
                            <td><?php echo $row['institution_name']; ?></td>
                            <td><?php echo $row['institution_city']; ?></td>
                            <td><?php echo $row['institution_state']; ?></td>
                            <td><?php echo $row['institution_county']; ?></td>
                            <td> <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href='#' class="dropdown-item" data-toggle="modal" data-target="#InstitutionForm"><span class="material-icons">description</span>FORM</a>
                                    <form action='RequestsPage.php' method='POST'>
                                        <button class="dropdown-item" type='submit' value="<?php echo $row['id']; ?>" name='deleteInstitution'><span class="material-icons">delete</span>DELETE</button>
                                    </form>
                                </div>
                            </td>

                        </tr>
        <?php

                }
            }
            else{
        ?>
                <tr class='text-center'>
                    <td colspan='10'>There are currently no out of state requests.</td>
                </tr>
        <?php
            }
            $stmt->close();

        ?>
                    </tbody>
                </table>
            </form>

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>
    </body>
</html>