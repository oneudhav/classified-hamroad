<?php session_start(); ?>
<?php
//
include('./includes/admin_header.php');


if (isset($username))
{
    $sql5="DELETE FROM admin WHERE username = '$username'";
$result5=mysqli_query($sql5);
session_start();
    session_unset();
    session_destroy();
   // session_write_close();

 header("location: index.php");
}
else {
 header("location: index.php");
}

?>