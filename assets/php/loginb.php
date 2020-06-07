<?php

include('connection.php');

    session_start();

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	
	$password = md5(mysqli_real_escape_string($conn, $_POST['password']));
	
	$qry = " select * from login where name='$name' and password='$password' ";
	$result=mysqli_query($conn,$qry);

	if(!$result){
		echo $qry;
	}
	else{
		if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['name'] = $name;
			$_SESSION['password'] = $password;
			$_SESSION['id'] = $row['id'];
			echo "<script>alert('Welcome $name');
				window.location.href = '../../modules/searchindex2.php';
				</script>";
			
		}
		else{

			echo "<script>alert('Wrong Credentials');
					window.location.href = '../../modules/login.php';
					</script>";
		}	
	
	}
	
?>