<?php session_start(); ?>
<?php if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
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
        <title>Zombie Thoughts Project: Admin Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- <link rel="stylesheet" href="../menu.css"> -->
        <link rel="stylesheet" href="./reports.css">
        <link rel="stylesheet" href="./phpforms.css">
        
    

    </head>
    <body>
        <?php
            include_once('Navbar.php');
        ?>
        <div class="col-md-8 mx-auto bg-light text-dark text-center align-middle" >
            <div class="panel panel-default">
                <br><br><br><br>
                <h1>Montana Repertory Theatre: Select Report</h1>
                <form action='ReportQuery.php' method='POST'>
                    <select name='reportSelect'>
                        <option value='county'>Montana: Number of Requests By County</option>
                        <option value='students'>Montana: Number of Students By County</option>
                        <option value='state'>Out-of-State: Number of Requests By State</option>
                        <option value='state_students'>Out-of-State: Number of Students By State</option>
                    </select>
                    <br>
                    <button type='submit' class='btn btn-primary btn-lg'>Generate Report</button>
                </form>

                <a href="javascript:history.back()" class='btn btn-danger btn-lg' role='button'>Back</a>
            </div>
        </div>
        

        <!--Footer-->
        <footer class="sticky-footer center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    
    </body>
</html>