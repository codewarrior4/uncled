<?php
include '../connect.php';
$id=$_GET['id'];

$query=mysqli_query($mycon,"SELECT * FROM property where id='$id'");
while ($row = mysqli_fetch_assoc($query)) {

    $image = $row['banner'];
    $destination="photos/".$image;
}

unlink($destination);

$query = mysqli_query($mycon, "DELETE FROM property where id='$id'");

if ($query) {
    echo '<script>alert("Posts has been deleted");</script>';
    echo '<script>location.replace("index.php");</script>';
} else {
    echo mysqli_error($query);
}