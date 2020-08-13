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
        <script defer src="../game.js"></script>

        <script>
        // function openForm(form_id) {
        //        document.getElementById(form_id).style.display = "block";
        //  }

        //  function closeForm(form_id) {
        //        document.getElementById(form_id).style.display = "none";
        //  }
        //  function addInputToForm(new_input_id) {
        //     var SelectForm = document.querySelector('#select_type');
        //     var value = SelectForm.value;
        //     var LinkFormInputArea = document.getElementById(new_input_id);
        //     while(LinkFormInputArea.firstChild){
        //         LinkFormInputArea.removeChild(LinkFormInputArea.firstChild);
        //     }
        //     if(value === "ztI"){
        //         var institutionNameInput = "<label for='institution_name'>Institution Name</label><input name='institution_name' placeholder='Enter Institution's Name...'>";
        //         LinkFormInputArea.appendChild(institutionNameInput);
        //     }
               

        //  }
         
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

        <a href="LinkForm.php" class='btn btn-primary mb-3' rel="modal:open">Generate Access Link</button>

        

        <!--Footer-->
        <footer class="center bg-dark">
            <p>Missoula Repertory Theatre &copy; 2020</p>
        </footer>

    
    </body>
</html>