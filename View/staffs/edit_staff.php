<?php include_once 'permision_staff.php'; ?>
<body>
  <div class="content">
  <div class="dangkystaff">
  
    <h3>EDIT STAFF</h3>
    <form action="" method="POST">
      <table>
        <tr>
          <td>Username : </td>
          <td><input type="text" name="staff_username" value="<?php echo $datastaffID['username']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Password : </td>
          <td><input type="text" name="staff_password"
          value="<?php echo $datastaffID['password']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Email : </td>
          <td><input type="text" name="staff_email"
          value="<?php echo $datastaffID['email']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Full Name : </td>
          <td><input type="text" name="staff_fullname"
          value="<?php echo $datastaffID['fullname']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>Nắm sinh : </td>
          <td><input type="text" name="staff_namsinh" value="<?php echo $datastaffID['namsinh']; ?>" placeholder=""></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="update_staff" value="Update Staff"></td>
        </tr>
        
      </table>
    </form>
  </div>
</div>
</body>
