<?php
error_reporting(E_ALL | E_STRICT);

// Define path to application directory
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'testing'));

// Define path to test fixtures
defined('FIXTURES_PATH')
|| define('FIXTURES_PATH', realpath(dirname(__FILE__) . '/fixtures'));


// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    realpath(dirname(__FILE__) . '/library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';
/** ApplicationHelper */
require_once 'ApplicationHelper.php';