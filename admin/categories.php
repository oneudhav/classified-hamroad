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
                            <small>Categories</small>
                        </h1>



                        <div class="col-xs-6">

                         



                            <?php 
                            if(isset($_POST['submit'])) {
								$id = $_POST['id'];
                                $category = $_POST['category'];
                                if($category=="" || empty($category) && $id=="" || empty($id)) {
                                    echo " This Field Must Not be Empty";
                                }

                                $query = "INSERT INTO item_cats(category) VALUE ('$category')";
                                $create_category = mysqli_query($con,$query);

                                if(!$create_category) {
                                    die("Query Failed");
                                }
                            }
                            ?>

                            <form action="" method="post">
                                
								<?php 
								if(isset($_POST['sub'])) {
								$cat_id = $_POST['cat_id'];
                                $category = $_POST['sub_category'];
                                if($category=="" || empty($category) && $cat_id=="" || empty($cat_id) ) {
                                    echo " This Field Must Not be Empty";
                                }

                                $query = "INSERT INTO item_sub_cats(cat_id,sub_category) VALUE ('$cat_id','$category')";
                                $create_category = mysqli_query($con,$query);

                                if(!$create_category) {
                                    die("Query Failed");
                                }
                            }
                            ?>
								<div class="form-group">
									<label for="cat_id">ID</label>
									<input class="form-control" type="text" name="cat_id">
                                    <label for="sub_category">Add Sub Categories</label>
                                    <input class="form-control" type="text" name="sub_category">
                                </div>
                                <div class="form-group">
                                    <input class="btn  btn-success" type="submit" name="sub" value="Add Sub Categories">
                                </div> 
                            </form>
                        </div>

                  
						
						<div class="col-xs-5">
						
                            <?php 
                            $query = "SELECT *  FROM   item_sub_cats";
                            $select_categories = mysqli_query($con,$query);
                            ?>
							 <?php 

                        if (isset($_GET['delete'])) {
                            
                            $sub_category = $_GET['delete'];
                          
                           mysqli_query($con, "DELETE FROM item_sub_cats WHERE sub_category='$sub_category';");
								}

                        ?>


                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th> Sub Category Title</th>
										<th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php  
                                        while($row = mysqli_fetch_assoc($select_categories)) {
                                        $cat_id = $row['cat_id'];
                                        $sub_category = $row['sub_category'];

                                        echo "<tr>";
                                        echo "<td> {$cat_id} </td>";
                                        echo "<td> {$sub_category} </td>";
                                        echo "<td><a href='categories.php?del='$sub_category'>Delete</a></td>";
                                        echo "</tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

