<!DOCTYPE html>
<HTML lang="en">
    <HEAD>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" >
        <script type="text/javascript" src="JS/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="JS/popper.js"></script>
        <script type="text/javascript" src="JS/toottip.js"></script>
        <script type="text/javascript" src="JS/bootstrap.js"></script>
        <script type="text/javascript" src="JS/pswd/password-score.js"></script>
        <script type="text/javascript" src="JS/pswd/password-score-options.js"></script>
        <script type="text/javascript" src="JS/bootstrap-strength-meter.js"></script>
        <script type="text/javascript" src="JS/pswd/strength.js"></script>
        
        <!--FAVICON AND TITTLE -->
        <link rel="icon" type="image/png" href="ressources/images/logo.png" />
        <title>66</title>
    </HEAD>
    <BODY>
        <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address.
              </div>
            </div>
            <div class="mb-3 form-group">
              <label for="pwd">Password</label>
              <div>
                <input type="password" class="form-control" id="pwd" placeholder="Password" required>
              </div>
              <div class="form-group">
                <label for="progress-bar-container">Strength</label>
                <div class="" id="progress-bar-container"></div>
              </div>
              <div class="invalid-feedback">
                Please enter a password.
              </div>
            </div>
            <div class="mb-3">
              <label for="pwdc">Confirm password</label>
              <input type="password" class="form-control" id="pwdc" placeholder="Confirm password" required>
              <div class="invalid-feedback">
                Please confirm your password.
              </div>
            </div>
        </form>
        </div>
    </BODY>
</HTML>
