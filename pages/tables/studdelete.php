<?php
//delete code
$con = mysqli_connect("localhost","root","","dashboard");
$no = $_GET['z'];
$sql = "delete from student where Id=$no";
if(mysqli_query($con,$sql))
{
	header("Location:table.php");
}
else
{
	echo "error".mysqli_error($con);
}
?>
