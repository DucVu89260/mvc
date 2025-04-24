<h1>Form insert Student</h1>
<form action="?action=store&controller=<?php echo $controller; ?>" method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Class belonged</td>
			<td>
				<select name="class_id">
				<?php foreach ($classes as $class): ?>
					<option value="<?php echo $class['id'] ?>">
						<?php echo $class['name'] ?>
					</option>
				<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><button>Add</button></td>
		</tr>
	</table>
</form>