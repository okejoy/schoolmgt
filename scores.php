<?php
  include 'connection.php';
  ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Page</title>
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
		$name=mysqli_real_escape_string($Db, $_POST['teacher']);
		$class=mysqli_real_escape_string($Db,$_POST['class']);
		$std=mysqli_real_escape_string($Db,$_POST['student']);
		$subject=mysqli_real_escape_string($Db,$_POST['subject']);
		$score=mysqli_real_escape_string($Db,$_POST['scores']);
		$newid=mysqli_real_escape_string($Db,$_POST['id']);

		$productupdate=mysqli_query($Db,"UPDATE scores set teacher='$name', class='$class', student='$std',subject='$subject',scores='$score' where id='$newid'");
		if($productupdate){
			echo "Score updated";
		}else{
			echo "Try again";
		}
	}


    if(isset($_GET["edit"])){
 			 $edit_id=$_GET['edit'];
 			 $get_scores=mysqli_query($Db,"SELECT * from scores where id='$edit_id'");
 			 if(mysqli_num_rows($get_scores)>0){
 				$row=mysqli_fetch_assoc($get_scores);
 				 $id=$row["id"];
				 $name=$row["teacher"];
				 $class=$row["class"];
				 $std=$row["student"];
				 $subject=$row["subject"];
				 $score=$row["scores"]
				 ?>

				 <form method="post" action=" ">
				 	<div class="form-group">
				 	<input type="hidden" value="<?php echo $id ?>" name="id" class="form-control">
				 </div>
				 <div class="form-group">
				 	<input type="text" value="<?php echo $name ?>" name="teacher" class="form-control">
				 </div>
				  <div class="form-group">
				 	<input type="text" value="<?php echo $class ?>" name="class" class="form-control">
				 </div>
				 	 <div class="form-group">
				 	 <input type="text" value="<?php echo $std ?>" name="student" class="form-control">
				 	 </div>
				 	  <div class="form-group">
				 	<input type="text" value="<?php echo $subject ?>" name="subject" class="form-control">
				 </div>
				  <div class="form-group">
				 	<input type="text" value="<?php echo $score ?>" name="scores" class="form-control">
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
  </body>
  </html>