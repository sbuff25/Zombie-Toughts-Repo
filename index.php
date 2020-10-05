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
    <script defer src="./game.js"></script>
    <!-- <script defer src="./game_YT_API.js"></script> -->
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./css.css">
    <link rel="stylesheet" href="./menu.css">
    <link rel="stylesheet" href="./scroll_in.css">
    <link rel="stylesheet" href="./scroll_bar.css">
    <link rel="stylesheet" href="./text_animiations.css">
    <link rel="stylesheet" href="./video.css">
    <link rel="stylesheet" href="./forms.css">
</head>
<body>
    <?php include_once("InstitutionAccessForm.php"); ?>
    <?php include_once("MTResidentForm.php"); ?>
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
            <a href="#cast">Cast/Crew</a>
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
            <a href="https://www.dpwfoundation.org/">
                <img src="./Sponsor_Logos_PNG/DPWF.png" alt="" id="DPWF">
            </a>
            <a href="https://art.mt.gov/">
                <img src="./Sponsor_Logos_PNG/MAC.png" alt="" id="MAC">
            </a>
            
        </section>
     
    </header>

    <!-- About the Project -->
    <section class="info" id="about">
        <div class="container center">
        <div>
                <h3 id="lighten">About</h3>
                <div>
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
            <div>
                <h3 id="lighten">Meet the Team</h3>
                    <div>
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
                                 Currently a senior at the University of Montana pursuing a BFA in graphic design and web development. His role in the project was the creation of the Zombie Thoughts Website as well as the programing for the game itself.     
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
            <br>
            <?php if(!isset($_SESSION['code'])){?>

                <?php include_once('./Admin/errors.php'); ?>

                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success center">
                    <p>
                    <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                    </p>
                    </div>
                <?php endif ?>
                <div id='formrequestdiv'>
                    <label for='institution_button'>If you’re representing a school, group, or educational institution in the state of Montana,&nbsp;</label>
                    <button name='institution_button' type="button" class='btn btn-primary' data-toggle="modal" data-target="#MontanaInstitutionForm">Click here</button>
                    <br>

                    <label for='montana_individual_button'>If you’re an individual living in the state of Montana,&nbsp;</label>
                    <button name='montana_individual_button' type="button" class='btn btn-primary' data-toggle="modal" data-target="#MTIndividualForm">Click here</button>
                    <br>

                    <label for='os_inst_ind_button'>If you’re a school or an individual outside of Montana,&nbsp;</label>
                    <button name='os_inst_ind_button' type="button" class='btn btn-primary' data-toggle="modal" data-target="#OOSForm">Click here</button>
                    <br>
                </div>

                <form action='index#game' method='POST' id='accesscodebox'>
                    <label for='accessCode'>Have a code? Enter it here:&nbsp;</label>
                    <input name='accessCode' placeholder='Enter Access Code Here...' id='temptestcode'>
                    <button type='submit' name='submitCode' class='btn'>Submit Code</button>
                </form>
                <br>

            <?php
            }
            else{
            ?>
            <!-- <div class="collapsed center"> -->
                
                <div id="vid_box">
                    <video id="video" controls controlsList="nodownload" playsinline>
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
            <!-- </div> -->
            <?php } ?>
        </div>
    </section>
    <section class="info bg-light" id="help">
        <h3 class="center">Resources</h3>
        <div class="container center about_text">
            
            <div>
                
                    <div class="parentAndEducators"> 
                        <ul>
                            <h1>Parents and educators:</h1>
                            <li id="lighten"><a href="./resources/MT-ZombieThoughtsRepPack.pdf">Zombie Thoughts Classroom Guide (PDF attached)</a></li>
                            <li id="lighten"><a href="https://www.amightygirl.com/blog?p=22612&fbclid=IwAR0H5s7x_RjLdLK2x_-KPjE7EnIh4SF-Z2cG-j7a3C0Uo8o-AOaYkiQC_7s">25 Books to Help Kids Overcome Anxiety, Worry & Fear</a></li>
                            <li id="lighten"><a href="https://akidsbookabout.com/products/a-kids-book-about-anxiety?gclid=EAIaIQobChMI5bCW1NnU6wIV9j6tBh1r7wArEAAYASAAEgLNW_D_BwE">A Kids Book About Anxiety</a></li>
                            <li id="lighten"><a href="https://www.nhsinform.scot/illnesses-and-conditions/mental-health/mental-health-self-help-guides/anxiety-self-help-guide">Scotland’s National Health Services Anxiety Self-Help Guide</a></li>
                            <li id="lighten"><a href="https://theweek.com/articles/888213/anxiety-different-kids?fbclid=IwAR09XPor_umxRlFAneJ23RJtfdjaw5QJ3_Gc9NqQxvCRqjgRtm_5RNxRsUU">“Anxiety is Different for Kids”</a></li>
                            <li id="lighten"><a href="https://apps.apple.com/app/sam/id666767947">Self-Help for Anxiety Management App</a></li>
                            <li id="lighten"><a href="https://apps.apple.com/us/app/id778848692">Stop Breathe & Think App</a></li>
                            <li id="lighten"><a href="https://apps.apple.com/us/app/calm-meditation/id571800810">Calm App</a></li>
                        </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- </div> -->
        
        

        
   
   
    
</div>





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
    <script src="./bootstrap.min.js"></script>
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
    </script>
  
</body>
