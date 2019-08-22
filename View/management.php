<?php require ('header.php'); ?>
<?php require_once '../Model/DBConfig.php';
  $db = new Database;
  $db->connect();
  if(isset($_GET['controller'])) 
  {
    $controller = $_GET['controller'];
  }
  else{
    $controller = '';
  }
  switch($controller){
    case 'student':{
      require_once('../Controller/student/student.php');
      break;
    }
    case 'teacher':{
      require_once('../Controller/teacher/teacher.php');
      break;
    }
    case 'staff':{
      require_once('../Controller/staff/staff.php');
      break;
    }
    case 'cource':{
      require_once('../Controller/cource/cource.php');
      break;
    }
    case 'admin':{
      require_once('../Controller/admin/admin.php');
      break;
    }
  }
 ?>