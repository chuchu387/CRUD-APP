<?php
include 'connect.php';
$sno=$_GET['updateid'];
if(isset($_POST['submit'])){
    $Username = $_POST['username'];
    $Email= $_POST['email'];
    $Password= $_POST['password'];
    $Phoneno= $_POST['phone'];

    $sql= "UPDATE `operations` SET `sno`='',`username`='$Username',`email`='$Email',`password`='$Password',`phoneno`='$Phoneno' WHERE sno=$sno";
    $result = mysqli_query($con, $sql);
    if($result){
        // echo "data submtted sucessufully";
        header("location:read.php");
    }
    else{
        echo "data not submitted";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" class="form-control" placeholder= "Enter your username" name="username" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter your phone number" name="phone" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </form>
    </div>

</body>

</html>