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
  <div class="row">
  	<span>This prototype is used to display information about FDA Enforcement reports related to drug, medical device, or food recalls. The source of the data being displayed is +https://open.fda.gov/+. By entering query terms in the Search box, the user can pull representative records from the selected data sets. Results are displayed on a map and shown in tabular form. For this prototype, the total number of records returned is limited by the value set using the Limit dropdown. This Limit is enforced to ensure that we do not exceed quotas set by FDA for querying the datasets and by Google for returning map coordinates.)
The search results can be narrowed by specifying a range of dates for the reports.</span>
  </div>
  <br/>
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
              <select class="form-control" id="limit" style="width:50%">
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
		<script src="https://maps.google.com/maps/api/js?sensor=false"
		        type="text/javascript"></script>
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

