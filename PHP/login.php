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
            <form class="form-signin" action="login.php" method="post">
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