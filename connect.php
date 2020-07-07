<?php 
$host = "localhost";
$user = "root";
$password ="";
$database ="uncled";
$mycon =mysqli_connect($host,$user,$password,$database);

if($mycon)
{
    // echo "true";
}
else
{
    echo "error".mysqli_error($mycon);
}

