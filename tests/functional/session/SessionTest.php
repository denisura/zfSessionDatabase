<?php
/**
 * 
 */
require_once("SeleniumTestCase.php");

/**
 * 
 * @author Denis
 *
 */
class SessionTest extends SeleniumTestCase
{
    /**
     * 
     */
    public function testSession()
    {
        //clear session table
        $connection = ApplicationHelper::getConnection();
        $databaseTester = new Zend_Test_PHPUnit_Db_SimpleTester($connection);
        $databaseFixture = new PHPUnit_Extensions_Database_DataSet_YamlDataSet(
                FIXTURES_PATH . "/datasets/data.yml");
        $databaseTester->setupDatabase($databaseFixture);

        // make sure table is empty 
        $dataSet =  $connection->createQueryTable('app_session', 'SELECT lifetime, data FROM app_session');
        $this->assertEquals(0, $dataSet->getRowCount());
        
        $this->open('');
        $this->waitForPageToLoad();
        $html = $this->getHtmlSource();
        $this->assertContains('Zend Framework!', $html);
        
        // make sure app_session table contains expected session values
        $dataSet = $connection->createQueryTable('app_session', 
                'SELECT lifetime, data FROM app_session');
        $this->assertGreaterThan(0, $dataSet->getRowCount());
        $expectedDataSet = new PHPUnit_Extensions_Database_DataSet_YamlDataSet(
                FIXTURES_PATH . "/datasets/expected_session.yml");
        $expectedTable = $expectedDataSet->getTable("app_session");
        $dataSet->assertEquals($expectedTable);
    }
}