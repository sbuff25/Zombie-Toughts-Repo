<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <?php session_start() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zombie Thoughts Project: Admin Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script defer src="../game.js"></script>
        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css">
        <?php include('FormCheck.php') ?>
        
        <?php /*if(!isset($_SESSION['username']) || !isset($_SESSION['email'])){

            header('location: ../index.php');

        }*/?>
    

    </head>
    <body>
        <div id="progressbar"></div>
        <div id="scrollPath"></div>

        <nav class="navbar">
            <ul class="nav_links">
                <li>
                    <a href="../index.php">home</a>
                </li>
            </ul>
            <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>
        </nav>

        <div>
            <br><br><br><br>  <!--Delete this line when Spencer begins to style -->
            <h1>Create New Administrator</h1>

            <form action='LoginPage.php' method='POST'>
                <div>
                    <label for='email'>Email:</label>
                    <input name='email' type='email' placeholder="<?php echo "Enter New User's Email..."?>">
                </div>
                <br>
                <div>
                    <label for='username'>Username:</label>
                    <input name='username' placeholder="<?php echo "Enter New User's Username..."?>">
                </div>
                <br>
                <div>
                    <label for='first_name'>First Name:</label>
                    <input name='first_name' placeholder="<?php echo "Enter New User's First Name..."?>">
                </div>
                <br>
                <div>
                    <label for='last_name'>Last Name:</label>
                    <input name='last_name' placeholder="<?php echo "Enter New User's Last Name..."?>">
                </div>
                <br>
                <div>
                    <label for='password'>Password:</label>
                    <input name='password' type='password' placeholder="<?php echo "Enter New User's Password..."?>">
                </div>
                <br>
                <?php include('errors.php'); ?>
                <?php if (isset($_SESSION['success'])) : ?>
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
                <button type='submit' name='submitNewUser'>Create New Admin</button>
            </form>
            <a href="javascript:history.back()" class='button'>Back</a>
        </div>
        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    
    </body>
</html>