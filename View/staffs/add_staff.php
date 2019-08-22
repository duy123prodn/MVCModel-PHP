<?php include_once 'permision_staff.php'; ?>
<body>
	<div class="content">
	<div class="dangkystaff">
		<h3>ADD STAFF</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Username : </td>
					<td><input type="text" name="staff_username" placeholder=""></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="text" name="staff_password" placeholder=""></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="staff_email" placeholder=""></td>
				</tr>
				<tr>
					<td>Full Name : </td>
					<td><input type="text" name="staff_fullname" placeholder=""></td>
				</tr>
				<tr>
					<td>Data of Birth : </td>
					<td><input type="text" name="staff_namsinh" placeholder=""></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="add_staff" value="ADD STAFf"></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
