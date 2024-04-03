


<?php
include"./inc/head.inc";
?>
    




<body>

<!-- main content area -->   
<div id="main" class="wrapper">
    
    
<!-- content area -->    
	<section id="container" class="wide-content">
      <div class="row">
	  <div class="grid_12">
        
        	<h1 style="color:brown;background-color:hsl(129.3, 20%, 44.1%);text-shadow: 2px 3px;"class="first-header">Trending  Ads</h1>
         <div class="cont">	
 <?php
  $sql = "select * from sell ORDER BY title ASC LIMIT 4";
$rsd = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($rsd)){
                                         
										$iid=$row['ads_id'];
                                            $title=$row['title'];
                                            $priz=$row['prize'];
                                            $iimg=$row['item_pix'];
										$prize= number_format($priz);
										$time=$row['post_date'];
										echo"
										<a href='detail.php?u=$iid'>
										<div class='img'>
													<img src='$iimg'>
														
													 <div class='desc'>
													 <font color='black'>Title:</font>$title<br>
													<font color='black'>Price:Rs </font>$prize</div>
													
												</div></a>
											";
											}
    
              ?>                         
</div>
</div>
	 
	<div class="grid_12">
        
        	<h1 style="color:white;background-color:hsl(129.3, 20%, 44.1%);text-shadow: 2px 3px;"class="first-header">Latest Ads</h1>
         <div class="cont">	
 <?php
  $sql = "select * from sell ORDER BY id ASC LIMIT 15";
$rsd = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($rsd)){
                                         
   $iid=$row['ads_id'];
                                            $title=$row['title'];
                                            $priz=$row['prize'];
                                            $iimg=$row['item_pix'];
					    $prize= number_format($priz);
echo"
<a href='detail.php?u=$iid'>
<div class='img'>
            <img src='$iimg'>
                
             <div class='desc'><font color='black'>Title:</font>$title<br>
	    <font color='black'>Price:Rs </font> $prize</div>
        </div></a>
    
    ";
    }
    
              ?>                         
</div>
</div>

<div class="grid_12">
        
        	<h1  style="color:yellow;background-color:hsl(129.3, 20%, 44.1%);text-shadow: 2px 2px;" class="first-header">Featured Ads</h1>
         <div  class="cont">	
 <?php
  $sql = "select * from sell ORDER BY prize DESC LIMIT 4";
$rsd = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($rsd)){
                                         
   $iid=$row['ads_id'];
                                            $title=$row['title'];
                                            $priz=$row['prize'];
                                            $iimg=$row['item_pix'];
					    $prize= number_format($priz);
echo"
<a href='detail.php?u=$iid'>
<div class='img'>
            <img src='$iimg'>
                
             <div class='desc'><font color='black'>Title:</font>$title<br>
	    <font color='black'>Price:Rs </font> $prize</div>
        </div></a>
    
    ";
    }
    
              ?>                         
</div>

   </div>

	  </div><!-- end row -->
	</section><!-- end content area -->    
  </div>
  </div>

	<?php

include "./inc/foot.inc";
?>
</div>