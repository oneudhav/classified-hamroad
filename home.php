<?php
     include "./inc/header.php";
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<body>
<!-- main content area -->   
<div id="main" class="wrapper">
    
<!-- content area -->    
	<section class="d-flex justify-content-md-center" >
      <div class="row">	
						<div class="grid_4">
						</div>
        <div class="grid_4">
            
	     <h1>Profile</h1>
			<?php

			$result=mysqli_query($con,"SELECT * FROM members WHERE user='$user'") or die(mysqli_error());


			$count=mysqli_num_rows($result);
			while($rows = mysqli_fetch_assoc($result)){                                     
			$id = $rows['id'];
			$name = $rows['name'];
			$phone=$rows['phone'];
			$email=$rows['email'];    
			$user=$rows['user'];
			$state=$rows['state'];        
			}

			echo"
							
					<table>
					
					<tr><td width='150px'><strong>Name</strong>        :</td><td>$name</td></tr>
					<tr><td><strong>Username</strong>        :</td><td>$user</td></tr>
					 <tr><td><strong>Phone</strong>        :</td><td>$phone</td></tr>
					 <tr><td><strong>Email</strong>        :</td><td>$email</td></tr>
					 <tr><td><strong>State</strong>        :</td><td>$state</td></tr>
					 
					 <tr><td><br/><br/><br/></td></tr>
					</table>
							";
			?>
 
        <!--col1 end-->
        </div>
       </div> 
	</section><!-- end content area -->   
      
      

<?php

include "./inc/foot.inc";
?>
      
  </div><!-- #end div #main .wrapper -->


 

