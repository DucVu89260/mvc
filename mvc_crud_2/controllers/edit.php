<h1>Update student information</h1>
<form action="?action=update" method="post">
<table>
	<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $each['name'] ?>"></td>
	</tr>
	<tr>
		<td colspan="2"><button>Update</button></td>
	</tr>
</table>
</form>