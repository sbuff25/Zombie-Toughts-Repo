<?php session_start(); ?>
<?php if(isset($_SESSION['username']) && isset($_SESSION['email'])){
        header('location: ./AdminPage.php');
        exit;

}?>
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
        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css">
        
    

    </head>
    <body>
        <div>
            <br><br><br><br>  <!--Delete this line when Spencer begins to style -->
            <h1>Admin Login</h1>

            <form action='LoginPage.php' method='POST'>
                <div>
                    <label for='email'>Email or Username:</label>
                    <input name='emailorusername' placeholder='Enter Email or Username...'>
                </div>
                <br>
                <div>
                    <label for='password'>Password:</label>
                    <input name='password' type='password' placeholder='Enter Password...'>
                </div>
                <br>
                <?php 
                    include_once('errors.php');
                    if (isset($_SESSION['success'])) : ?>
                    <div class="error success">
                    <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                    </h3>
                    </div>
                <?php endif ?>
                <br>
                <button type='submit' name='submitLogin'>Login</button>
            </form>
            <a href="javascript:history.back()" class='button'>Back</a>
        </div>
        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    
    </body>
</html>