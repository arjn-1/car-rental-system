<?php

include("deleteadminmodule.php");

$query = "DELETE FROM `admin` WHERE email=$f";
$data = mysqli_query($conn, $query);

if($data)
{
    echo "<script>alert('Profile Deleted Successfully')</script>";
}
else
{
    echo "<script>alert('Profile was not deleted')</script>";
}

?>