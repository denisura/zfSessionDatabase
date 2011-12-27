<?php
/**
 * 
 */
/**
 * 
 * @author Denis Uraganov
 *
 */
class ApplicationHelper
{

    private static $_application = null;
    private static $_connection = null;

    /**
     * 
     */
    public static function clear ()
    {
        self::$_application = null;
        self::$_connection = null;
    }

    /**
     * 
     */
    public static function getConnection ()
    {
        if (self::$_connection===null){
            $options = self::getOptions();
            $schema = $options['resources']['db']['params']['dbname'];
            
            $db = self::getBootstrap()
                  ->getPluginResource('db')
                  ->getDbAdapter();
            self::$_connection = new Zend_Test_PHPUnit_Db_Connection($db, $schema); 
        }
        return self::$_connection;
    }

    /**
     * 
     */
    public static function getApplication ()
    {
        if (self::$_application === null) {
            self::$_application = new Zend_Application(APPLICATION_ENV, 
                    APPLICATION_PATH . '/configs/application.ini');
            self::$_application->bootstrap();
        }
        return self::$_application;
    }

    /**
     * 
     */
    public static function getOptions ()
    {
        return self::getApplication()->getOptions();
    }

    /**
     * 
     */
    public static function getBootstrap ()
    {
        return self::getApplication()->getBootstrap();
    }
}