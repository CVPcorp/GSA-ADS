<?php include('database.php'); ?>
<?php 
	function submitUser($User) 
	{
		$conn = getConnection();
		$UserName = " "; //$conn->real_escape_string($User['UserName']);
		$Password = $conn->real_escape_string($User['Password']);
		$ConfirmPassword = $conn->real_escape_string($User['ConfirmPassword']);
		$Email = $conn->real_escape_string($User['Email']);
		if($Password != $ConfirmPassword)
			return "Your passwords do not match";
		if(empty($UserName) || empty($Password) || empty($Email) )
		{
			return "You're missing fields";
		}
		else
		{
			$user = $conn->query("SELECT * FROM Users WHERE Email='" . $Email . "'");
			if($user->num_rows > 0) {
				return "That email address is already registered. Click <a href='Login.php'>here</a> to login. Please contact the system administrator if you need your password reset.";
			}
			else {
				$sql = "INSERT INTO Users (UserName, Password, Email, EmailConfirm)
				VALUES ('". $UserName ."', '".md5($Password)."', '".$Email."', '".uniqid()."')";
				
				if ($conn->query($sql) === TRUE) {
				    return "New record created successfully";
				} else {
				    return "Error: " . $sql . "<br>" . $conn->error;
				}
			}
		}
		$conn->close();
	}
	
	function loginUser($User)
	{
		$conn = getConnection();
		$UserName = $conn->real_escape_string($User['UserName']);
		$Password = $conn->real_escape_string($User['Password']);
		
		$sql = "SELECT * FROM Users WHERE (UserName='". $UserName ."' OR Email='" . $UserName . "' )AND Password='".md5($Password)."'";
		$result = $conn->query($sql);
		if (isset($result) && $result->num_rows > 0) {
			if(!isset($_SESSION)) {
				session_start();
			}
			$_SESSION["UserName"] = $UserName;
			return "Logged In";
		}
		else {
			return "User information is incorrect";
		}
		$conn->close();
	}
	function logout() {
		session_start();
		session_unset(); 
		session_destroy(); 
	}
?>