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
                            <small>Feedback</small>
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
                                        <th>Feedback ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>feed</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php 

                                        $query = "SELECT *  FROM  feedback";
                                        $select_posts = mysqli_query($con,$query);

                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                            $query_id = $row['id'];
                                            $query_ad_id = $row['name'];
                                            $query_email = $row['email'];
											$query_content = $row['feed'];
                                            $query_date = $row['tyme'];
                             
                                        

                                     ?>
                                    <tr>
                                        <td><?php echo $query_id ?></td>
                                        <td><?php echo $query_ad_id ?></td>
                                        <td><?php echo $query_email ?></td>
                                        <td><?php echo $query_content ?></td>
                                        <td><?php echo $query_date ?></td>
                                        <?php echo "<td><a href='feedback.php?delete=$query_id'>Delete</a></td>"; ?>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </table><?php
                                break;
                        }
                  
                        ?>

                        <?php 

                        if (isset($_GET['delete'])) {
                            
                            $query_idd = $_GET['delete'];
                            $query = "DELETE FROM feedback WHERE id = {$query_idd} ";

                            $delete_query = mysqli_query($con,$query);
                            echo "Location : message.php";
                            if(!$delete_query) {
                                die("Query Failed" . mysqli_error($con));
                            }
                        }

                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

