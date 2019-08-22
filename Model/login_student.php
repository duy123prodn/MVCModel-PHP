<?php session_start(); ?>
<?php 
//Gọi file connection.php ở bài trước
require_once'Model/DBConnect.php';	
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["login_student"])) {
	// lấy thông tin người dùng
	$stu_username = $_POST["student_username"];
	$stu_password = $_POST["student_password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$stu_username = strip_tags($stu_username);
	$stu_username = addslashes($stu_username);
	$stu_password = strip_tags($stu_password);
	$stu_password = addslashes($stu_password);

	if (empty($_POST['student_username']) or empty($_POST['student_password'])) {
		echo "<h1 style='text-align:center;color:white;'> Please Enter Full Username and Password.</h1>";
	}else{
		$sql = "SELECT * FROM students where username = '$stu_username' and password = '$stu_password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "<h1 style='text-align:center;color:white;'> Error Username or Password.</h1> !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
				session_start();
	    		$_SESSION["user_id"] = $data["stuid"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: view/page_students.php');
		}
	}
}
?>