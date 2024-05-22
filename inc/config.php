<?php 
	session_start();
	$conn = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($conn, "catering");
	
	// settings
	$url = "http://localhost/catering/";
	$title = "Website Pemesanan Katering";
	$no = 1;
	
	function alert($command){
		echo "<script>alert('".$command."');</script>";
	}
	function redir($command){
		echo "<script>document.location='".$command."';</script>";
	}
	function validate_admin_not_login($command){
		if(empty($_SESSION['iam_admin'])){
			redir($command);
		}
	}
?>