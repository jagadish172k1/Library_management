<?php
include_once('../connection.php');
$id=$_GET["id"];
mysqli_query($conn,"update userinfo set status='no' where id=$id");
header('location:lsinfo.php');
?>