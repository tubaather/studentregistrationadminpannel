<?php 

define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DB','wpltheory');


$con = mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());

?>