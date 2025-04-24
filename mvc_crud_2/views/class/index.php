<h1>Classes List</h1>
<a href="?action=create&controller=class">
	Add more class
</a>
<table border="1" width="100%">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach ($result as $each): ?>
	<tr>
		<td><?php echo $each['id'] ?></td>
		<td><?php echo $each['name'] ?></td>
		<td>
			<a href="?action=edit&controller=class&id=<?php echo $each['id'] ?>">Edit</a>
		</td>
		<td>
			<a href="?action=delete&controller=class&id=<?php echo $each['id'] ?>">Delete</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>