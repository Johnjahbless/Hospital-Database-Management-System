<?php
error_reporting(1);
$rno=$_GET["rno"];
 require('connection.php');
 mysql_query("update diagno set ashow='Y' where ano='$rno'");
 header('location:dilist.php');
 ?>