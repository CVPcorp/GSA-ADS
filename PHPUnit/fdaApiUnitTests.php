<?php include("../Includes/fdaApi.php"); ?>
<?php
class NullTest extends PHPUnit_Framework_TestCase
{
    public function testSearchResult()
    {
    	$terms['SearchTerm'] = 'Food';
        $this->assertNotNull(searchApi($terms));
    }
}
?>