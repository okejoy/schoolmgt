<?php 
if(isset($_SESSION['hisid']) && isset($_SESSION['hisemail'])){
		$hisid = $_SESSION['hisid'];  $hisemail = $_SESSION['hisemail'];

		//get the logged in user infortion from DB
		$getinfo = mysqli_query($db, "SELECT * from users where userid = '$hisid' && email = '$hisemail'");
			if(mysqli_num_rows($getinfo)>0){
				//fetch his deatils
				$row = mysqli_fetch_assoc($getinfo);

				$userid = $row['userid']; 
				$firstname = $row['first_name'];
				$lastname = $row['last_name'];
				$myemail = $row['email'];
				$myphone = $row['phone_no'];
				$myclass = $row['class'];	

			}else{
				//log him out
				header('location: logout.php');
			}

			//allow to login and fetch his information
	}else{
		//log him out
		header('location: logout.php');
	}
?>