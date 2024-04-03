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
                            <small>Message Board</small>
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
                                        <th>Title</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th>Sent Time</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                    <?php 

                                        $query = "SELECT * FROM msg";
                                        $select_posts = mysqli_query($con,$query);
                                        while($row = mysqli_fetch_assoc($select_posts)) {
                                           $id=$row['id'];
										   $title=$row['title'];
                                            $email=$row['email'];
                                            $content=$row['content'];
                                            $tym=$row['senttime'];
                                     ?>
                                    <tr>
                                        <td><?php echo $title ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $content ?></td>
                                        <td><?php echo $tym ?></td>
									    <td>
										<a href="message.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
									</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </table><?php
                                break;
                        }
      
                        ?>

                        <?php 

                        if (isset($_GET['delete'])) {
                            
                            $iid = $_GET['delete'];
                            // echo "$id";
                           mysqli_query($con, "DELETE FROM msg WHERE id=$iid");
						}

                        ?>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
