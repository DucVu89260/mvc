<?php

$action = '';

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

switch ($action) {
	case '':
		require 'model.php';
		require 'views/index.php';
		break;
	
	case 'create':
		require 'views/create.php';
		break;

	case 'edit':
		$id = $_GET['id'];
		require 'model.php';
		require 'views/edit.php';
		break;

	case 'update':
		$id = $_POST['id'];
		$name = $_POST['name'];
		require 'model.php';
		break;

	case 'delete':
		$id = $_GET['id'];
		require 'model.php';
		break;

	case 'store':;
		$name = $_POST['name'];
		require 'model.php';
		break;

	default:
		echo 'illegal action';
		break;
}
