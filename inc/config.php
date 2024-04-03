<?php
//rnfunctions.php
$dbhost='localhost';
$dbname='hamroad';
$dbuser='root';
$dbpass='';


$con=mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL DATABASE: " . mysqli_connect_error();
  }

function destroySession()
    {
    $_SESSION=array();
    if (session_id() !="" || isset($_COOKIE[session_name()]))
        setcookie(session_name(),'',time()-86400, '/');
    session_destroy();
    }
//

?>