<h1>Students List</h1>
<a href="?action=create">Add student</a>
<table width="60%" border=1>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php foreach ($result as $each): ?>
	<tr>
		<td><?php echo $each['id'] ?></td>
		<td><?php echo $each['name'] ?></td>
		<td>
			<a href="?action=edit&id=<?php echo $each['id'] ?>">@</a>
		</td>
		<td>
			<a href="?action=delete&id=<?php echo $each['id'] ?>">x</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>
