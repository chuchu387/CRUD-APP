<?php
$server="localhost";
$username="root";
$password="";
$dbname="crud";

$con= mysqli_connect("$server", "$username", "$password", "$dbname");
if(!$con){
    echo "disconnect";
}

?>