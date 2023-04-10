<?php
 $conn=mysqli_connect("localhost","root","","wtassign5");
 if($conn)
 {
    echo "conecction sucessfull";
 }
 else
 {
    echo "not connected";
    exit();
 }

 $q2="create table bike(bike_id integer,Bike_Name varchar(10),company varchar(10),byear integer,bcolour varchar(10))";
 $r2=mysqli_query($conn,$q2);
 if($r2)
 {
    echo  "<br> bike table created";
 }
 else 
 {
    echo "<br>table not created";
 }
 mysqli_close($conn);

?>