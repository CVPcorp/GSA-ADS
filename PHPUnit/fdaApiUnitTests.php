<?php include("../Includes/fdaApi.php"); ?>
<?php
class NullTest extends PHPUnit_Framework_TestCase
{
    public function testSearchResult()
    {
        $this->assertNotNull(searchApi('food'));
    }
}
?>