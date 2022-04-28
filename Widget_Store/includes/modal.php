<div class="modal  fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="font-size: 30px; background-color:#5dc9c8; color:white;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center" id="myModalLabel"><strong>Log In</strong></h3>
      </div>
      <div class="modal-body">
        <form method="POST" action="login_submit.php" id="login">
          <div  class="form-group">
            New User?<a href="signup.php"><span style="color:blue;"> Register with Us</span></a>
          </div>  
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon" style="background-color:gray; color:white;">
                <span class="glyphicon glyphicon-user"></span>
              </div>
              <input type="email" name="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">    
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-addon" style="background-color:gray; color:white;">
                <span class="glyphicon glyphicon-pencil"></span>
              </div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="true" pattern=".{6,}">  
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-block btn-danger">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>
