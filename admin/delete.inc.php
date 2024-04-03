
<?php
				require'../inc/config.php';
										if (isset($_GET['del'])) {
											$id = $_GET['del'];
											
											$sql="DELETE FROM sell WHERE ads_id='$id';";
											if(mysqli_query($con,$sql))
												header("Location:allads.php?deleted successfully");
											else
												echo $id;
										}
?>
