<?php 
	session_start();
	if(is_null($_SESSION["UserName"])) {
		header("Location: Login.php");
		die();
	}
?>
<?php include("Includes/header.php"); ?>
<?php include("Includes/fdaApi.php"); ?>
<script type="text/javascript" src="Scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Scripts/IndexScripts.js"></script>
<div class="container">
  <div class="row search">
    <form>
      <div class="col-xs-10">
        <div class="row">
          <div class="col-xs-4">
            <div class="form-group">
              <label for="Search">Search</label>
              <input type="text" class="form-control" id="searchTerm" placeholder="Search">
            </div>
          </div>
          <div class="col-xs-3">
            <div class="form-group">
              <label for="StartDate<">Start Date</label>
              <input type="text" class="form-control" id="recalSTDate" placeholder="Start Date">
            </div>
          </div>
          <div class="col-xs-3">
            <div class="form-group">
              <label for="EndDate<">End Date</label>
              <input type="text" class="form-control" id="recalENDate" placeholder="End Date">
            </div>
          </div>
        </div>
        <input type="button" class="btn btn-primary" onclick="searchAlerts();" value="Search" />
        <button class="btn btn-default"> Reset </button>
      </div>
    </form>
  </div>
  <div class="row">
	<script src="http://maps.google.com/maps/api/js?sensor=false"
	        type="text/javascript"></script>
	<div id="map" style="width: 1136px; height: 325px;"></div>
  </div>
    <div class="row">
    <div class="col-sm-12">
		<div id="results"></div>
    </div>
    </div>
</div>

<?php include("Includes/footer.php"); ?>

