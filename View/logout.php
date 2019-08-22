
<?php 
		session_start(); 

		$_SESSION['user_id'] = null;

		//unset($_SESSION['username']);
		//session_destroy();

		header('Location: http://localhost:8081/mvc/index.php');

?>