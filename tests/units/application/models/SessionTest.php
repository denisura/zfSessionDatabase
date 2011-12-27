<?php
require_once("DatabaseTestCase.php");

/**
 * 
 * @author Denis Uraganov
 *
 */
class SessionTest extends DatabaseTestCase
{
    /**
     * 
     */
    public function testSession()
    {
        // default namespace
        $namespace = new Zend_Session_Namespace();
        $namespace->foo = 100;
        
        // mySpace namespace
        $namespace = new Zend_Session_Namespace('mySpace');
        $namespace->foo = 200;

        $namespace = new Zend_Session_Namespace();
        $this->assertEquals($namespace->foo,100);
        
        $namespace = new Zend_Session_Namespace('mySpace');
        $this->assertEquals($namespace->foo,200);
    }
}