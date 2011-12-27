<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // default namespace
        $namespace = new Zend_Session_Namespace();
        $namespace->foo = 100;
        // mySpace namespace
        $namespace = new Zend_Session_Namespace('mySpace');
        $namespace->foo = 200;
    }
}