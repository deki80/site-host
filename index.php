<?php
/*
* Autoload for real app and namespace-ing classes
* View loading could be done with output buffering, don't have a time 
* to experiment now
*/
require_once("User.php");
require_once("Collector.php");

$user = new User(293785);
$data = Collector::getUserDomains($user);

require_once("view.php");
