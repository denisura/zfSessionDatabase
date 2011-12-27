<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Start session
     */
    public function _initCoreSession()
    {
        $this->bootstrap('db');
        $this->bootstrap('session');
        Zend_Session::start();
    }
}