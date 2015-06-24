<?php include("../Includes/fdaApi.php"); ?>
<?php
class NullTest extends PHPUnit_Framework_TestCase
{
    public function testSearchResult()
    {
    	$terms['SearchTerm'] = 'Food';
        $this->assertNotNull(searchApi($terms));
    }

    public function testSearchResultMap()
    {
        $terms['SearchTerm'] = '20090621';
        $this->assertNotNull(searchApi($terms));
    }
}
?>