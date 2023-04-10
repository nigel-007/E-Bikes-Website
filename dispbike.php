<?php

 $conn=mysqli_connect("localhost","root","","wtassign5");
  if($conn)
  {
      echo "successfull<br>";
  }
  else
  {
      echo "not connected";
  }
  $q1="select * from bike";
  $r1=mysqli_query($conn,$q1);
  $count=mysqli_num_rows($r1);
  echo "<br>Number of records = ".$count;
if($r1)
{
 
 
  while($info=mysqli_fetch_array($r1))
  {
    echo"<br>";
    echo "<br> bike id is ".$info['bike_id'];
    echo "<br> bike name ".$info['Bike_Name'];
    echo "<br>Company name ".$info['company'];
    echo "<br>bike year ".$info['byear'];
    echo "<br>bike color ".$info['bcolour']; 
  }
}
echo "<br>error in operation";
  mysqli_close($conn);
  ?>