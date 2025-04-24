<?php
require_once 'models/connect.php';

function class_index(){
	$connect = connect();
	$sql="select * from classes";
	$result = mysqli_query($connect,$sql);
	mysqli_close($connect);
	return $result;
}

function class_store($name){
	$connect = connect();
	$sql = "insert into classes(name) values('$name')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);

}

function class_edit($id){
	$connect = connect();
	$sql = "select * from classes where id = '$id'";
	$result= mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
	mysqli_close($connect);

	return $each;
}

function class_update($id,$name){
	$connect = connect();
	$sql = "update classes
		set name = '$name'
		where id = '$id'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
}

function class_delete($id){
	$connect = connect();
	$sql = "delete from classes
		where id = '$id'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
}


