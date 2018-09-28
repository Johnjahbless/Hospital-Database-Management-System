<?php
error_reporting(1);
$rno=$_GET["rno"];
 require('connection.php');
 mysql_query("update appt set ashow='Y' where ano='$rno'");
 header('location:alist.php');
 ?>