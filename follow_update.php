<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$fblink=$_GET['fblink'];
$glink=$_GET['glink'];
$tlink=$_GET['tlink'];
$ylink=$_GET['ylink'];
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="UPDATE follow SET fblink='".$fblink." ',glink='".$glink." ',tlink='".$tlink." ',ylink='".$ylink." '";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost:81/WEB/follow.php?id='.$id);

?>