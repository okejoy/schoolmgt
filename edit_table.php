<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Data</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>
<div class="container">
		<div class="row">
			<div class="col-md-6">
	<?php
	if(isset($_POST['update'])){
		$name=mysqli_real_escape_string($Db, $_POST['name']);
		$age=mysqli_real_escape_string($Db,$_POST['age']);
		$email=mysqli_real_escape_string($Db,$_POST['email']);
		$phone=mysqli_real_escape_string($Db,$_POST['phoneno']);
		$class=mysqli_real_escape_string($Db,$_POST['class']);
		$gender=mysqli_real_escape_string($Db,$_POST['gender']);
		$home=mysqli_real_escape_string($Db,$_POST['address']);
		$newid=mysqli_real_escape_string($Db,$_POST['id']);

		$dataupdate=mysqli_query($Db,"UPDATE register set Name='$name', Age='$age', Email='$email',phoneNumber='$phone',Class='$class' ,Gender='$gender',home_address='$home' where id='$newid'");
		if($dataupdate){
			echo "Data updated";
		}else{
			echo "Try again";
		}
	}


    if(isset($_GET["edit"])){
 			 $edit_id=$_GET['edit'];
 			 $get_scores=mysqli_query($Db,"SELECT * from register where id='$edit_id'");
 			 if(mysqli_num_rows($get_scores)>0){
 				$row=mysqli_fetch_assoc($get_scores);
 				 $id=$row["id"];
				 $name=$row["Name"];
				 $age=$row["Age"];
				 $email=$row["Email"];
				 $phone=$row["phoneNumber"];
				 $class=$row["Class"];
				 $gender=$row["Gender"];
				 $home=$row["home_address"];
				 ?>

				 <form method="post" action=" ">
				 	<div class="form-group">
				 	<input type="hidden" value="<?php echo $id ?>" name="id" class="form-control">
				 </div>
				 <div class="form-group">
				 	<input type="text" value="<?php echo $name ?>" name="name" class="form-control">
				 </div>
				  <div class="form-group">
				 	<input type="text" value="<?php echo $age ?>" name="age" class="form-control">
				 </div>
				 	 <div class="form-group">
				 	 <input type="text" value="<?php echo $email ?>" name="email" class="form-control">
				 	 </div>
				 	  <div class="form-group">
				 	<input type="text" value="<?php echo $phone ?>" name="phoneno" class="form-control">
				 </div>
				  <div class="form-group">
				 	<input type="text" value="<?php echo $class ?>" name="class" class="form-control">
				 </div>
				  <div class="form-group">
				 	<input type="text" value="<?php echo $gender ?>" name="gender" class="form-control">
				 </div>
				  <div class="form-group">
				 	<input type="text" value="<?php echo $home ?>" name="address" class="form-control">
				 </div>
				 <div>
				 	<button type="submit" name="update" class="btn-primary">UPDATE</button>
				 </div>
				 </form>


				<?php
 			 }else{
 			 	//header ("location:Select.php");
 			 }
              }else{
              	echo 'no set';
              }

              ?>
          </div>
      </div>
  </div>

</body>
</html>