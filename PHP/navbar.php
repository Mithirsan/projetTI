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
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">&#160;<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <span class="glyphicon glyphicon-search" ></span>Search
            </button>
        </form>
        <div class="navbar-collapse collapse" id="mainMenu">
            <ul class="nav navbar-nav navbar-right">
                <li class="btn"><a>Home</a></li>
                <li class="btn"><a>Contact</a></li>
                <li class="btn"><a>About</a></li>
                <li class="btn"><a href="PHP/signup.php" methode="post" data-toggle="">Sign up</a></li>
                <li class="btn"><a data-toggle="modal" data-target="#myModal">Log in</a></li>
            </ul>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Login in HomeSweetHome</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <form class="form-signin">
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <br>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me">Remember me
                </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            </form>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
</nav>