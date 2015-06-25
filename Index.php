<?php 
	session_start();
	/*if(is_null($_SESSION["UserName"])) {
		header("Location: Login.php");
		die();
	}*/
?>
<?php include("Includes/header.php"); ?>
<?php include("Includes/fdaApi.php"); ?>
<script type="text/javascript" src="Scripts/IndexScripts.js"></script>
<div class="container">
  <div class="row search">
    <form>
      <div class="col-xs-10">
      	<div class="row">
      		<div class="col-xs-10">
      			<input type="radio" name="type" value="drug" checked /> <label>Drug</label>
      			<input type="radio" name="type" value="device" /> <label>Device</label>
      			<input type="radio" name="type" value="food" /> <label>Food</label>
      		</div>
      	</div>
        <div class="row">
          <div class="col-xs-4">
            <div class="form-group">
              <label for="Search">Search</label>
              <input type="text" class="form-control" id="searchTerm" placeholder="Search"/>
            </div>
          </div>
          <div class="col-xs-2">
            <div class="form-group">
              <label for="StartDate">Start Date</label>
              <input type="text" class="form-control" readonly id="recalSTDate" placeholder="YYYYMMDD"/>
            </div>
          </div>
          <div class="col-xs-2">
            <div class="form-group">
              <label for="EndDate">End Date</label>
              <input type="text" class="form-control" readonly id="recalENDate" placeholder="YYYYMMDD"/>
            </div>
          </div>
          <div class="col-xs-2">
            <div class="form-group">
              <label for="EndDate">Limit</label>
              <select class="form-control" id="limit">
              	<?php for($i=1; $i <= 100; $i++) { ?>
              		<option><?php echo $i ?></option>
              	<?php } ?>
              </select>
            </div>
          </div>
        </div>
        <input type="button" class="btn btn-primary" onclick="searchAlerts();" value="Search" />
        <button class="btn btn-default"> Reset </button>
      </div>
    </form>
  </div>
  <br/>
  <div class="row">
    <div class="col-sm-12">
		<script src="http://maps.google.com/maps/api/js?key=AIzaSyB4PVzOYG0aKkYfutnM84MgUqoggoRZJZ4&sensor=false"
		        type="text/javascript"></script>
        <div id="wait" style="display:none">
            <p><img src="images/loader.gif" /> Please Wait</p>
        </div>
		<div id="map" style="width: 1136px; height: 325px;"></div>
	</div>
  </div>
  <br/>
    <div class="row">
    <div class="col-sm-12">
		<div id="results"></div>
    </div>
    </div>
</div>

<?php include("Includes/footer.php"); ?>

