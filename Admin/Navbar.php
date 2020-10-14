
<nav class="navbar navbar-inverse bg-dark navbar-expand-lg">
    <a class="navbar-brand" href="./AdminPage"><img src='../images/Logos/Logos/1. Primary Logo - Green/1_MontanaRep_PrimaryLogo_GreenLandscape.png' width='10%' height='10%' alt='Montana Repertory Logo'></a>
    <ul class="nav navbar-nav mr-auto">
        <?php if(isset($_SESSION['email'])){
        ?>
            <li class="nav-item active">
                <a class='nav-link text-white' href="./AdminPage">Admin Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="./RequestsPage">Requests</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="./Reports">Reports</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-white" href="LoginPage?logout='1'">Logout</a>
            </li>
            <li class="nav-item text-secondary">
                <p class='nav-link'>You are logged in as: <?php echo $_SESSION['email']; ?></p>
            </li>
            <li class="nav-item text-secondary">
                <p class='nav-link'>Privilege: <?php echo $_SESSION['privilege']; ?></p>
            </li>
        <?php } 
        else {?>
            <li>
                <a href="LoginPage">Login</a>
            </li>
        <?php } ?>
    </ul>
</nav>
