
<?php
				require'../inc/config.php';
										if (isset($_GET['del'])) {
											$id = $_GET['del'];
											
											$sql="DELETE FROM members WHERE id='$id';";
											if(mysqli_query($con,$sql))
												header("Location:users.php?deleted successfully");
											else
												echo $id;
										}
?>
