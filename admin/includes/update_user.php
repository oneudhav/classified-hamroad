
<?php

if (isset($_GET['id'])) {
	$edit_id = $_GET['id'];
}

$query = "SELECT *  FROM  members WHERE id=$edit_id";
$select_posts = mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($select_posts)) {

    $name = $row['name'];
    $user = $row['user'];
    $phone = $row['phone'];
    $state = $row['state'];
   
}

if (isset($_POST['update-user'])) {
		
		$name=$_POST['name'];
		$user = $_POST['user'];
		$phone = $_POST['phone'];
		$state = $_POST['state'];
	

	$query = "UPDATE members SET name = '$name' , user='$user',phone='$phone',state='$state'	WHERE id=$edit_id ";

	$update_user_detail = mysqli_query($con,$query);

	if (!$update_user_detail) {
		die("Query Failed" . mysqli_error($con));
	}

}

?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="name">Full Name</label>
		<input type="text" class="form-control" name="name">
	</div>
	<div class="form-group">
		<label for="name">Username</label>
		<input type="text" class="form-control" name="user">
	</div>
	<div class="form-group">
		<label for="name">Phone No</label>
		<input type="text" class="form-control" name="phone">
	</div>
	<div class="form-group">
	<label for="name">States</label>
		 <select name="state" onchange="changeContent(this.value)">
											<option></option>
						<?php



						$sql = "select * from states";

						$result = mysqli_query($con,$sql);

						while ($ary = mysqli_fetch_array($result)){

							echo "<option value=\"" . $ary['state']  . "\">" . $ary ['state']  . "</option>";
						}
						?>
		  
             </select>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary" name="update-user" value="Update">
	</div>
</form>
<script type="text/javascript">
function changeContent(str)
{
if (str=="")
  {
	// if blank, we'll set our innerHTML to be blank.
	document.getElementById("options").innerHTML="";
	return;
  } 
if (window.XMLHttpRequest)
	{	// code for IE7+, Firefox, Chrome, Opera, Safari
		// create a new XML http Request that will go to our generator webpage.
		xmlhttp=new XMLHttpRequest();
	}
else
	{	// code for IE6, IE5
		// create an activeX object
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	// on state change
	xmlhttp.onreadystatechange=function()
	{
	// if we get a good response from the webpage, display the output
	if (xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		document.getElementById("options").innerHTML=xmlhttp.responseText;
    }
  }
 // use our XML HTTP Request object to send a get to our content php. 
xmlhttp.open("GET","getlist.php?id="+str, true);
xmlhttp.send();
}
</script>