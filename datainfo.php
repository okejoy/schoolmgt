<?php
  include("connection.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Students Info</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>



 <?php
               $query="SELECT * FROM register";
			   $result=mysqli_query($Db,$query);
			   $rowcount=mysqli_num_rows($result);
			if($rowcount>0){
				$i=0;
				echo "<h4>Students Data </h4>";               
					echo '
							<table class="table">
        					 <thead class="thead-dark">
   							<tr>
     							 <th scope="col">S/N</th>
   							     <th scope="col">Name</th>
     							 <th scope="col">Age</th>
     						     <th scope="col">Email</th>
     						     <th scope="col">Phone number</th>
     						     <th scope="col">Class</th>
     						     <th scope="col">Gender</th>
     						     <th scope="col">Homeadress</th>
     						     <th scope="col">Edit</th>
  						     </tr>
                             </thead>
                              <tbody>
   				';
				while($row = mysqli_fetch_assoc($result)){
					$id=$row["std_id"];
					$name=$row["Name"];
					$age=$row["Age"];
					$email=$row["Email"];
					$phoneno=$row["phoneNumber"];
					$class=$row["Class"];
					$gender=$row["Gender"];
					$haddress=$row["home_address"];
					$i++;
						echo '<tr>
								<td>'.$i.'</td>
								<td>'.$name.'</td>
								<td>'.$age.'</td>
								<td>'.$email.'</td>
								<td>'.$phoneno.'</td>
								<td>'.$class.'</td>
								<td>'.$gender.'</td>
								<td>'.$haddress.'</td>
								<td><a href="edit_table.php?edit='.$id.'"class="btn btn-warning">Edit</a></td>
							  </tr>
								';
				}
             
             echo '
             		</tbody>             		
             		</table>
             ';
		    }else{
			echo "No scores found";
		    }
			
			?>
	
</body>
</html>