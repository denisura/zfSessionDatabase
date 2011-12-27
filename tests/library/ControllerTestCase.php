<?php
include_once ("Zend/Test/PHPUnit/ControllerTestCase.php");

/**
 * 
 * @author Denis Uraganov
 *
 */
abstract class ControllerTestCase extends Zend_Test_PHPUnit_ControllerTestCase
{
    /**
     * 
     * @see Zend_Test_PHPUnit_ControllerTestCase::setUp()
     */
    public function setUp ()
    {
        $this->bootstrap = array('ApplicationHelper', 'getApplication');
        parent::setUp();
    }
}