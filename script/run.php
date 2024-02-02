<?php
/**
 * VWM console controller script
 * This script handles all console commands that run through the framework
 * @author Erik Hoogeboom
 */
$siteRoot = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
require_once $siteRoot . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use Grip\Vwm\Request\Service\RequestDispatcher;
$dispatcher = RequestDispatcher::createRequestDispatcher(dirname(__DIR__));
$dispatcher->dispatch();
