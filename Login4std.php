<?php
session_start();
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN4STD</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<?php
			if(isset($_POST["login"])){
				$name=mysqli_real_escape_string($Db,$_POST["name"]);
				$class=mysqli_real_escape_string($Db,$_POST["class"]);
				$newid=mysqli_real_escape_string($Db,$_POST['stdid']);


				if(empty($name)||empty($class)){
					echo "Fill all rows";
				}else{
			
					$result=mysqli_query($Db,"SELECT * from scores where Name='$name' and Class='$class'");
					// $rowcount=mysqli_num_rows($result);
					 if(mysqli_num_rows($result)>0){
					 	$row = mysqli_fetch_assoc($result);
								$hisid = $row['stdid'];
								$hisclass = $row['class'];
								//veriy the new password with the hashed password in the DB

									$verifyme = mysqli_query($Db, $hisclass);
									if($verifyme){
										//allow to login
									$_SESSION['hisid'] = $hisid;
									$_SESSION['hisclass'] = $hisclass;

									header('location: home.php');
									}else{								
										echo 'invalid login credentials';
									}
								
					 }else{
					 	echo "Information mismatch";
					}
				}
			}
			?>
         <form method="post" >
			<h3 >LOGIN TO YOUR PROFILE</h3>
			<div class="form-group">
		 <input type="hidden" name="stdid" class="form-control">
		</div>
  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Student's name">
  </div>
  <div class="form-group">
    <input type="text" name="class" class="form-control"  placeholder="Your Class">
  </div>
<button name="login" class="btn logbtn" >Login</button>
</form>
		</div>
	</div>
</div>


</body>
</html>