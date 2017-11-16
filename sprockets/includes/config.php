<?php
/*
config.php

stores configuration information for our web application

*/

//Removes header already sent errors
ob_start();

define('DEBUG',true); #we want to see all errors

include 'credentials.php'; //stores database info
include 'common.php'; //stores favorite functions info

//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//Create config object
$config = new stdClass;

//Create default page identifier
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//set website defaults
$config->title = THIS_PAGE;
$config->banner = 'Sprockets';


switch(THIS_PAGE){

	case 'contact.php':
		$config->title = 'Contact Page';
		break;
		
	case 'appointment.php':
		$config->title = 'Appointment Page';
		$config->banner = 'Das Sprockets';
		break;
		
	case 'template.php':
		$config->title = 'Template Page';
		break;

}

//echo THIS_PAGE;

//echo $_server['PHP_SELF'];
//die;

?>