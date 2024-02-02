<?php
/**
 * e-Grip controller script
 * This script handles all front-end requests that should be handled by the application.
 * See .htaccess for the necessary rewrite rule that accomplishes this.
 * @author Erik Hoogeboom
 * @version $Id: index.php5,v 1.30 2007-09-03 15:43:05 hoogeboom Exp $
 * @package egrip
 */

$siteRoot = dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR;
require_once $siteRoot . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
use Grip\Vwm\Request\Service\RequestDispatcher;
$dispatcher = RequestDispatcher::createRequestDispatcher(dirname(__DIR__));
$dispatcher->dispatch();
