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
?>