<?php 
	include 'connection.php';
	include 'validation.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	

</head>
<body>
	<div class="container-fluid">
<div class="row" style="margin-top: 30px;">
	<div class="col-md-3 bg-warning">

	<div>
		<h4 class="text-danger text-center">INFO</h4>
		<ul class="text-white">
			<li class="text-white"><a href="schoolpage.php" class="text-white">Homepage</a></li>
			<li class="text-white"><a href="profile" class="text-white">Profile</a></li>
			<li><a href="logout" class="text-white">Logout</a></li>
		</ul>
	</div>		
	</div>
	<div class="col-md-9">
		<h5>WELCOME HERE <?php echo $std;?></h5>
			<p> Your Class is : <?php echo $class;?></p>		
			<p> Subject: <?php echo $subject;?></p>		
			<p>Teacher : <?php echo $name;?></p>		
			<p>Your Score is : <?php echo $score;?></p>		
					
	</div>

</div>
</div>
</div>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>