<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$ename=$_GET['ename'];
$link=$_GET['link'];

$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into event_link(ename,link) values('".$ename." ',' ".$link." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost:81/WEB/event_link.php?id='.$id);

?>

