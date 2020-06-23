<?php 

include "header.php";

$id =$_GET['id'];

$sql="DELETE FROM stud where id=".$id;

$result=mysqli_query($con,$sql);
if($result){
	header("location:studentregpannel.php");
}else{
	echo mysqli_error($con);
}

?>