<?php 
 include "connection.php" ;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Student Registration</title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
		<style type="text/css">
			.butt{
          text-align: center;		
			}
			.reg{
				margin-bottom: 25px;
				padding-top: 20px;
				text-align: center;
			}
			#formdes{
				background:;
				width: 550px;
			}
			#formdes input{
				border-radius: 5px;
				background-color:white;
				color: black;
			}
			#formdes input:focus{
				background-color: orange;
			}
		</style>
 </head>
 <body>
  
 	<div class="container-fluid wrapper">
 		<div class="row">
 			<div class="col-md-6 offset-md-3">
        <div class="card">
      <div class="card-header text-white bg-info">Registeration For New Students</div>
      <div class="card-body">
 				<?php
 						if(isset($_POST["register"])){
 							$name=mysqli_real_escape_string($Db,$_POST["name"]);
 							$age=mysqli_real_escape_string($Db,$_POST["age"]);
 							$email=mysqli_real_escape_string($Db,$_POST["email"]);
 							$phonenumber=mysqli_real_escape_string($Db,$_POST["phoneno"]);
 							$class=mysqli_real_escape_string($Db,$_POST["class"]);
 							$gender=mysqli_real_escape_string($Db,$_POST["gender"]);
 							$address=mysqli_real_escape_string($Db, $_POST["address"]);
 						
 						if($name==" "||$age==" "||$gender==" "||$class==" "){
 							echo "Please complete all required data";
 						}else{
 						  $result="INSERT INTO register(Name,Age,Email,phoneNumber,Class,Gender,home_address)VALUES('$name','$age','$email','$phonenumber','$class','$gender','$address')";
 							if($register=mysqli_query($Db,$result)){
 								echo "Registration Successfull";
 							}else{
 								echo "Try registering again";
 							}
 						}
 					}
 				?>


 			  <form id="formdes" method="post">
    
           <div class="form-row">
      <div class=" col-md-12 mb-3">
      <input type="text" name="name" class="form-control" placeholder="Your Full Name">
    </div>
    <div class=" col-md-12 mb-3">
      <input type="text" name="age" class="form-control" placeholder="age">
    </div>
</div>
<div class="form-row">
    <div class="col-md-12 mb-3">
      <input type="email"  name="email" class="form-control" placeholder="Your Email">
    </div>

     <div class="col-md-12 mb-3">
      <input type="number" name="phoneno" class="form-control" placeholder="Your Phonenumber">
    </div>

  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <input type="text"  name="class" class="form-control" placeholder="Your class">
    </div>
    <div class="col-md-12 mb-3">
      <input type="text" name="gender" class="form-control" placeholder="Gender">
    </div>
  </div>
    <div class="form-row">
    <div class=" col-md-12 mb-3">
      <input type="text"  name="address" class="form-control" placeholder="Your Home Address">
    </div>
  </div>
  <button  name="register" class="btn btn-lg btn-info mb-3 butt">REGISTER</button>
 </form>
 			</div>
 		</div>
  </div>
</div>
</div>

 </body>
 </html>