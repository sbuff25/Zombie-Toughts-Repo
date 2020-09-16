<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

<?php include_once("InstitutionAccessForm.php"); ?>
<?php include_once("MTResidentForm.php"); ?>

<?php if(!isset($_SESSION['code'])){?>

<?php include_once('./Admin/errors.php'); ?>

<?php if (isset($_SESSION['success'])) : ?>
    <div class="error success">
    <p>
    <?php 
       echo $_SESSION['success'];
       unset($_SESSION['success']);
    ?>
    </p>
    </div>
<?php endif ?>

<label for='institution_button'>If you’re representing a school, group, or educational institution in the state of Montana,&nbsp;</label>
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
<br>

<?php
}
else{
?>

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
<?php } ?>