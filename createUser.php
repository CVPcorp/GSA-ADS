<?php include('Includes/userFunctions.php'); ?>
<script type="text/javascript" src="Scripts/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="Scripts/UserScripts.js"></script>
<div id="results"></div>
<table>
<tr>
	<td>User Name:</td>
	<td>
		<input type="text" id="UserName" />
	</td>
	</tr>
	<tr>
	<td>Password:</td>
	<td>
		<input type="Password" id="Password" />
	</td></tr>
	<tr>
	<td>Email:</td>
	<td>
		<input type="text" id="Email" />
	</td></tr>
	<tr>
		<td>
			<input type="button" value="Submit" onclick="submitUser();" />
		</td>
		<td>
		</td>
	</tr>
</tr>
</table>