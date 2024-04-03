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
                            <small>Users</small>
                        </h1>


                        <?php 

                        if (isset($_GET['source'])) {
                            $source = $_GET['source'];
                        }
                        else {
                            $source = "";
                        }

                        switch ($source) {
                            case 'update_user':
                                include "includes/update_user.php";
                                break;

                            default: ?>
                                <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                        
                                        <th>Full Name</th>
                                        <th>Username</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>State</th>
										<th>Delete</th>
										<th>Update</th>
									
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    
                          
                                    <tr>
									
										 <?php 

                                        $query = "SELECT *  FROM  members";
                                        $select_members = mysqli_query($con,$query);

                                        while($row = mysqli_fetch_assoc($select_members)) {
											$id = $row['id'];
                                            $name = $row['name'];
                                            $user = $row['user'];
                                            $password = $row['password'];
                                            $phone = $row['phone'];
                                            $email = $row['email'];
                                            $state = $row['state'];                                          

                                     ?>
                                       
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $user ?></td>
                                        <td><?php echo $phone ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $state ?></td>
                                        <td>
										
										<a href="deluser.inc.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
									</td>
                                       <td>
										<a href="users.php?source=update_user&id=<?php echo $row['id']; ?>" class="btn btn-info">Update</a>
									</td>
                                       
                                    </tr>
                                    <?php } ?>
                                </tbody>
                                </table><?php
                                break;
                        }
                       
                        ?>

                      

                        

                     

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
