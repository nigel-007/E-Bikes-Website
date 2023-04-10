<?php
$id=$_REQUEST["bid"];
$conn=mysqli_connect("localhost","root","","wtassign5");
 if($conn)
 {
	 echo "successfull";
 }
 else
 {
	 echo "not connected";
 }
 $q1="DELETE FROM bike WHERE bike_id='$id'";
 $r1=mysqli_query($conn,$q1);
 if($r1)
 {
    echo "<br>deleted data from bike table";

 }
 else 
 {
    echo "not deleted";
 }
 mysqli_close($conn);
 ?>