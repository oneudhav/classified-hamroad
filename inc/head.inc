<?php

include "./inc/config.php";

      
ob_start();

	session_start();
	//not login  users from entering
        
	if(isset($_SESSION['id'])){

		$user_id = $_SESSION['id'];
        $user = $_SESSION['username'];
                
	}else{

	}

?>


<!DOCTYPE html>

<head>
<title>Hamro Ad</title>
<meta name="description" content="Hamro-Ad is  buy and sell plaform  in Nepal">
<meta name="keywords" content="Hamro-Ads,hamroads,advertisment">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

	<link rel="shortcut icon" href="images/h.png"  type="image/h-icon">
	<!-- CSS-->
	<!-- Google web fonts.!-->
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/normal.css">
	<link rel="stylesheet" href="css/indexx.css">
	<link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/search.css">
	
	<!--social css--->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/normalize.css">
	<style>
	#searchh{
	text-align:center;

	}
	</style>
	<!-- end CSS-->
	<script>
		$(document).ready(function() {
		   $.ajaxSetup({ cache: true });
	  $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
		FB.init({
		  appId: '{your-app-id}',
		  version: 'v2.7' // or v2.1, v2.2, v2.3, ...
		});     
		$('#loginbutton,#feedbutton').removeAttr('disabled');
		FB.getLoginStatus(updateStatusCallback);
	  });
	});
		});
	  </script>
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5cd7a4f95d0f560012dd6689&product=inline-share-buttons"></script>
</head>

			
    <!-- responsive FlexSlider image slideshow -->
    <div class="wrapper">
       <div class="row">
	   
           <a href="index.php"> <img src="./images/hamroad.png" ></a>
				<div class="search-form" > 
					<div id="searchh">
						<h1>Find Your Choice</h1>
					</div>
						<form class="clear" method="get" action="search.php">
							<input type="text" value="" name='search' placeholder="What do you want to Search?">
								<button  type="submit"  name='submit' title="Search">Search</button> 
						</form>
				</div>

				<!-- main navigation -->
				<nav id="topnav" role="navigation">
				  <div class="menu-toggle"><img src="./images/menu.png" /></div>  
				  <ul class="srt-menu" id="menu-main-navigation">

			 <li class=""><a href="index.php"><div class="fa fa-home fa-2x"></div></a></li>
					  <li><a class="fa fa-car " href="#">Automobile</a>
						  <ul>
							  <?php
				$check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='1'");
				  while($get=mysqli_fetch_assoc($check))
				  {
					$name=$get['sub_category'];       
					echo"<li><a href='menu.php?u=$name'>$name</a></li>";
					}
					?>
					 </ul>
					  </li>
              <li>
                  <a class="fa fa-mobile" href="#">Phones & Tablets</a>
                  <ul>
                        <?php
        $check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='2'");
          while($get=mysqli_fetch_assoc($check))
          {
            $name=$get['sub_category'];
            echo"<li><a href='menu.php?u=$name'>$name</a></li>";
}
?></li>
                  </ul>
              </li>
	      
              <li>
                  <a href="#">Electronics</a>
                  <ul>
                        <?php
						$check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='3'");
						  while($get=mysqli_fetch_assoc($check))
						  {
							$name=$get['sub_category'];				
					echo"<li><a href='menu.php?u=$name'>$name</a></li>";
	
				}
				?>
                  </ul>
				  </li>
					<li>
                  <a class="fa fa-cog" href="#">Services</a>
                  <ul>
                        <?php
        $check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='4'");
          while($get=mysqli_fetch_assoc($check))
          {
            $name=$get['sub_category'];
            
				echo"<li><a href='menu.php?u=$name'>$name</a></li>";
			}
			?>
                  </ul>
              </li>
	       
	       <li>
                 
                  <a href="#">Art & Sport</a>
                  <ul>
                        <?php
        $check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='5'");
          while($get=mysqli_fetch_assoc($check))
          {
            $name=$get['sub_category'];
            
	echo"<li><a href='menu.php?u=$name'>$name</a></li>";
	//''echo "<option value=\"" . $ary['id']  . "\">" . $ary ['typ']  . "</option>";
}
?></li>
                  </ul> </li>
	       
	       <li>
                
                  <a href="#">Fashion</a>
                  <ul>
                        <?php
        $check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='6'");
          while($get=mysqli_fetch_assoc($check))
          {
            $name=$get['sub_category'];
            
	echo"<li><a href='menu.php?u=$name'>$name</a></li>";
	//''echo "<option value=\"" . $ary['id']  . "\">" . $ary ['typ']  . "</option>";
}
?></li>
                  </ul>  </li>
		  
		  	       <li>
                
                  <a class="fa  fa-home " href="#">Real Estate</a>
                  <ul>
                        <?php
        $check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='7'");
          while($get=mysqli_fetch_assoc($check))
          {
            $name=$get['sub_category'];
            
	echo"<li><a href='menu.php?u=$name'>$name</a></li>";
	//''echo "<option value=\"" . $ary['id']  . "\">" . $ary ['typ']  . "</option>";
}
?></li>
                  </ul>  </li>
		  
		  	       <li>
                
                  <a class="fa fa-suitcase"href="#">Jobs</a>
                  <ul>
                        <?php
        $check=mysqli_query($con,"SELECT * FROM  item_sub_cats WHERE cat_id='8'");
          while($get=mysqli_fetch_assoc($check))
          {
            $name=$get['sub_category'];
            
	echo"<li><a href='menu.php?u=$name'>$name</a></li>";
	//''echo "<option value=\"" . $ary['id']  . "\">" . $ary ['typ']  . "</option>";
}
?></li>
		     </ul>
		  
		
         
	       
<?php
	if(isset($_SESSION['id'])){

		$user_id = $_SESSION['id'];
                //$user="";
              
                $user = $_SESSION['username'];
		echo" <li class='Current'><a href='home.php'>$user's</a></li>";
                
	}else{
echo" <li ><a class='fa fa-user'href='login.php'>Login</a></li>";
	}
		 
		  ?>

          </ul>     
		</nav><!-- end main navigation -->
  

    </header><!-- end header -->
    

 
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\Hamro Ad/script>')</script>
 
<script src="js/main.js"></script>


    
    
 


    

        
        

  