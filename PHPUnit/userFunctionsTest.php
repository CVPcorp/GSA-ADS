<?php include("../Includes/userFunctions.php"); ?>
<?php
class NullTest extends PHPUnit_Framework_TestCase
{
    public function testUserCreate()
    {
    	$User['UserName'] = "testUser";
    	$User['Password'] = "Password1";
    	$User['Email'] = "testUser@test.com";
        $this->assertNotNull(submitUser($User));
        $this->assertEquals(submitUser($User), "User already exists.");
        $User['Password'] = "";
        $this->assertEquals(submitUser($User), "You're missing fields");
    }
    public function testLogons()
    {
    	@session_start();
    	$User['UserName'] = "testUser";
    	$User['Password'] = "Password1";
    	$this->assertEquals(loginUser($User), "Logged In");
    	$User['UserName'] = "fakeUser";
    	$User['Password'] = "Blargh";
    	$this->assertEquals(loginUser($User), "User information is incorrect");
    }
}
?>