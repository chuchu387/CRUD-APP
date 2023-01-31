<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $sno=$_GET['deleteid'];
        $sql= "DELETE FROM `operations` WHERE sno=$sno";
        $result= mysqli_query($con, $sql);
        if($result){
            // echo "delete sucessfully";
            header('location:read.php');
        }
        else{
            echo "not deleted";
        }
    }
?>
