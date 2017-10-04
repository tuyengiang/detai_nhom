<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","root","anhngu");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die ("Không thể kết nối database"). mysqli_error($conn);
	}
	$postpage= 6;//so bai tren 1 trang
	function checklogin(){
		global $_SESSION;
		if (empty($_SESSION['user'])){
			echo"Đã login Đâu Mà vào";
			header("location:dangnhap.php");
		}
	}