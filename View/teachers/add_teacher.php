<?php require_once 'permision_teacher.php'; ?>
<body>
	<div class="content">
	<div class="dangkyteacher">
		<h3>ADD TEACHER</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Username : </td>
					<td><input type="text" name="teacher_username" placeholder=""></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="text" name="teacher_password" placeholder=""></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="teacher_email" placeholder=""></td>
				</tr>
				<tr>
					<td>Full Name : </td>
					<td><input type="text" name="teacher_fullname" placeholder=""></td>
				</tr>
				<tr>
					<td>Major : </td>
					<td><input type="text" name="teacher_chuyennganh" placeholder=""></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="add_teacher" value="ADD TEACHER"></td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
