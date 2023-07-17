<?php
include("header.php");

$adminname = $_SESSION['admin'];
?>
<header class="navBar--admin">
    <nav class="nav">
        <div class="heading1">
            <i class="fa-solid fa-bars-staggered"></i>
            <div class="title">Admin dashboard</div>
        </div>

        <div class="button--part">
            <div class="menu">
                <a href="#"><button class="button1" title="Home">
                        <i class="fa-solid fa-house"></i></button></a>
                <a href="#"><button class="button2" title="Inbox">
                        <i class="fa-solid fa-message"></i></button></a>
            </div>
            <a href="logout.php"><input type="button" class="logoutBtn" value="Logout" title="logout" /></a>
            <i class="fa-solid fa-lines-vertical">|</i>
            <div class="username--admin"><?php echo $adminname; ?></div>
        </div>
    </nav>
</header>