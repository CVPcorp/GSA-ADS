<html><head><?php include("Includes/fdaApi.php"); ?><script type="text/javascript" src="Scripts/jquery-1.11.3.min.js"></script><script type="text/javascript" src="Scripts/IndexScripts.js"></script></head><body bgcolor="aqua" style="width: 100%;"><div>    <table>        <tr>            <td>Recall start date:</td><td><input type="text" id="recalSTDate" /></td>            <td>Recall end date: </td><td><input type="text" id="recalENDate" /></td>        </tr>        <tr>            <td>Search: </td><td><input type="text" id="searchTerm" /></td>            <td>Submit:</td><td><input type="button" value="Search" onclick="searchAlerts();" /><a onclick="searchMapResults()" style="cursor: hand">Show Map</a></td>        </tr>    </table></div><div><div id="results" style="width:100%;float: left;clear: both"></div><script src="http://maps.google.com/maps/api/js?sensor=false"        type="text/javascript"></script><div id="map" style="width: 50%; height: 400px;"></div></div><script type="application/javascript"></script></body></html>