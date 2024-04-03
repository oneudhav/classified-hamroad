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
                            <small>Change User Password</small>
                        </h1>

				<!----regform--start-->
				

           <form class="form-group" method="post" action="changepassword.php">

            
<?php

if(isset($_POST['pass_update']))
{
    //pass var//
       $old_password=strip_tags(@$_POST['oldpass']);
    $new_password=strip_tags(@$_POST['pass1']);
    $repeat_password=strip_tags(@$_POST['pass2']);
	$username=strip_tags(@$_POST['username']);
       $password_query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username'");
            while($row=mysqli_fetch_assoc($password_query)){
                $db_password=$row['password'];
                //hash input
                $old_password=($old_password);
                //check old password
                if($old_password==$db_password){
                    
                    if($new_password==$repeat_password){
                        //md5 new pass
                        if(strlen($new_password)<=5){
                            echo"Sorry! your password <br/>should be above five";
                        }
                        else{
                        $new_password=($new_password);
                        //update
                       $password_update_query=mysqli_query($con,"UPDATE admin SET password='$new_password'
                                                          WHERE username='$new_password'");
                       echo"Password changed Successful";
                        }
                    }else{
                        echo"your two new password dont match";
                    }
                }
                else
                {
                    echo"The password doesnt match the current password";
                }
            }
      
    }
 
?>
            
                 <div class="form-group">
                    <input class="form-control"type="password" name="oldpass"  placeholder="Current password">
                </div>
               
                <div class="form-goup">
                    <input class="form-control"type="password" name="pass1" placeholder="New Password">
                </div>

                <div class="form-group">
                    <input class="form-control"type="password" name="pass2" placeholder="Confirm-new password">
                </div>
  
                <div class="form-group ">
                    <button  class="btn btn-success"type="submit" name="pass_update">Change password</button>
                </div>
            </form>
       
       
       
        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

