<?php include_once 'permision_student.php'; ?>
  
<body>
  <div class="content">
  <div class="dangkystudent">
  
    <h3>EDIT STUDENT</h3>
    <form action="" method="POST">
      <table>
        <tr>
          <td>Username : </td>
          <td><input type="text" name="student_username" value="<?php echo $dataStudentID['username'];?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Password : </td>
          <td><input type="text" name="student_password"
          value="<?php echo $dataStudentID['password']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Email : </td>
          <td><input type="text" name="student_email"
          value="<?php echo $dataStudentID['email']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Full Name : </td>
          <td><input type="text" name="student_fullname"
          value="<?php echo $dataStudentID['fullname']; ?>" placeholder=""></td>
        </tr>
                <tr>
          <td>StudentID : </td>
          <td><input type="text" name="msv" value="<?php echo $dataStudentID['msv']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Major : </td>
          <td><input type="text" name="chuyennganh" value="<?php echo $dataStudentID['chuyennganh']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="update_student" value="Update Student"></td>
        </tr>
        
      </table>
    </form>
  </div>
</div>
</body>
