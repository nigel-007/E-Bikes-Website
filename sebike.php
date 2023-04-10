<?php
$id=$_REQUEST["bid"];

$conn=mysqli_connect("localhost","root","","wtassign5");
if($conn)
echo "connection successful";
else
{
echo "connection error";
exit();
}
$q1="SELECT * FROM bike where bike_id =".$id;
$r1=mysqli_query($conn,$q1);
if($r1)
{
$n=mysqli_num_rows($r1);
if($n>0)
{
while($info=mysqli_fetch_array($r1))
    {
        echo"<br>";
        echo "<br> bike id is ".$info['bike_id'];
        echo "<br> bike name ".$info['Bike_Name'];
        echo "<br>Company name ".$info['company'];
        echo "<br>Bike year ".$info['byear'];
        echo "<br>bike color ".$info['bcolour'];
    }
}
else
echo "<br>no record found";
}
else
{
echo "error in search operation";
}
mysqli_close($conn);
?>