<?php session_start(); ?>
<?php 
//Gọi file connection.php ở bài trước
require_once("Model/DBConnect.php");

	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["login_staff"])) {
	// lấy thông tin người dùng
	$sta_username = $_POST["staff_username"];
	$sta_password = $_POST["staff_password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$sta_username = strip_tags($sta_username);
	$sta_username = addslashes($sta_username);
	$sta_password = strip_tags($sta_password);
	$sta_password = addslashes($sta_password);

	if (empty($_POST['staff_username']) or empty($_POST['staff_password'])) {
		echo "<h1 style='text-align:center;color:white;'> Please Enter Full Username and Password.</h1>";
	}else{
		$sql = "SELECT * FROM staff where username = '$sta_username' and password = '$sta_password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "<h1 style='text-align:center;color:white;'> Error Username or Password.</h1> !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
				session_start();
	    		$_SESSION["user_id"] = $data["staffid"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: view/management.php');
		}
	}
}
?>