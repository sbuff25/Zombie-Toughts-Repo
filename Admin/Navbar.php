<!-- <div id="progressbar"></div>
<div id="scrollPath"></div> -->

<nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="#"><img src='../images/Logos/Logos/1. Primary Logo - Green/1_MontanaRep_PrimaryLogo_GreenLandscape.png' width='25%' height='25%' alt='Montana Repertory Logo'></a>
    <ul class="nav navbar-nav mr-auto">
        <?php if(isset($_SESSION['email'])){
        ?>
            <li>
                <a href="./AdminPage">Admin Home</a>
            </li>
            <li>
                <a href="./RequestsPage">Requests</a>
            </li>
            <li>
                <a href="LoginPage?logout='1'">Logout</a>
            </li>
            <li>
                <p>You are logged in as: <?php echo $_SESSION['email']; ?></p>
            </li>
            <li>
                <p>Privilege: <?php echo $_SESSION['privilege']; ?></p>
            </li>
        <?php } 
        else {?>
            <li>
                <a href="LoginPage">Login</a>
            </li>
        <?php } ?>
    </ul>
    <!-- <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
    </div> -->
</nav>
