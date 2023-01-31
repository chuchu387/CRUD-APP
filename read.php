<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    header, footer{
        border: solid black;
        background-color: skyblue;
        text-align: center;
        font-size:50px;
        color: crimson;
    }
</style>

<body>
    <div class="container">
        <header class="my-3">Understanding CRUD Operation in php</header>
        <button class="btn btn-secondary my-3"><a href="create.php" class="text-dark"> ADD INFORMATION</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
    $sql= "select * from `operations`";
    $result=mysqli_query($con, $sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $sno=$row['sno'];
            $Username=$row['username'];
            $Email=$row['email'];
            $Password=$row['password'];
            $Pnoneno=$row['phoneno'];
            echo'<tr>
            <th scope="row">'.$sno.'</th>
            <td>'.$Username.'</td>
            <td>'.$Email.'</td>
            <td>'.$Password.'</td>
            <td>'.$Pnoneno.'</td>
            <td><button class="btn btn-secondary"><a href="update.php? updateid='.$sno.'" class="text-dark">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php? deleteid='.$sno.'" class="text-dark">Delete</a></button>
        </td>
          </tr>';
        }
    }
    ?>
               
            </tbody>
        </table>
    </div>
    
    <footer>Created by Shubham Sapkota all right reserved! 🙂</footer>
</body>
</html>