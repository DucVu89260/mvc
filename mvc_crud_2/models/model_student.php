<?php
require_once 'models/connect.php';

function student_index(){
	$connect = connect();
	$sql="select
	students.*,
	classes.name as class_name
	from
	students
	left join classes on classes.id = students.class_id";
	$result = mysqli_query($connect,$sql);
	mysqli_close($connect);
	return $result;
}

function student_store($name, $class_id){
	$connect = connect();
	$sql = "insert into students(name,class_id) values('$name','$class_id')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);

}

function student_edit($id){
	$connect = connect();
	$sql = "select * from students where id = '$id'";
	$result= mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
	mysqli_close($connect);

	return $each;
}

function student_update($id, $name, $class_id){
	$connect = connect();
	$sql = "update students
		set
		name = '$name',
		class_id = '$class_id'
		where
		id = '$id'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
}

function student_delete($id){
	$connect = connect();
	$sql = "delete from students
		where id = '$id'";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
}


