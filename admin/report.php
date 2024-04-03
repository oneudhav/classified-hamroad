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
							
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
                        </h1>
                        <br><br>
                        <h2>Reports:</h2>
                        <br>
                        <?php

                        $curr_date = date('Y-m-d');
                        $query = "SELECT *  FROM  sell";
                        $ad_count_total = mysqli_query($con,$query);
                        $total_ad_provided = mysqli_num_rows($ad_count_total);


                        $query = "SELECT * FROM feedback";
                        $get_query = mysqli_query($con,$query);
                        $total_queries = mysqli_num_rows($get_query);

                        $query = "SELECT * FROM members";
                        $get_users = mysqli_query($con,$query);
                        $total_users = mysqli_num_rows($get_users);
						
						 $query = "SELECT * FROM msg";
                        $get_message = mysqli_query($con,$query);
                        $total_msg = mysqli_num_rows($get_message);

                        ?>



                        <table class="table table-striped" style="width: 50%">
                          <tbody>
                            <tr>
                              <td><b><a href="users.php"">Total Users:</a></b> </td>
                              <td><?php echo $total_users; ?></td>
                            </tr>
                            <tr>
                              <td><b><a href="allads.php">Total Ads:</a></b> </td>
                              <td><?php echo $total_ad_provided; ?></td>
                            </tr>
                            <tr>
                              <td><b><a href="feedback.php">Total FeedBack: </a></b></td>
                              <td><?php echo $total_queries; ?></td>
                            </tr>
							<tr>
                              <td><b><a href="message.php"> Total Message: </a></b></td>
                              <td><?php echo $total_msg; ?></td>
                            </tr>
                          </tbody>
                        </table>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>