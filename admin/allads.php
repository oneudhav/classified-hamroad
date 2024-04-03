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
                            <small>All Ads</small>
                        </h1>


                        <?php 

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'add_ads':
                                include "includes/add_ads.php";
                                break;
                            
                            case 'update':
                                include "includes/update.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
										<th>Username</th>
                                        <th>Title Ad</th>
                                        <th>Description</th>
                                        <th>Price Rs</th>
                                        <th>Advertiser Name</th>
                                        <th>Phone</th>
										<th>State</th>
										<th>Date</th>
										<th>Category</th>
										<th>Sub-Category</th>
										<th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php 
                                        $query = "SELECT *  FROM  sell ";
                                        $s_sell = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_assoc($s_sell)){
											
											$user=$row['user'];
                                            $title = $row['title'];
                                            $description = $row['description'];
                                            $prize = $row['prize'];
                                            $name = $row['name'];
											$phone= $row['phone'];
                                            $state = $row['state'];
											$date = $row['post_date'];
                                            $category= $row['category'];
											$sub_category=$row['sub_category'];
									
                                        

                                     ?>
									 
                                    <tr>
										<td><?php echo $user ?></td>
                                        <td><?php echo $title ?></td>
                                        <td><?php echo $description ?></td>
                                        <td><?php echo $prize ?></td>
										<td><?php echo $name ?></td>
										<td><?php echo $phone ?></td>
                                        <td><?php echo $state ?></td>
										<td><?php echo $date ?></td>
										<td><?php echo $category ?></td>
                                        <td><?php echo $sub_category ?></td>
										
                                        <td>
										<a href="delete.inc.php?del=<?php echo $row['ads_id']; ?>" class="btn btn-danger">Delete</a>
									</td>
                                    </tr>
                                    <?php  }?>
                                </tbody>
                                </table><?php
                                break;
                        }  
                        ?>
					

                    </div>
                </div>
               

            </div>
      

        </div>

