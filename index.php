<?php session_start(); 
include_once("accessCheck.php");
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zombie Thoughts Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
        
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    -->
    
    <script defer src="./game.js"></script>
    <!-- <script defer src="./game_YT_API.js"></script> -->
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="./scroll_in.css">
    <link rel="stylesheet" href="./scroll_bar.css">
    <link rel="stylesheet" href="./text_animiations.css">
    <link rel="stylesheet" href="./video.css">
   

</head>
<body>
    <?php //include_once("InstitutionAccessForm.php"); ?>
    <?php //include_once("MTResidentForm.php"); ?>
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
        <li><a><?php echo "The file " . file_exists("~/video");?></a></li>
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
            <a href="https://montanarep.com/">
                <img src="./images/Title_Animation/MT_Rep_Logo.png" alt="" id="mt_rep_logo">
            </a>
            <a href="https://www.blackfoot.com/">
                <img src="./Sponsor_Logos_PNG/blackfoot-givingback.png" alt="" id="blackfoot">
            </a>
            <a href="https://atginfo.com/">
                <img src="./Sponsor_Logos_PNG/ATG_white.png" alt="" id="atg">
            </a>
            <a href="https://www.pacificsourcemembersfirst.com/">
                <img src="./Sponsor_Logos_PNG/PSHP_white.png" alt="" id="PSHP">
            </a>
            <a href="">
                <img src="./Sponsor_Logos_PNG/montana-cultural-trust.png" alt="" id="MCT">
            </a>
           <a href="https://www.shubertfoundation.org/">
                <img src="./Sponsor_Logos_PNG/shubert-foundation_2.png" alt="" id="shubert">
           </a>
            <a href="https://projecttomorrowmt.org/">
                <img src="./Sponsor_Logos_PNG/ProjectTomorrowMT.png" alt="" id="ProjectTomorrowMT">
            </a>
            <a href="http://www.umt.edu/curry-health-center/">
                <img src="./Sponsor_Logos_PNG/CHC.png" alt="" id="CHC">
            </a>
            <a href="https://www.missoulaunitedway.org/">
                <img src="./Sponsor_Logos_PNG/UWMC_sm.png" alt="" id="united">
            </a>
            <a href="">
                <img src="./Sponsor_Logos_PNG/RedLogoCondensed.png" alt="" id="WF">
            </a>
            <a href="">
                <img src="./Sponsor_Logos_PNG/MontanaPBS.png" alt="" id="PBS">
            </a>
            
        </section>
     
    </header>

    <!-- About the Project -->
    <section class="info" id="about">
        <div class="container center">
        <div class="expandToggle ">
                <h3 id="lighten">About</h3>
                <div class="collapsed">
                    <div class="grid about_text">
                       <div class="bios_title">What is Zombie Thoughts?</div>
                        
                        <div class="bios">
                            Written by a mother and her son, this 45 minute video-game inspired play has been reviewed and endorsed by Licensed Clinical Social Workers and Behavioral Analysts for its depiction of and treatment suggestions for Generalized Anxiety Disorder.  In the play, Sam and Pig are avatars in the video game Zombie Thoughts.  Armed with just a book, a rubber chicken, and the help iof the audience, they try to overcome Sam’s anxiety and defeat the monsters the evil Machine throws at them.  The only path to victory is if students make a series of choices that help Sam and Pig learn empathy for each other.
                        </div>
                        <div class="bios_title">Why is Montana Rep Producing It?</div>
                        <div class="bios">
                            In Montana, 8,000 of adolescents aged 12-17 (more than 10%) experience a major depressive episode (MDE) per year.  Unfortunately, only about 2,000 of these received treatment.  This includes generalized anxiety disorder (GAD) and other anxiety disorders, which affect an estimated 1 in 8 children in the United States.  Our recent cultural climate, coupled with the COVID-19 pandemic, have only exacerbated the problem for Montana teens.By dispelling misunderstandings surrounding anxiety for the students, teachers and parents experiencing Zombie Thoughts, our hope is to help schools become an even safer place for students.
                        </div>
                        <div class="bios_title">Why This Format?</div>
                        <div class="bios">Although we’d love to present this play in every classroom, we didn’t feel it was safe to return to live theatre right now.  But we felt this topic and this play in particular was too relevant to postpone until after the pandemic.  And thanks to our generous sponsors, we’ve pivoted to online delivery and can now offer the play to any and every student in Montana who wants to see it.
                        </div>
                    </div>

                </div> 
    </section>
  
    <section class="info" id="cast">
        <div class="container center">
            <div class="expandToggle">
                <h3 id="lighten">Meet the Team</h3>
                    <div class="collapsed">
                        <div class=" container about_text">
                            <div class="bios_title">
                                Oliver Kokai-Means (playwright)
                            </div>
                            <div class="bios">
                                <p>
                                    A playwright and an actor. Zombie Thoughts, his first play has toured with Plan- B throughout Utah, Building Better People through the Washington DC area, is touring Sydney, Australia in the fall of 2020 with the National Theatre of Parramatta and has been performed by various school groups. Acting credits include Noah in Caroline, or Change with Good Company Theatre, John in Salt Lake Acting Company’s production of Fun Home, and Thomas in the new play Deluge at Weber State University for which he received a Meritorious Award from the Kennedy Center American College Theatre Festival. He is currently co-writing the new play Ballet for Aliens with Jennifer Kokai and Gerard Hernandez which will tour Utah with Plan-B Theatre in 2022. He is a member of the Dramatists Guild. He is currently in the seventh grade.
                                </p>
                               
                            </div>
                            <div class="bios_title">
                                Jennifer A. Kokai (playwright)
                            </div>
                            <div class="bios">
                                <p>
                                    A playwright and historian who teaches at Weber State University. Besides Zombie Thoughts, her plays include Singing to the Brine Shrimp, produced by Plan-B in Salt Lake in 2020, Girl of Glass, included in the Lark Play Development Center’s 2014 Playwright’s Week and a 2015 O’Neill Semi-Finalist and was produced by Moxie Theatre in New York City and TheatreSynesthesia in Austin, Texas, Bird Brains as part of the Rose Exposed, and Lost Land produced at the Austin Fringe Festival. She is also a world recognized expert on mermaid performance. She is a member of the Plan-B Writers’ Lab and the Dramatists Guild
                                </p>
                                
                            </div>
                            <div class="bios_title">
                                Rosie Ayers (director)
                            </div>
                            <div class="bios">
                                <p>
                                    Working in theatre, arts education and activism in Montana for the last 20 years. She earned her BFA and her MA at the University of Montana. In her recent professional life, she’s focused on teaching other artists, educators and health care workers about integrated arts education. Her passion for enhancing education through art led Rosie to produce and perform the play Every Brilliant Thing through a 50-city of tour of Montana this last year. Through this award-winning piece of theatrical activism, she was able to bring a message of depth, sincerity and comedy to the issue of suicidality in our state. Every Brilliant Thing enjoyed statewide success and helped communities across Montana come together to find new solutions, policies and expand resources. When not onstage, in a community meeting, or teaching, Rosie’s passion has been directing regional theatre and performing comedy regularly with her hilarious mentor Teresa Waldorf. She lives with her partner, Michael, and their children in Missoula.
                                </p>
                                
                            </div>
                            <div class="bios_title">
                                Aaron Chris (scenic designer)
                            </div>
                            <div class="bios">
                                 Currently enrolled the MFA Scenic Design program at the University of Montana. He holds bachelor’s degrees in both Music and Theatre. Aaron is thrilled to be a part of the Montana Repertory Theatre's production of Zombie Thoughts.
                            </div>
                            <div class="bios_title">
                                Claire Peterson (costume designer)
                            </div>
                            <div class="bios">
                                 A Montana local, currently in her senior year at the University of Montana getting a dual track BFA in costume design and acting. Ever since she was a child in Helena, Montana she has loved using theatre as a way to help and spread joy through the community.
                            </div>
                            <div class="bios_title">
                                Annie Sacry (Sam/Pig)
                            </div>
                            <div class="bios">
                                She excitedly awaits sharing the virtual performances of Zombie Thoughts with Montana students. Annie graduated from the University of Montana with a BFA in Theatre and will be sharing the roles of "Sam" and "Pig." Hopeful for the future of educational theatre and its uses in a shifting society, Annie strives to work with children of all ages.
                            </div>
                            <div class="bios_title">
                                Hamilton Clement (Sam/Pig)
                            </div>
                            <div class="bios">
                                 A Montana-based actor and BFA graduate of UM’s School of Theatre and Dance. Hamilton is grateful to share in the opportunity of bringing educational theatre to students in a safe and pandemic-conscious manner.
                            </div>
                            <div class="bios_title">
                                Abbey Mosely (Sound Designer)
                            </div>
                            <div class="bios">
                                A recent graduate of the University of Montana with a BFA in Theatre Design. She is originally from North Carolina and has been interested in design work from a young age. She is excited to get an opportunity to work more with sound design and grateful for the chance to work with the Montana Repertory Theatre again!
                            </div>
                            <div class="bios_title">
                                Becca Sewell (stage manager)
                            </div>
                            <div class="bios">
                                Attended high school in Bigfork, MT and came to the University of Montana to study theatre in 2012. She was the stage manager for Morgan and Merlin, Montana Repertory Theatre’s Education Outreach Tour in 2018, and is thrilled to be back to share theatre with Montana in this new and exciting way!
                            </div>
                            <div class="bios_title">
                                Kathryn Reese (programmer)
                            </div>
                            <div class="bios">
                                Graduated on May 8th from the University of Montana with a bachelor’s degree in computer science. She currently works as a backend web developer for the Zombie Thoughts project, as well as a VR programmer for the Mansfield Center, DCLCP’s language training program.
                            </div>
                            <div class="bios_title">
                                Spencer Buffum (Programer/ Front End Developer)
                            </div>
                            <div class="bios">
                                 Currently a senior at the University of Montana pursuing a BFA in graphic design and web development. His role in the project was the creation of the Zombie Thoughts Website as well as the game logic system that makes the play possible.    
                            </div>
                        </div>
                    </div> 
            </div>
        </div>
    </section>
    
    
    <!--Actual Game-->
   
    <section  class="info" id="game">
        <div class="game expand container center">
            <h3 class="center game_play" id="lighten">Zombie Thoughts</h3>
            <div class="collapsed center">

                <?php //if(!isset($_SESSION['code'])){?>

                    <?php //include_once('./Admin/errors.php'); ?>
    
                    <?php //if (isset($_SESSION['success'])) : ?>
                        <!-- <div class="error success">
                        <p> -->
                        <?php 
                           // echo $_SESSION['success'];
                           // unset($_SESSION['success']);
                        ?>
                        <!-- </p>
                        </div> -->
                <?php //endif ?>

                <!--<label for='institution_button'>If you’re representing a school, group, or educational institution in the state of Montana,&nbsp;</label>
                <button name='institution_button' type="button" class='btn btn-primary' data-toggle="modal" data-target="#MontanaInstitutionForm">Click here</button>
                <br>

                <label for='montana_individual_button'>If you’re an individual living in the state of Montana,&nbsp;</label>
                <button name='montana_individual_button' type="button" class='btn btn-primary' data-toggle="modal" data-target="#MTIndividualForm">Click here</button>
                <br>

                <label for='os_inst_ind_button'>If you’re a school or an individual outside of Montana,&nbsp;</label>
                <button name='os_inst_ind_button' type="button" class='btn btn-primary' data-toggle="modal" data-target="#OOSForm">Click here</button>
                <br>

                <form action='index' method='POST'>
                    <label for='accessCode'>Have a code? Enter it here:&nbsp;</label>
                    <input name='accessCode' placeholder='Enter Access Code Here...'>
                    <button type='submit' name='submitCode'>Submit Code</button>
                </form>
                <br>-->

                <?php
                // }
                // else{
                ?>
                
                <div id="vid_box">
                    <video id="video" controls controlsList="nodownload">
                        <source src="" type="video/mp4">
                    </video>
                    <div id="player" class="moveUpVid"></div>
                </div>
                <div id="text" class="moveUpText"></div>
                <div id="option-buttons" class="moveUpBtn"></div>
                    <audio id="audio">
                        <source src="./audio/select_granted.wav"></source>
                    </audio>
                    <audio id="audio_menu">
                        <source src="./audio/menu_slide.wav">
                    </audio>
                    <audio id="audio_select">
                        <source src="./audio/selector_tone.wav">
                    </audio>
                    <?php //} ?>
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
