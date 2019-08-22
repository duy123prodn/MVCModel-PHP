
<html lang="en">
  <head>
    <!-- Required meta tags -->
     
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <title>Home Page</title>
      <style type="text/css">
      body{
        background-image: url('View/images/background3.JPG');
        background-repeat: no-repeat;
        background-size: cover;
          }
  </style>
  </head>
  <body>
 <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> 
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href=""><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="index.php?controller=admin&action=login_admin">ADMIN</a>
      </li>	
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="index.php?controller=staff&action=login_staff">LOG IN STAFF</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="index.php?controller=teacher&action=login_teacher">LOG IN TEACHER</a>
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="index.php?controller=student&action=login_student">LOG IN STUDENT</a>
      </li>
    </ul>
  </div>
</nav>

<h2 style="text-align: center; color: white;">Log in before use the app. Click log in above </h2>
<?php 
	include "Model/DBConnect.php";

	if(isset($_GET['controller'])) {
		$controller = $_GET['controller'];
	}
	else{
		$controller = '';
	}

	switch($controller){
		case 'student':{
			require_once('Controller/student/student.php');
			break;
		}
		case 'teacher':{
			require_once('Controller/teacher/teacher.php');
			break;
		}
		case 'staff':{
			require_once('Controller/staff/staff.php');
			break;
		}
		case 'cource':{
			require_once('Controller/cource/cource.php');
			break;
		}
		case 'admin':{
			require_once('Controller/admin/admin.php');
			break;
		}
	}
	
 ?>
