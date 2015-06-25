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
          <div class="col-xs-10 col-sm-6 col-md-4">
            <div class="form-group">
              <label for="Search">Search</label>
              <input type="text" class="form-control" id="searchTerm" placeholder="Search"/>
            </div>
          </div>
          <div class="col-xs-10 col-sm-6 col-md-2">
            <div class="form-group">
              <label for="StartDate">Start Date</label>
              <input type="text" class="form-control" readonly id="recalSTDate" placeholder="YYYYMMDD"/>
            </div>
          </div>
          <div class="col-xs-10 col-sm-6 col-md-2">
            <div class="form-group">
              <label for="EndDate">End Date</label>
              <input type="text" class="form-control" readonly id="recalENDate" placeholder="YYYYMMDD"/>
            </div>
          </div>
          <div class="col-xs-10 col-sm-6 col-md-2">
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
        <div class="row">
        	<div class="col-xs-10 col-sm-6 col-md-2">
        		<label for="Firm">Firm Name</label>
        		<input type="text" class="form-control" id="firmName" placeholder="Firm Name" />
        	</div>
        	<div class="col-xs-10 col-sm-6 col-md-2">
        		<label for="State">State</label>
				<select class="form-control" id="state">
					<option value="">Select State</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="DC">District Of Columbia</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
				</select>
        	</div>
        </div>
        <br/>
        <div class="col-xs-10">
	        <input type="button" class="btn btn-primary" onclick="searchAlerts();" value="Search" />
	        <button class="btn btn-default"> Reset </button>
        </div>
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

