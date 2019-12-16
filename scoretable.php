<?php
  include("connection.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Scores Table</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>
    <?php
               $query="SELECT * FROM scores";
			   $result=mysqli_query($Db,$query);
			   $rowcount=mysqli_num_rows($result);
			if($rowcount>0){
				$i=0;
				echo "<h4>Scores</h4>";               
					echo '
							<table class="table">
        					 <thead class="thead-dark">
   							<tr>
     							 <th scope="col">S/N</th>
   							     <th scope="col">Teacher</th>
     							 <th scope="col">Class</th>
     						     <th scope="col">Student</th>
     						     <th scope="col">Subject</th>
     						     <th scope="col">Score</th>
     						     <th scope="col">EDIT</th>
  						     </tr>
                             </thead>
                              <tbody>
   				';
				while($row = mysqli_fetch_assoc($result)){
					$id=$row["id"];
					$teacher=$row["teacher"];
					$class=$row["class"];
					$std=$row["student"];
					$subject=$row["subject"];
					$score=$row["scores"];
					$i++;
						echo '<tr>
								<td>'.$i.'</td>
								<td>'.$teacher.'</td>
								<td>'.$class.'</td>
								<td>'.$std.'</td>
								<td>'.$subject.'</td>
								<td>'.$score.'</td>
								<td><a href="scores.php?edit='.$id.'"class="btn btn-warning">Edit</a></td>
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