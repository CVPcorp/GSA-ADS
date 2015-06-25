<?php include('Includes/userFunctions.php'); ?>
<?php Include('Includes/header.php'); ?>
<script type="text/javascript" src="Scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Scripts/UserScripts.js"></script>
    <div class="container">

      <form class="form-signin">
		<div id="results"></div>
        <h2 class="form-signin-heading">Create an account</h2>
        <label for="signUpEmail" class="sr-only">Email Address</label>
        <input type="email" id="Email" class="form-control" placeholder="Email address" required>
        <!-- <label for="inputUsername" class="sr-only">User Name</label>
        <input type="text" id="UserName" class="form-control" placeholder="User Name" required autofocus> -->
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="Password" class="form-control" placeholder="Password" required>
        <label for="confirmPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
        
      
        <input type="button" class="btn btn-lg btn-primary btn-block" onclick="submitUser();" value="Sign Up" />
      </form>

    </div> <!-- /container -->

<?php Include('Includes/footer.php'); ?>