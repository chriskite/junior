<?php
ini_set('display_errors',1);
error_reporting(E_ALL ^ E_NOTICE);
require_once 'PHPUnit/Framework.php';
require_once 'vfsStream/vfsStream.php';
require_once('..'.DIRECTORY_SEPARATOR.'client.php');
require_once('..'.DIRECTORY_SEPARATOR.'server.php');
?>