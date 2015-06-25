<?php include("../Includes/fdaApi.php"); ?>
<?php
class NullTest extends PHPUnit_Framework_TestCase
{
    public function testSearchResult()
    {
    	$terms['SearchTerm'] = 'Food';
    	$terms['Firm'] = '';
    	$terms['State'] = '';
    	$terms['RecalSTDate'] = '';
    	$terms['RecalENDate'] = '';
    	$terms['Type'] = 'Drug';
    	$terms['Limit'] = '1';
        $this->assertNotNull(searchApi($terms));
    }

    public function testSearchResultMap()
    {
        $terms['SearchTerm'] = '';
    	$terms['Firm'] = '';
    	$terms['State'] = '';
    	$terms['RecalSTDate'] = '20090621';
    	$terms['RecalENDate'] = '20140621';
    	$terms['Type'] = 'Drug';
    	$terms['Limit'] = '1';
        $this->assertNotNull(searchApi($terms));
    }

    public function testSearchFirm()
    {
        $terms['Firm'] = 'Novartis';
    	$terms['SearchTerm'] = '';
    	$terms['State'] = '';
    	$terms['RecalSTDate'] = '';
    	$terms['RecalENDate'] = '';
    	$terms['Type'] = 'Drug';
    	$terms['Limit'] = '1';
        $this->assertNotNull(searchApi($terms));
    }

    public function testSearchState()
    {
        $terms['State'] = 'NY';
    	$terms['Firm'] = '';
    	$terms['SearchTerm'] = '';
    	$terms['RecalSTDate'] = '';
    	$terms['RecalENDate'] = '';
    	$terms['Type'] = 'Drug';
    	$terms['Limit'] = '1';
        $this->assertNotNull(searchApi($terms));
    }
}
?>