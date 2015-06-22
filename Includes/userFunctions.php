<?php include('database.php'); ?>
<?php 

	function submitUser($User) 
	{
		$conn = getConnection();
		$UserName = $User['UserName'];
		$Password = $User['Password'];
		$Email = $User['Email'];
		if(empty($UserName) || empty($Password) || empty($Email) )
		{
			return "You're missing fields";
		}
		else
		{
			$sql = "INSERT INTO Users (UserName, Password, Email, EmailConfirm)
			VALUES ('". $UserName ."', '".md5($Password)."', '".$Email."', '".uniqid()."')";
			
			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		$conn->close();
	}
	
	function loginUser($User)
	{
		$conn = getConnection();
		$UserName = $User['UserName'];
		$Password = $User['Password'];
		
		$sql = "SELECT * FROM Users WHERE UserName='". $UserName ."' AND Password='".md5($Password)."'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			session_start();
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