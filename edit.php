<?php 

include 'header.php';
$id=$_GET['id'];

$sql="select * from stud where id=".$id;
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


    if(isset($_POST['update'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    $picture=$_POST['picture'];

    
$sql = "UPDATE stud set name='$name',age='$age',email='$email',contact='$contact',picture='$picture' where id=".$id;

    $result = mysqli_query($con,$sql);
        if($result){
            header("location:studentregpannel");
        }else{
            echo mysqli_error($con);
        }
    }
?>
<h2> Edit Profile</h2>

    <div class="container">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $row['name'] ?>" 
                    id="Name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="Username">Age</label>
                    <input type="text" class="form-control"
            value="<?php echo $row['age'] ?>"
                     id="Age" name="age" placeholder="age">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Address</label>
                    <input type="text" class="form-control" id="inputEmail4"
                    value="<?php echo $row['address'] ?>"
                     placeholder="C_name" name="age">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Phone</label>
                    <input type="number" class="form-control" id="inputPassword4" 
                    value="<?php echo $row['contact'] ?>"
                    placeholder="contact" name="contact">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Email</label>
                      <input type="text" class="form-control" id="inputPassword4" 
                    value="<?php echo $row['email'] ?>"
                    placeholder="email" name="email">

                </div>
            </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Image</label>
                    <form action="" method="post" enctype="<?php echo $row['multipart/form-data']?>">
                    <input type="file" name="picture" />

                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>

</html>