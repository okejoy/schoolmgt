<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Scores</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card">
					<div class="card-header text-white bg-info">SCORE FORM</div>
					<div class="card-body">
				<?php


				  if(isset($_POST["submit"])){
				  	$name=mysqli_real_escape_string($Db,$_POST["teacher"]);
				  	$class=mysqli_real_escape_string($Db,$_POST["class"]);
				  	$std=mysqli_real_escape_string($Db,$_POST["student"]);
				  	$subject=mysqli_real_escape_string($Db,$_POST["subject"]);
				  	$score=mysqli_real_escape_string($Db,$_POST["scores"]);

				  	if(empty($name)||empty($score)){
				  		echo "Fill the required data";
				  	}else{
				  		$scores="INSERT INTO scores(teacher,class,student,subject,scores)VALUES('$name','$class','$std','$subject','$score')";
				  		if($result=mysqli_query($Db,$scores)){
				  			echo "Successful";
				  		}else{
				  			echo "Please check your data";
				  		}
				  	}
				  }
				?>
				<form id="formdes" method="post">
                 <h5 class="reg">SCORE FORM</h3>
           <div class="form-row">
      <div class=" col-md-12  mb-3">
      <input type="text" name="teacher" class="form-control" placeholder="Teacher's name">
    </div>
    <div class=" col-md-6  mb-3">
      <input type="text" name="class" class="form-control" placeholder="Class">
    </div>
</div>
<div class="form-row">
	<div class="col-md-12 mb-3">
		<input type="text" name="student" class="form-control" placeholder="Student name">
	</div>
    <div class="col-md-6 mb-3">
      <input type="text"  name="subject" class="form-control" placeholder="Subjects">
    </div>

     <div class="col-md-6 mb-3">
      <input type="number" name="scores" class="form-control" placeholder="Your Scores">
    </div>

  </div>
  <button  name="submit" class="btn btn-lg btn-danger mb-3">SUBMIT</button>
 </form>
 <
			</div>
		</div>
	</div>

</body>
</html>