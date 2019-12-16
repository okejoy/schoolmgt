<?php
session_start();
	include 'connection.php';
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>School Page</title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	

		<style type="text/css">
			.head{
				background: gold;
				padding-top:30px;
				padding-bottom: 20px;
			}
			.sidebar{
				background-color: gold;
				height:82%;
				width: 15%;
			}
			.sidebar ul{
				list-style-type: none;
				font-family: verdana;
			}
		</style>
	</head>
	<body>
	<div class="wrapper">
		<div class="text-center head">
			<h4>VANILLA GROUP OF SCHOOLS</h4>
		</div>
		<div class="body">
			<div class="sidebar">
				<h5 class="std">Student Area</h5>
				<ul>
      			    <li><a href="stdregister.php">Registration</a></li>
      				<li><a href="Login4std.php">Login</a></li>
      				<!-- <li><a href="Login4std.php">Login</a></li> -->
      			</ul>
      			<h5 class="teach">Teacher Area</h5>
      			<ul>
      				<li><a href="score4std.php">Save Scores</a></li>
      				<li><a href="scoretable.php">Update Scores</a></li>
      				<li><a href="datainfo.php">Update Student Info</a></li>
      			</ul>
			</div>

		</div>
	</div>
	</body>
	</html>