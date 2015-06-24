<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
 

    <title>FDA Enforcement Reports Mapping Prototype</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sign-in.css" rel="stylesheet">

      <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="resources/demos/style.css">
      <script>
          $(function() {
              $( "#recalENDate" ).datepicker({
                  changeMonth: true,
                  changeYear: true,
                  dateFormat: 'yymmdd',
                  showAnim:'slide'
                  //minDate: -20,
                  //maxDate: "+1M +10D"

              });
              $( "#recalSTDate" ).datepicker({
                  changeMonth: true,
                  changeYear: true,
                  dateFormat: 'yymmdd',
                  showAnim:'slide'
                  //minDate: -20,
                  //maxDate: "+1M +10D"
              });
          });
      </script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">GSA ADS</a> </div>
    <div id="navbar" class="navbar-collapse collapse">
    <?php 
    	if(isset($_SESSION['UserName'])) {
    ?> 
      <form class="navbar-form navbar-right">
        <a href="LogOut.php" type="submit" class="btn btn-success">Sign out</a>
      </form>
    <?php } ?>
    </div>
    <!--/.navbar-collapse --> 
  </div>
</nav>
  