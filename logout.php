<?php


include 'connection.php';
?>
<?php
session_start();

if(isset($_SESSION['std_name'])){
	session_destroy();
	echo "<script> location.href='login.php'</script>";
}
else{
echo "<script> location.href='login.php'</script>";
}
?>