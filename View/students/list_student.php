<?php include_once 'permision_student.php'; ?>
  

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2><a href="management.php?controller=student&action=list_student">List Students</a></h2>
      <div class="timkiem">
        <form action="" method="GET"> 
          <table>
            <tr>
              <input type="hidden" name="controller" value="student">
              <td><input type="text" name="keyword" placeholder="Search Student"></td>
              <td><input type="submit" value="Search" class="btn btn-info"></td>
              <input type="hidden" name="action" value="search_student">
            </tr>
          </table>
        </form>
      </div>
      <div class="add-new-student">
        <table> 
        <tr>
              <a href="management.php?controller=student&action=add_student" style="width: 250px; margin-left: 700px; " class="btn btn-danger">Add New Student</a>
        </tr>
        </table>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>No.</th>
          <th>Username(Student)</th>
          <th>Password</th>
          <th>Email</th>
          <th>Full Name</th>
          <th>STUDENT ID</th>
          <th>Major</th>
          <th>Action</th>
        </tr>
        <?php 
        $stt = 1;
        foreach($data as $value)
          {
          ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['username']; ?></td>
            <td><?php echo $value['password']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['fullname']; ?></td>
            <td><?php echo $value['msv']; ?></td>
            <td><?php echo $value['chuyennganh']; ?></td>
            <td>
              <a href="management.php?controller=student&action=edit_student&stuid=<?php echo $value['stuid']; ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="management.php?controller=student&action=delete_student&stuid=<?php echo $value['stuid']; ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php
            $stt++;
            }
        ?>
      </table>
    </div>
  </div>
</div>