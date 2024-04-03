<?php


mysql_connect("localhost","root","") or die("Could Not Established Connection");
mysql_select_db("hamroad") or die("couldnt find database");

$find_counts = mysql_query("SELECT * FROM user_counts");
while($row= mysql_fetch_assoc($find_counts))
{
$current_counts=$row['counts'];
$new_count=$current_counts +1;
$upate_count = mysql_query("UPDATE 'hamroad'.'user_count' SET 'counts'=$new_count");
echo $new_count;
}

?>