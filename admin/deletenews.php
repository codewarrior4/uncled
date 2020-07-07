<?php
include '../connect.php';
$id=$_GET['id'];

$query=mysqli_query($mycon,"SELECT * FROM posts where id='$id'");
while ($row = mysqli_fetch_assoc($query)) {

    $image = $row['image'];
    $destination="photos/".$image;
}

unlink($destination);

$query = mysqli_query($mycon, "DELETE FROM posts where id='$id'");

if ($query) {
    echo '<script>alert("Posts has been deleted");</script>';
    echo '<script>location.replace("index.php");</script>';
} else {
    echo mysqli_error($query);
}