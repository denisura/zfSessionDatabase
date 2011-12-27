<?php
include_once ("Zend/Test/PHPUnit/DatabaseTestCase.php");
/**
 * 
 * @author Denis Uraganov
 *
 */
abstract class DatabaseTestCase extends Zend_Test_PHPUnit_DatabaseTestCase
{
    /**
     * Implements PHPUnit_Extensions_Database_TestCase::getConnection().
     *
     * @return Zend_Test_PHPUnit_Db_Connection
     *
     */
    protected function getConnection ()
    {
        return ApplicationHelper::getConnection();
    }

    protected function getDataSet ()
    {
        return new PHPUnit_Extensions_Database_DataSet_YamlDataSet(
                FIXTURES_PATH . "/datasets/data.yml");
    }
}