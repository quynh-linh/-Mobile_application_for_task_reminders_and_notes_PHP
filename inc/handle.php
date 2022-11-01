<?php 
    include_once 'lib/database.php';
	spl_autoload_register(function ($className) {
        include_once("classes/" .$className. ".php");
    });
	$db = new Database();
    $jsonTask = new jsontask();
    $jsonUser = new jsonUser();
?>