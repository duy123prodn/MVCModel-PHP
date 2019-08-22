<?php include_once 'permision_student.php'; ?>
  
<body>
	<div class="content">
	<div class="dangkystudent">
		<h3>ADD STUDENT</h3>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Username : </td>
					<td><input type="text" name="student_username" placeholder=""></td>
				</tr>
				<tr>
					<td>Password : </td>
					<td><input type="text" name="student_password" placeholder=""></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="text" name="student_email" placeholder=""></td>
				</tr>
				<tr>
					<td>Full Name : </td>
					<td><input type="text" name="student_fullname" placeholder=""></td>
				</tr>
								<tr>
					<td>StudentID : </td>
					<td><input type="text" name="msv" placeholder=""></td>
				</tr>
				<tr>
					<td>Major : </td>
					<td><input type="text" name="chuyennganh" placeholder=""></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="add_student" value="ADD STUDENT"></td>
				</tr>
			</table>
		</form>
		
	</div>
</div>
</body>
