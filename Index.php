<?php include("Includes/fdaApi.php"); ?>
<?php 
	session_start();
	if(is_null($_SESSION["UserName"])) {
		header("Location: Login.php");
		die();
	}
?>
<script type="text/javascript" src="Scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Scripts/IndexScripts.js"></script>
Search: <input type="text" id="searchTerm" /><br/>
<input type="button" value="Search" onclick="searchAlerts();" /><br/>
<div id="results" ></div>