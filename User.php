<?php
$serverName="localhost";
$hostname="root";
$password="";
$DBname="airticket";

$Db=mysqli_connect($serverName,$hostname,$password,$DBname);
if(mysqli_error($Db)){
	echo "connection failed";
}else{
	echo "Connected";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SELECT PRODUCTS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>
      <div class="container-fluid">
		<div class="row">
		<div class="col-md-6 offset-md-3">
          <?php
               $query="SELECT * FROM uesrs order by userid asc";
			   $result=mysqli_query($Db,$query);
			   $rowcount=mysqli_num_rows($result);
			if($rowcount>0){
				$i=0;
				echo "<h4>Users List</h4>";               
					echo '
							<table>
							<thead>
								<tr>
									<th>S/N</th>
									<th>first_name</th>
									<th>last_name</th>
									<th>email</th>
								

								</tr>
							</thead>
							<tbody>
						';
				while($row = mysqli_fetch_assoc($result)){
					$id=$row["userid"];
					$fname=$row["first_name"];
					$lname=$row["last_name"];
					// $stockavailable=$row["stockAvailable"];
					$email=$row["email"];
					$i++;
						echo '<tr>
								<td>'.$i.'</td>
								<td>'.$fname.'</td>
								<td>'.$lname.'</td>
								<td>'.$email.'</td>
								
							  </tr>
								';
                     // echo "<tr>";
					//echo "<tr>"." " ."<td>".$i." ".$productname." ".$price." ".$stockavailable." ".$categories."</td>"."</tr>";
					// echo "</tr>";
				}
             
             echo '
             		</tbody>             		
             		</table>
             ';
		    }else{
			echo "No user found";
		    }
			
			?>			
			<form method="post" >
			<h3></h3>
			<h3></h3>
			<h3></h3>
			<h3></h3>
			<h3></h3>
		</tr>
	</thead>
  <div class="form-group">
    <input type="text" name="name" class="form-control"  placeholder="Enter user First Name">
  </div>
  <div class="form-group">
    <input type="text" name="price" class="form-control"placeholder="Enter user Last Name">
  </div>
<button name="select" class="btn logbtn" >Submit form</button>
</form>
		</div>
	</div>
	</div>	
</body>
</html>