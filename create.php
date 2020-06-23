<?php 
include 'header.php';

if(isset($_POST['insert'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $picture=$_POST['picture'];

    $sql=" INSERT INTO stud (name,age,email,contact,address,picture) 
    VALUES('$name','$age','$email','$contact','$address','$picture')";

    $result = mysqli_query($con,$sql);
    if($result){
        header("location:studentregpannel.php");
    }else{
        echo mysqli_error($con);
    }
}
?>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<h3> Add Student</h3>
    <div class="container">
        <form method="post" action="">
            <div class="form-row">
           
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name" id="Name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="Username">Age</label>
                    <input type="text" class="form-control" name="age" id="age" placeholder="Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="name" class="form-control" name="email" id="email" placeholder="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Contact</label>
                    <input type="number" class="form-control" name="contact" id="contact" placeholder="contact">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="address">
                    

                </div>
            </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Image</label>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="picture" />

                </div>
            </div>
            <input type="submit" name="insert" class="btn btn-primary">
        </form>
    </div>
</body>

</html>