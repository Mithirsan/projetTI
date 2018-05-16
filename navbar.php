<?php 
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" />
        </button>
        <div class="navbar-header">
            <a class="navbar-brand" href="#">HomeSweetHome</a>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="navbar-collapse collapse" id="mainMenu">
            <ul class="nav navbar-nav navbar-right">
                <li class="btn">
                    <form action="PHP/home.php" method="post">
                        <input class="btn" type="submit" value="Home">
                    </form>
                </li>
                <li class="btn">
                    <form action="PHP/contact.php" method="post">
                        <input class="btn" type="submit" value="Contact">
                    </form>
                </li>
                <li class="btn">
                    <form action="PHP/about.php" method="post">
                        <input class="btn" type="submit" value="About">
                    </form>
                </li>
                <li class="btn">
                    <form action="PHP/signup.php" methode="post">
                        <input class="btn" type="submit" value="Sign up">
                    </form>
                </li>
                <li class="btn">
                    <form action="PHP/login" method="post">
                        <input class="btn" type="submit" value="Log in" data-toggle="modal" data-target="#myModal">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>