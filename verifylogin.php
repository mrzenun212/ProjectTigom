<?php
	session_start();
	require 'dbconnect.php';
	
	

	$username=$_POST['username'];
	$password=$_POST['password'];

	

	//$username=mysqli_real_escape_string($conn,$username);
	//$password=mysqli_real_escape_string($conn,$password);

	if (empty($username) || empty($password)) {
		$message="Both fields must not be empty!";
		echo "<script type='text/javascript'>
				alert('$message');
				window.location.href='index.php?error=1';
			</script>";
	}

	$sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$query=mysqli_query($conn,$sql);
	$numrows = mysqli_num_rows($query);

	if($numrows!=0){
				while($row = mysqli_fetch_assoc($query)){
					$dbusername = $row['username'];
					$dbpassword = $row['password'];
					$_SESSION['phone-user-id'] = $row['ID'];
				}
				$phone_user_id = $_SESSION['phone-user-id'];
				if($dbusername==$username AND $dbpassword==$password){
					header('location:welcome.php');
				}else{
					$message="Account does not exist!";
					echo "<script type='text/javascript'>
							alert('$message');
							window.location.href='index.php';
						</script>";
				}
	}

?>