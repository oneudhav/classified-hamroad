<!DOCTYPE html>
<html > 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Hamro Ad</title>
<meta name="description" content="Hamro-Ad is  buy and sell plaform  in Nepal">
<meta name="keywords" content="Hamro-Ads buy and sell in Nepal">

<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

<link rel="shortcut icon" href="images/h.png"  type="image/h-icon">
<!-- CSS-->
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="./css/styles.css"/>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" href="css/normal.css">
<link rel="stylesheet" href="css/indexx.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/search.css">
<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- end CSS-->
    

</head>

  
  <div class="wrapper">
       <div class="row"> 
        <div>
           <a href="index.php"><img src="./images/hamroad.png"></a>
		</div>
        
        </div><!-- end row -->
     </div><!-- end wrapper -->
    
    
  </div>
  
<?php

include('config.php');

//ob_start();

	session_start();
	//shop not login  users from entering
        
	if(isset($_SESSION['id'])){

		$user_id = $_SESSION['id'];
                //$user="";
              
                $user= $_SESSION['username'];
                
	}else{
		header("Location: login.php");
	}
?>
<!-- header area -->
    <header class="wrapper clearfix">
         
        <!-- main navigation -->
        <nav id="topnav" role="navigation">
          <div class="menu-toggle"><img src="./images/menu.png" /></div>  
          <ul class="srt-menu" id="menu-main-navigation">
   
          <li ><a class="fa fa-dashboard" href='index.php'>Home page</a></li>    
	<li><a class="fa fa-bullhorn"data-toggle="modal" href='myads.php'>My Ads</a></li>
	<li><a class="fa fa-book"href='edit_profile.php'>Edit Profile</a></li>
	<li><a class="fa fa-archive"href='sell.php'>Post New Ad</a></li>
	<li><a class="fa fa-envelope" href='message.php'>Message</a></li>
  <li><a href="logout.php">Logout</a></li>
   <li class="current"><a href='home.php'><?php echo $user ?>'s Profile</a></li>
                  
          </ul>     
		</nav><!-- end main navigation -->
  
    </header><!-- end header -->
 
 
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\Hamro-Ad/script>')</script>


<!-- fire ups - read this file!  -->   
<script src="js/main.js"></script>
 
