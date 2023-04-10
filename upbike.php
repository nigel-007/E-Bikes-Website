<?php
$id=$_REQUEST["bid"];
$nam=$_REQUEST["bnm"];
$comp=$_REQUEST["com"];

$conn=mysqli_connect("localhost","root","","wtassign5");
if($conn)
echo "connection successful";
else
{
echo "connection error";
exit();
}
$q1="UPDATE bike SET Bike_Name='$nam', company='$comp' WHERE bike_id =".$id;
$r1=mysqli_query($conn,$q1);
if($r1)
{
echo "<br>updated successfully";
}
else{
    echo "error updating";
}
mysqli_close($conn);
?>
