<?php //if(!isset($_SESSION['username']) && !isset($_SESSION['email'])){
       // header('location: ../index.php');

//}?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">

        <?php
            if (session_status() == PHP_SESSION_NONE) {
                header_remove();
                session_start();
            }
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zombie Thoughts Project: Admin</title>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="lightweightpopup.css" type="text/css">
 
        <script src="<a class='vglnk' href='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js' rel='nofollow'><span>https</span><span>://</span><span>ajax</span><span>.</span><span>googleapis</span><span>.</span><span>com</span><span>/</span><span>ajax</span><span>/</span><span>libs</span><span>/</span><span>jquery</span><span>/</span><span>2</span><span>.</span><span>2</span><span>.</span><span>4</span><span>/</span><span>jquery</span><span>.</span><span>min</span><span>.</span><span>js</span></a>"></script>
        <script src="lightWeightPopup.js"></script>
        <script defer src="../game.js"></script>

        <script>
            $(document).ready(function(e) {
                $("#popupButton").lightWeightPopup({href:"LinkForm.php", overlay:false, width:"90%", maxWidth:"600px", title:"Ajax Model"});

            });
         
        </script>

        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="../menu.css">
        
        <link rel="stylesheet" href="../scroll_bar.css">
        <link rel="stylesheet" href="../text_animiations.css">
    

    </head>
    <body>
    <?php include_once("./LinkForm.php"); ?>

    

    <?php if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['email']);
        unset($_SESSION['username']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        header_remove();
        header("location: ../index.php");
        } 
    ?>

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
        <header class="showcase" id="home">
            <section id="home">
                <img src="./images/Title_Animation/Title_Animation.png" alt="" id="title_animi">
                <img src="./images/Title_Animation/Author_Animation.png" alt="" id="author_animi">
                <img src="./images/Title_Animation/MT_Rep_Logo.png" alt="" id="mt_rep_logo">
            </section>
        
        </header>
        <br><br><br><br><br>
        <?php //if (strcmp($_SESSION['privilege'], "high") === 0){ ?>

            <button>Create New User</button>
            <br>
            <button>Delete User</button>
            <br>

        <?php //} ?>

        <button type='button' id='popupButton' class='btn btn-primary mb-3' data-top='20' data-overlay='false' data-href='LinkForm.php' data-content='ajax'>Generate Access Link</button>

        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    
    </body>
</html>