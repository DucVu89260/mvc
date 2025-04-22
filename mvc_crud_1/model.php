<?php

$connect = mysqli_connect('localhost','root','','mvc_crud');
mysqli_set_charset($connect,'utf8');


switch ($action) {
	case '':
		$sql="select * from students";
		$result = mysqli_query($connect,$sql);
		break;

	case 'store':
		$sql="insert into students(name)
		values ('$name')";
		mysqli_query($connect,$sql);
		header('location:index.php');
		break;

	case 'edit':
		$sql="select * from students where id='$id'";
		$result = mysqli_query($connect,$sql);
		$each = mysqli_fetch_array($result);
		break;

	case 'update':
		$sql="update students
		set name = '$name'
		where id='$id'";
		mysqli_query($connect,$sql);
		header('location:index.php');
		break;

	case 'delete':
		$sql="delete from students where id='$id'";
		mysqli_query($connect,$sql);
		header('location:index.php');
		break;
}

mysqli_close($connect);
