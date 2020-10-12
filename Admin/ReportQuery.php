<?php session_start(); 
require_once("./Classes/Database.php");
?>
<?php if(!isset($_SESSION['username']) && !isset($_SESSION['email']) && !isset($_POST['reportSelect'])){
        header('location: ./AdminPage');
        exit;

}?>
<?php
    if (isset($_GET['logout'])) {
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        session_destroy();
    } 
?>

<?php include_once('FormCheck.php'); ?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zombie Thoughts Project: Query</title>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="./reports.css">
        
    

    </head>
    <body>
        <div class="col-sm-6 col-sm-offset-3" >
            <div class="panel panel-default align-items-center cont">
                <br><br><br><br>
                <img src='../images/Logos/Logos/1. Primary Logo - Green/1_MontanaRep_PrimaryLogo_GreenLandscape.png' alt='Montana Repertory Theatre Logo' width='25%' height='25%'>
                <h1 class='report-head text-center'>Montana Repertory Theatre Report</h1>
                <?php 
                    if($_POST['reportSelect']==="county"){
                        ?>
                        <div class='report-div'>
                            <h2 class='report-title text-center'>Total Number of Requests for Montana Residents By County</h2>
                            <?php 
                                $sql = $database->prepare("SELECT county, Count(county) AS number_requests
                                                            FROM IndividualAccessCode
                                                                WHERE county IN ('Beaverhead', 'Big Horn','Blaine','Broadwater','Carbon','Carter','Cascade','Chouteau','Custer','Daniels','Dawson','Deer Lodge','Fallon','Fergus','Flathead','Gallatin','Garfield'
                                                        ,'Glacier','Golden Valley','Granite','Hill','Jefferson','Judith Basin','Lake','Lewis And Clark','Liberty','Lincoln','Madison','McCone','Meagher','Mineral','Missoula','Musselshell','Park','Petroleum','Phillips','Pondera'
                                                        ,'Powder River','Powell','Prairie','Ravalli','Richland','Roosevelt','Rosebud','Sanders','Sheridan','Silver Bow','Stillwater','Sweet Grass','Teton','Toole','Treasure','Valley','Wheatland','Wibaux','Yellowstone','Yellowstone National Park')
                                                            GROUP BY county
                                                            ORDER BY county"); 
                                if(!$sql->bind_param("")){    
                                    array_push($errors, "Binding parameters failed: (" . $sql->errno . ") " . $sql->error);  
                                }
                                if(!$sql->execute()){            
                                    array_push($errors, "Execute failed: (" . $sql->errno . ") " . $sql->error);
                                    array_push($errors, "Could not generate report");  
                                }
                            ?>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">County</th>
                                            <th scope="col">Number of Requests By County</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $result = $sql->get_result();
                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['county']; ?></td>
                                                        <td><?php echo $row['number_requests']; ?></td>
                                                    </tr>
                                        <?php
                                                }
                                        ?>      
                                        <?php
                                            }
                                            else{
                                        ?>
                                                <tr>
                                                    <td colspan="2">No Results Found</td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            <?php
                                $sql->close();
                            ?>
                        </div>


                        
                        <?php
                    }
                    elseif($_POST['reportSelect']==="students"){

                        ?>
                        <div class='report-div'>
                            <h2 class='report-title text-center'>Total Number of Students in Montana By County</h2>
                            <?php 
                                $sql = $database->prepare("SELECT institution_county, SUM(number_students) AS Total_Students_Per_County
                                                            FROM InstitutionAccessCode
                                                            WHERE institution_county IN ('Beaverhead','Big Horn','Blaine','Broadwater','Carbon','Carter','Cascade','Chouteau','Custer','Daniels','Dawson','Deer Lodge','Fallon','Fergus','Flathead','Gallatin','Garfield'
                                                            ,'Glacier','Golden Valley','Granite','Hill','Jefferson','Judith Basin','Lake','Lewis And Clark','Liberty','Lincoln','Madison','McCone','Meagher','Mineral','Missoula','Musselshell','Park','Petroleum','Phillips','Pondera'
                                                            ,'Powder River','Powell','Prairie','Ravalli','Richland','Roosevelt','Rosebud','Sanders','Sheridan','Silver Bow','Stillwater','Sweet Grass','Teton','Toole','Treasure','Valley','Wheatland','Wibaux','Yellowstone','Yellowstone National Park')
                                                            GROUP BY institution_county
                                                            ORDER BY institution_county"); 
                                if(!$sql->bind_param("")){    
                                    array_push($errors, "Binding parameters failed: (" . $sql->errno . ") " . $sql->error);  
                                }
                                if(!$sql->execute()){            
                                    array_push($errors, "Execute failed: (" . $sql->errno . ") " . $sql->error);
                                    array_push($errors, "Could not generate report");  
                                }

                            ?>
                            <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">County</th>
                                            <th scope="col">Total Students By County</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $result = $sql->get_result();
                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['institution_county']; ?></td>
                                                        <td><?php echo $row['Total_Students_Per_County']; ?></td>
                                                    </tr>
                                        <?php
                                                }
                                        ?>      
                                        <?php
                                            }
                                            else{
                                        ?>
                                                <tr>
                                                    <td colspan="2">No Results Found</td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            <?php
                                $sql->close();
                            ?>
                        </div>
                        <?php
                    }
                    elseif($_POST['reportSelect']==="state"){
                        ?>
                        <div class='report-div'>
                            <h2 class='report-title text-center'>Total Number of Out-Of-State Individuals By State</h2>
                            <?php 
                                $sql = $database->prepare("	SELECT state, Count(state) as total_per_state
                                                            FROM IndividualAccessCode
                                                            WHERE state<>'Montana'
                                                            GROUP BY state
                                                            ORDER BY state
                                                        "); 
                                if(!$sql->bind_param("")){    
                                    array_push($errors, "Binding parameters failed: (" . $sql->errno . ") " . $sql->error);  
                                }
                                if(!$sql->execute()){            
                                    array_push($errors, "Execute failed: (" . $sql->errno . ") " . $sql->error);
                                    array_push($errors, "Could not generate report");  
                                }
                            ?>
                                   <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">State</th>
                                            <th scope="col">Total Out-of-State Individuals By State</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $result = $sql->get_result();
                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['state']; ?></td>
                                                        <td><?php echo $row['total_per_state']; ?></td>
                                                    </tr>
                                        <?php
                                                }
                                        ?>      
                                        <?php
                                            }
                                            else{
                                        ?>
                                                <tr>
                                                    <td colspan="2">No Results Found</td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            <?php
                            
                                $sql->close();
                            ?>
                        </div>
                        <?php
                    }
                    elseif($_POST['reportSelect']==="state_students"){
                        ?>
                        <div class='report-div'>
                            <h2 class='report-title text-center'>Total Number of Out-Of-State Students By State</h2>
                            <?php 
                                $sql = $database->prepare("	SELECT institution_state, SUM(number_students) AS Total_Students_Per_State
                                                            FROM InstitutionAccessCode
                                                            WHERE institution_state<>'Montana' AND institution_state<>''
                                                            GROUP BY institution_state
                                                            ORDER BY institution_state
                                                        "); 
                                if(!$sql->bind_param("")){    
                                    array_push($errors, "Binding parameters failed: (" . $sql->errno . ") " . $sql->error);  
                                }
                                if(!$sql->execute()){            
                                    array_push($errors, "Execute failed: (" . $sql->errno . ") " . $sql->error);
                                    array_push($errors, "Could not generate report");  
                                }
                            ?>
                                   <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">State</th>
                                            <th scope="col">Total Students By State</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $result = $sql->get_result();
                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['institution_state']; ?></td>
                                                        <td><?php echo $row['Total_Students_Per_State']; ?></td>
                                                    </tr>
                                        <?php
                                                }
                                        ?>      
                                        <?php
                                            }
                                            else{
                                        ?>
                                                <tr>
                                                    <td colspan="2">No Results Found</td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                        
                                    </tbody>
                                </table>
                            <?php
                                $sql->close();
                            ?>
                        </div>
                        <?php
                    }
                    else{
                        ?>
                        <h2>There has been an error processing your request</h2>
                        <?php
                    }
                ?>

                
                <a href="javascript:history.back()" class='btn btn-danger btn-sm' role='button'>Back</a>
            </div>
        </div>
        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    
    </body>
</html>