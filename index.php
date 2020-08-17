<?php session_start(); ?>

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
    <link rel="stylesheet" href="./scroll_in.css">
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
            <img src="./Sponsor_Logos_PNG/blackfoot-givingback.png" alt="" id="blackfoot">
            <img src="./Sponsor_Logos_PNG/ATG-Cognizant.png" alt="" id="atg">
            <img src="./Sponsor_Logos_PNG/PSHP.png" alt="" id="PSHP">
        </section>
     
    </header>

    <!-- About the Project -->
    <section class="info" id="about">
        <div class="container center">
        <div class="expandToggle ">
                <h3 id="lighten">What is Zombie Thoughts?</h3>
                <div class="collapsed">
                    <div class="grid about_text">
                        <div class="bios">
                            Written by a mother and her son, this 45 minute video-game inspired play has been reviewed and endorsed by Licensed Clinical Social Workers and Behavioral Analysts for its depiction of and treatment suggestions for Generalized Anxiety Disorder.  In the play, Sam and Pig are avatars in the video game Zombie Thoughts.  Armed with just a book, a rubber chicken, and the help iof the audience, they try to overcome Sam’s anxiety and defeat the monsters the evil Machine throws at them.  The only path to victory is if students make a series of choices that help Sam and Pig learn empathy for each other.
                            <br>
                            Why is Montana Rep Producing It?
                            In Montana, 8,000 of adolescents aged 12-17 (more than 10%) experience a major depressive episode (MDE) per year.  Unfortunately, only about 2,000 of these received treatment.  This includes generalized anxiety                          disorder (GAD) and other anxiety disorders, which affect an estimated 1 in 8 children in the United States.  Our recent cultural climate, coupled with the COVID-19 pandemic, have only exacerbated the problem for                         Montana teens.  By dispelling misunderstandings surrounding anxiety for the students, teachers and parents experiencing Zombie Thoughts, our hope is to help schools become an even safer place for students.
                            <br>
                            Why This Format?
                            Although we’d love to present this play in every classroom, we didn’t feel it was safe to return to live theatre right now.  But we felt this topic and this play in particular was too relevant to postpone until after                            the pandemic.  And thanks to our generous sponsors, we’ve pivoted to online delivery and can now offer the play to any and every student in Montana who wants to see it.

                        </div>
                        <div></div>
                    </div>

                </div> 
    </section>
  
    <section class="info" id="cast">
        <div class="container center">
            <div class="expandToggle">
                <h3 id="lighten">Meet the Team</h3>
                    <div class="collapsed">
                        <div class="grid_team container about_text">
                            <div class="bios_title">
                                Oliver Kokai-Means (playwright)
                            </div>
                            <div class="bios">
                                a playwright and an actor. Zombie Thoughts, his first play has toured with Plan- B throughout Utah, Building Better People through the Washington DC area, is touring Sydney, Australia in the fall of 2020 with the National Theatre of Parramatta and has been performed by various school groups. Acting credits include Noah in Caroline, or Change with Good Company Theatre, John in Salt Lake Acting Company’s production of Fun Home, and Thomas in the new play Deluge at Weber State University for which he received a Meritorious Award from the Kennedy Center American College Theatre Festival. He is currently co-writing the new play Ballet for Aliens with Jennifer Kokai and Gerard Hernandez which will tour Utah with Plan-B Theatre in 2022. He is a member of the Dramatists Guild. He is currently in the seventh grade.
                            </div>
                            <div class="bios_title">
                                Jennifer A. Kokai (playwright)
                            </div>
                            <div class="bios">
                                a playwright and historian who teaches at Weber State University. Besides Zombie Thoughts, her plays include Singing to the Brine Shrimp, produced by Plan-B in Salt Lake in 2020, Girl of Glass, included in the Lark Play Development Center’s 2014 Playwright’s Week and a 2015 O’Neill Semi-Finalist and was produced by Moxie Theatre in New York City and TheatreSynesthesia in Austin, Texas, Bird Brains as part of the Rose Exposed, and Lost Land produced at the Austin Fringe Festival. She is also a world recognized expert on mermaid performance. She is a member of the Plan-B Writers’ Lab and the Dramatists Guild
                            </div>
                            <div class="bios_title">
                                Rosie Ayers (director)
                            </div>
                            <div class="bios">
                                has been working in theatre, arts education and activism in Montana for the last 20 years. She earned her BFA and her MA at the University of Montana. In her recent professional life, she’s focused on teaching other artists, educators and health care workers about integrated arts education. Her passion for enhancing education through art led Rosie to produce and perform the play Every Brilliant Thing through a 50-city of tour of Montana this last year. Through this award-winning piece of theatrical activism, she was able to bring a message of depth, sincerity and comedy to the issue of suicidality in our state. Every Brilliant Thing enjoyed statewide success and helped communities across Montana come together to find new solutions, policies and expand resources. When not onstage, in a community meeting, or teaching, Rosie’s passion has been directing regional theatre and performing comedy regularly with her hilarious mentor Teresa Waldorf. She lives with her partner, Michael, and their children in Missoula.
                            </div>
                            <div class="bios_title">
                                Aaron Chris (scenic designer)
                            </div>
                            <div class="bios">
                                is from Miami. He is currently enrolled the MFA Scenic Design program at the University of Montana. He holds bachelor’s degrees in both Music and Theatre. Aaron is thrilled to be a part of the Montana Repertory Theatre's production of Zombie Thoughts.
                            </div>
                            <div class="bios_title">
                                Claire Peterson (costume designer)
                            </div>
                            <div class="bios">
                                is a Montana local, currently in her senior year at the University of Montana getting a dual track BFA in costume design and acting. Ever since she was a child in Helena, Montana she has loved using theatre as a way to help and spread joy through the community.
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
            <div class="collapsed center" id='restricted'>
                <?php if(isset($_SESSION['code'])){

                }
                else{
                ?>

                <div id="vid_box">
                    <div id="player" class="moveUpVid"></div>
                </div>
                <div id="text" class="moveUpText"></div>
                <div id="option-buttons" class="moveUpBtn"></div>
                <?php } ?>
            </div>
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
    <script src="./scroll_out.js"></script>
    <script type="text/javascript">
        ScrollOut({
            targets: 'h3'
        })
    </script>
    <script src="./scroll.js"></script>
    <script src="./parallax.js"></script>
  
</body>
