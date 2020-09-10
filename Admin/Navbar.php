<div id="progressbar"></div>
<div id="scrollPath"></div>

<nav class="navbar">
    <ul class="nav_links">

        <?php if(isset($_SESSION['email'])){
        ?>
            <li>
                <a href="./AdminPage">Admin Home</a>
                <a href="./RequestsPage">Requests</a>
                <a href="LoginPage?logout='1'">Logout</a>
                <p>You are logged in as: <?php echo $_SESSION['email']; ?></p>
                <p>Privilege: <?php echo $_SESSION['privilege']; ?></p>

            </li>
        <?php } 
        else {?>
            <li>
                <a href="LoginPage">Login</a>
            </li>
        <?php } ?>
    </ul>
    <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
    </div>
</nav>