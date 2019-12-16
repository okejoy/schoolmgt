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