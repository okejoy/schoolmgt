<?php
	include 'connection.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<title>TEACHER PAGE</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
<style type="text/css">
	.bdy{
		background-color: #4523;
	}
	.crd{
		margin-top: 40px;
	}
</style>
</head>
<body class="bdy">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
   	<div class="container-fluid">
  		<a class="navbar-brand" href="#" id="logo">Vanilla Group Of Schools</a>
   	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls	="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
   	 <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  	 <ul class="navbar-nav ml-auto">
      
      <li class="nav-item active" >
        <a class="nav-link" href="teacherspage.php" >Home</a>                                                            
      </li>
      <li class="nav-item">
        <a class="nav-link" href="scoretable.php" >Update Scores</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="datainfo.php">Update Info</a>
      </li>
     </ul>
    
  </div>
</div>
</nav>
<div class="container">
	<div class="row">
	<div class="col-md-6 offset-md-3">
<div class="card text-center crd bg-info">
	<div class="card-header text-white">TEACHER ARENA</div>
	<div class="card-body">
		<h4 class="text-white">SAVE SCORES</h4>
		<a href="score4std.php" type="button" class="btn btn-block btn-info btns">Save</a><br>
		<h4 class="text-white">UPDATE SCORES</h4>
		<a href="scoretable.php" type="button" class="btn btn-block btn-light btns">Update</a><br>
		<h4 class="text-white">UPDATE STUDENT INFO</h4>
		<a href="datainfo.php" type="button" class="btn btn-block btn-info btns">Update</a>
	</div>
	 </div>
	</div>
	</div>
	</div>
</body>
</html>