<?php require_once 'permision_teacher.php'; ?>
<body>
  <div class="content">
  <div class="dangkyteacher">
  
    <h3>EDIT TEACHER </h3>
    <form action="" method="POST">
      <table>
        <tr>
          <td>Username : </td>
          <td><input type="text" name="teacher_username" value="<?php echo $dataTeacherID['username']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Password : </td>
          <td><input type="text" name="teacher_password"
          value="<?php echo $dataTeacherID['password']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Email : </td>
          <td><input type="text" name="teacher_email"
          value="<?php echo $dataTeacherID['email']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Full Name : </td>
          <td><input type="text" name="teacher_fullname"
          value="<?php echo $dataTeacherID['fullname']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Major : </td>
          <td><input type="text" name="teacher_chuyennganh" value="<?php echo $dataTeacherID['chuyennganh']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="update_teacher" value="Update Teacher"></td>
        </tr>
        
      </table>
    </form>
  </div>
</div>
</body>
