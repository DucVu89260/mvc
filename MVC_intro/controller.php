<?php
	if(empty($_GET['order'])){
		include 'menu.php'; 
	} else {
		$order=$_GET['order'];
		include 'model.php';
		include 'plate.php';
	}
	