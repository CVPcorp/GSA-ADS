<?php include("Includes/fdaApi.php"); ?>
<script type="text/javascript" src="Scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Scripts/IndexScripts.js"></script>
Search: <input type="text" id="searchTerm" /><br/>
Search On Date: <input type="text" id="searchDate" /><br/>
<input type="button" value="Search" onclick="searchAlerts();" /><br/>
<div id="results" ></div>