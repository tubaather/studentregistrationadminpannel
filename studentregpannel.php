<?php
include 'header.php';
 $std_name= "admin";
 $pwd= "pass";
 session_start();
if(isset($_SESSION['std_name'])){
	echo "Welcome";

}
else{
	if($_POST['std_name']== $std_name && $_POST['pwd']==$pwd)
	{ 

	echo "<h1>welcome</h1><br>";

	
	}
	else{
		echo"incorrect";
	}
}

?>
<?php 

$stud=[];

$sql="select * from stud";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$stud[]=$row;
}


?>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
  

        <div  align="center">
            
                <a href="create.php" class="pull-right">Add Student</a>
        </div>
        <div class="container">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>ID</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Picture</th>
                </tr>
            </thead>
            <tbody>
         <?php 
            foreach($stud as $studs){
         ?>

                <tr>
                    <td><?php echo $studs['id']; ?></td>
    <td><?php echo $studs['name']; ?></td>
    <td><?php echo $studs['age']; ?></td>
    <td><?php echo $studs['contact']; ?></td>
    <td style="font-weight: bold;color: red;"><?php echo $studs['email']; ?></td>
    <td><?php echo $studs['address']; ?></td>
     <td> <img src="<?php echo (!empty($studs['picture'])) ? 'images/'.$studs['picture'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $studs['picture']; ?>"></td>
                            <br><br>
    <td>
        <a href="edit.php?id=<?php echo $studs['id']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $studs['id']; ?>">Delete</a>
    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>

    </div>
</body>

</html>