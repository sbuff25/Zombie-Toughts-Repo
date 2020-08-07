<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zombie Thoughts Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script defer src="./game.js"></script>
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./menu.css">
    
    <link rel="stylesheet" href="./scroll_bar.css">
    <link rel="stylesheet" href="./text_animiations.css">
   

</head>
<body>
    <div id="progressbar"></div>
    <div id="scrollPath"></div>

<nav class="navbar">
    <ul class="nav_links">
        <li>
            <a href="#home">home</a>
        </li>
        <li>
            <a href="#about">about</a>
        </li>
        <li>
            <a href="#cast">Meet the team</a>
        </li>
        <li>
            <a href="#game">game</a>
        </li>
        <li>
            <a href="#help">Resources</a>
        </li>
        <li>
            <a href="./php/LoginPage.php"> Admin Login</a>
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

    <!-- About the Project -->
    <section class="info" id="about">
        <div class="container center">
        <div class="expandToggle ">
                <h3 id="lighten">What is Zombie Thoughts?</h3>
                <div class="collapsed">
                    <div class="grid">
                        <div>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod minus autem deleniti qui. Quidem neque quia aliquam fuga. At ut, culpa quaerat doloremque illo laboriosam, vel aliquid fugiat et ratione dignissimos. Placeat provident cumque nesciunt animi. Quia cumque accusantium, sapiente perspiciatis, earum quae soluta a perferendis rem accusamus est asperiores!
                        </div>
                        <div>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis earum magnam ab quos recusandae sit temporibus neque ea. Totam, soluta.</div>
                    </div>

                </div> 
    </section>
  
    <section class="info" id="cast">
        <div class="container center">
            <div class="expandToggle">
                <h3 id="lighten">Meet the Team</h3>
                    <div class="collapsed">
                        <div class="grid_team container">
                            <div>
                                IMAGE HERE
                            </div>
                            <div>
                                DESCIPTION HERE
                            </div>
                            
                        </div>
                    </div> 
            </div>
        </div>
    </section>
    
    
    <!--Actual Game-->
   
    <section  class="info" id="game">
        <div class="game expand container center">
            <h3 class="center" id="lighten">Zombie Thoughts</h3>
            <div class="collapsed center">
                <img src="" alt="" id="video">
                <div id="text">Text</div>
            <div id="option-buttons"></div> 
        </div>
    </section>
    <section class="info bg-light" id="help">
        <div class="container center">
            <div class="expand Toggle">
                <h3 id="lighten">Resources</h3>
                    <div class="collapsed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus labore ipsa accusantium dolore. Sapiente fuga perferendis placeat sequi minus non laudantium vitae voluptate delectus, dicta, ipsam porro aliquam vel, molestias ex quibusdam autem quidem? Facere, non voluptatibus! Illum obcaecati repellendus perferendis natus necessitatibus veritatis similique assumenda quaerat sapiente minus cupiditate, magnam modi eius fugit dolore eligendi molestias ipsam animi consequatur nulla eveniet. Vero labore minima, quam a natus sunt iure rerum odio ea porro dolore officia iusto dolores quia, in veniam, alias recusandae! Veritatis, ullam. Officiis earum architecto reiciendis debitis, modi autem alias suscipit quas est, obcaecati itaque veniam commodi mollitia cumque minus cum? Nemo voluptatem velit accusamus illo, possimus, voluptas doloremque excepturi incidunt nobis soluta rem consequuntur explicabo quia voluptatum consequatur animi magni doloribus perferendis nisi vel esse perspiciatis et? Corrupti, minima, sapiente eligendi dicta aliquid tenetur eius quod et alias explicabo iste, eaque ex modi saepe voluptatem nemo fugiat ducimus porro reiciendis? Repellendus rem facere officia dolorum animi dolores nisi quos ea sapiente earum. Vel in id aspernatur nam beatae dolorum at optio labore atque voluptate tempore blanditiis iure velit dicta veritatis, porro officia ea minima necessitatibus, repudiandae rerum. Atque suscipit vitae non. Omnis, eveniet. Vel, fuga quaerat.
                    </div> 
            </div>
        </div>
    </section>

    <!-- </div> -->
        
        

        
   
   
    
</div>

    <!--Footer-->
    <footer class="center bg-dark">
        <p>Missoula Repertory Theatre &copy; 2020</p>
    </footer>



    <script src="jquery.js"></script>
    <script src="./nav.js"></script>
    <script src="./scroll.js"></script>
    <script src="./parallax.js"></script>
  
</body>
