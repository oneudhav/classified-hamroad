<?php include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Add User</small>
                        </h1>

				<!----regform--start-->


           <form class="form-group" method="post" action="adduser.php">
                          
<?php



if(isset($_POST['signup']))
{
	//$tm=($_POST['terms']);
	
		
$name=($_POST['name']);
$uname=($_POST['uname']);
$email=($_POST['email']);
$pass=($_POST['pass']);
$pass2=($_POST['pass2']);
$mobile=($_POST['mobile']);
//$state=($_POST['muppetname']);
//$lga=($_POST['lga']);

$name = stripslashes($name);
$uname = stripslashes($uname);
$email = stripslashes($email);
$pass = stripslashes($pass);
$pass2 = stripslashes($pass2);
$mobile= stripslashes($mobile);
//$state = stripslashes($state);
//$lga= stripslashes($lga);

$name = mysqli_real_escape_string($con,$name);
$uname = mysqli_real_escape_string($con,$uname);
$email = mysqli_real_escape_string($con,$email);
$pass = mysqli_real_escape_string($con,$pass);
$pass2 = mysqli_real_escape_string($con,$pass2);
$mobile = mysqli_real_escape_string($con,$mobile);



	if($name =="" || $pass=="" ||$pass2=="" || $uname =="" || $email=="" || $mobile=="")
        {
		echo "All fields must be completed please<br/>";
                }
   elseif($pass!=$pass2){
	echo"password does not match";
          
   }
  else
        {
//

          $check = mysqli_query($con,"SELECT * FROM members WHERE user='$uname'");
    if (mysqli_num_rows($check)>=1)
    {
       echo "Username already taken";
       }
        else
        {
      $pass_md5=md5($pass);
		$insert = "INSERT INTO members (name,user,password,email,phone)
VALUES ('$name','$uname','$pass_md5','$email','$mobile')";
		mysqli_query($con,$insert) or die('Cannot add record '.mysqli_error());
		
             echo "<script type='text/javascript'>
                window.alert(' Successful! New User Added');
                </script>";
		
        }
}
}

?>
                <div class="form-group">
                    <input class="form-control" type="text" name="name" placeholder="Name">
                </div>
                
                 <div class="form-group">
                    <input class="form-control" type="text" name="uname" placeholder="Username">
				</div>
                 
                  <div class="form-group">
                    <input  class="form-control" type="password" name="pass" placeholder="Password">
                </div>
                  
                   <div class="form-group">
                    <input class="form-control" type="password" name="pass2" placeholder="Confirm-Password">
                </div>
   
                   <div class="form-group">
                    <input  class="form-control" type="text" name="mobile" placeholder="Phone number">
                </div>
                    
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Your Email">
                </div>
             
                <div class="form-group">
                    <button class="btn btn-success"type="submit" name="signup">Add User</button>
                </div>
				

            </form>

        <!--reg form endz-->
 </div>
                        


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>
<script type="text/javascript">
function changeContent(str)
{
if (str=="")
  {
	// if blank, we'll set our innerHTML to be blank.
	document.getElementById("options2").innerHTML="";
	return;
  } 
if (window.XMLHttpRequest)
	{	// code for IE7+, Firefox, Chrome, Opera, Safari

		// create a new XML http Request that will go to our generator webpage.
		xmlhttp=new XMLHttpRequest();
	}
else
	{	// code for IE6, IE5
		// create an activeX object
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	// on state change
	xmlhttp.onreadystatechange=function()
	{
	// if we get a good response from the webpage, display the output
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		document.getElementById("options2").innerHTML=xmlhttp.responseText;
    }
  }
 // use our XML HTTP Request object to send a get to our content php. 
xmlhttp.open("GET","getlist.php?id="+str, true);
xmlhttp.send();
}
</script>