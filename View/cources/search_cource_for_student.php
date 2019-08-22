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
        background-image: url('View/images/background3.JPG');
        background-repeat: no-repeat;
        background-size: cover;
          }
  </style>
  </head>
  <body>
 <body class="bg-info">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="page_students.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> 
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="font-style: italic; font-weight: bold;" href=""><span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" style="font-style: italic; font-weight: bold; color: red;   " href="http://localhost:8081/mvc/logout.php" onclick="return confirm('Are you sure?')">LOG OUT</a>
      </li>
      <li class="nav-item">
    </ul>
  </div>
</nav>


<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2><a href="page_students.php?controller=cource&action=list_cource_for_student">List cources</a></h2>
      <div class="timkiem">
        <form action="" method="GET"> 
          <table>
            <tr>
              <input type="hidden" name="controller" value="cource">
              <td><input type="text" name="keyword" placeholder="search cource"></td>
              <td><input type="submit" value="Search" class="btn btn-info"></td>
              <input type="hidden" name="action" value="search_cource_for_student">
            </tr>
          </table>
        </form>
      </div>
     
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>Np.</th>
          <th>Tittle</th>
          <th>Content</th>  
          <th>Poster</th>
          <th>Post Date</th>
          <th>Is Public?</th>
        </tr>
        <?php 
        $stt = 1;
        foreach($data_Search_stu as $value)
          {
          ?>
          <tr>
            <td><?php echo $stt; ?></td>
            <td><?php echo $value['title']; ?></td>
            <td><?php echo $value['content']; ?></td>
            <td><?php echo $value['poster']; ?></td>
            <td><?php echo $value['createdate']; ?></td>
            <td><?php echo $value['is_public']; ?></td>
          </tr>
        <?php
            $stt++;
            }
        ?>
      </table>
    </div>
  </div>
</div>