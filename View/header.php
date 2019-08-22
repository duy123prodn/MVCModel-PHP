<?php
session_start();
 
?>
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

    <title>Trang Chủ</title>
      <style type="text/css">
      body{
        background-image: url('../View/images/background2.JPG');
        background-repeat: no-repeat;
        background-size: cover;
          }
  </style>
  </head>
  <body>
 <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="management.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> 
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href=""><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="management.php?controller=staff&action=list_staff">Staffs Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="management.php?controller=teacher&action=list_teacher">Teachers Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="management.php?controller=student&action=list_student" >Students Management</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href="management.php?controller=cource&action=list_cource" name="view-list-cource">Cources Management</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold; color: red;" href="logout.php" onclick="return confirm('Are you sure?')">LOG OUT</a>
      </li>
      <li class="nav-item">
    </ul>
  </div>
</nav>
