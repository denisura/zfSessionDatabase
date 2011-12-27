<?php
require_once 'PHPUnit/Extensions/SeleniumTestCase.php';

/**
 *
 * @author Denis Uraganov
 *        
 */
class SeleniumTestCase extends PHPUnit_Extensions_SeleniumTestCase
{

    protected static $_urlPrefix = '';

    /**
     *
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    protected function setUp ()
    {
        $config = ApplicationHelper::getApplication()->getOption('selenium');
        
        if (isset($config['host'])) {
            $this->setHost($config['host']);
        }
        
        if (isset($config['baseurl'])) {
            $this->setBrowserUrl($config['baseurl']);
        } else {
            $this->setBrowserUrl("http://localhost");
        }
        
//         if (isset($config['urlPrefix'])) {
//             self::$_urlPrefix = $config['urlPrefix'];
//         }
    }

//     /**
//      * 
//      * @see PHPUnit_Extensions_SeleniumTestCase::open()
//      */
//     public function open ($url, $relative = true)
//     {
//         if ($relative) {
//             $url = self::$_urlPrefix . url;
//         }
//         parent::open($url);
//     }
}