<?php
/**
 * 
 */
require_once("ControllerTestCase.php");

/**
 * 
 * @author Denis Uraganov
 *
 */
class IndexControllerTest extends ControllerTestCase
{
    public function testIndexPage(){
        $this->dispatch("/");
        $this->assertController("index");
        $this->assertAction("index");
        $this->assertResponseCode(200);
    }
}