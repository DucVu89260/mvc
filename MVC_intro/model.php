<?php
	$connect=mysqli_connect('localhost','root','','MVC');
	mysqli_set_charset($connect,'utf8');

	$order = $_GET['order'];

	$sql="select * from foods where name='$order'";

	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);

