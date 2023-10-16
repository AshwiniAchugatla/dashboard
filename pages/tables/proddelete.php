<?php
$con=mysqli_connect("localhost","root","","dashboard");
$x=$_GET['z'];
$sql="delete from product where id=$x";
if(mysqli_query($con,$sql))
{
    header("Location:prodtable.php");
}
else
{
    echo "error".mysqli_error($con);
}
?>