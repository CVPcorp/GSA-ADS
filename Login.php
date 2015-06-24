<?php Include('Includes/header.php'); ?>
<script type="text/javascript" src="Scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Scripts/UserScripts.js"></script>
      <form class="form-signin">
		<div id="results"></div>
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="UserName" class="form-control" placeholder="Email Address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="Password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <!-- <input type="checkbox" value="remember-me"> Remember me  -->
          </label>
           <p class="create"><a href="createUser.php">Create an account</a></p>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="button" onclick="loginUser();" value="Sign In"></input>
      </form>
<?php Include('Includes/footer.php'); ?>