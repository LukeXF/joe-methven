<?php
	session_start();
	include("assets/captcha/simple-php-captcha.php");
	$_SESSION['captcha'] = simple_php_captcha();


	// In seconds the minimum time allowed between email forms before they will send.
	$email_timer = 120;
	$email_to = "contact@joemethven.com";
	$skype = "itsjustblaze";



	// Sets the values for the navbar
	$navbar = array(
		"home" =>   array(
			"active" => "",
			"url" => "//joemethven.com",
			"submenu" => array()
		),

		"portfolio" =>   array(
			"active" => "",
			"url" => "",          
			"submenu" => array()
		),

		"about" =>  array(
			"active" => "",
			"url" => "",          
			"submenu" => array()
		),

		"contact"=>array(
			"active" => "",
			"url" => "",          
			"submenu" => array()
		)

	)
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="	">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Joe Methven // Artist</title>

		

        <!-- CSS styles -->
        <link rel="stylesheet" href="assets/css/base.css">
        <link rel="stylesheet" href="assets/css/styles/dark-sidebar.css">
        <link rel="stylesheet" href="assets/css/styles/skin1.css">
        <link rel="icon" href="assets/img/favicon.ico">
      	<!-- /CSS styles -->

    </head>
    <body class="show-sidebar">