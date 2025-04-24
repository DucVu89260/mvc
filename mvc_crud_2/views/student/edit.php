<h1>Update Students information</h1>
<form action="?action=update&controller=student" method="post">
	<table>
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="<?php echo $each['name'] ?>"></td>
		</tr>
		<tr>
			<td>Class belonged</td>
			<td>
				<select name="class_id">
				<?php foreach ($classes as $class): ?>
					<option value="<?php echo $class['id'] ?>"
						<?php if($class['id'] == $each['class_id']) echo "selected"; ?>
					>
						<?php echo $class['name'] ?>
					</option>
				<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><button>Update</button></td>
		</tr>
	</table>
</form>