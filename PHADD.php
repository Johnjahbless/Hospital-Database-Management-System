<?php require('connection.php');?>
<html>
 <head>
  <title>Add New Doctor</title>
 </head> 
 <body bgcolor="#eee">
<table border="1" align=center width=1000 cellspacing=5 cellpadding=5>
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr bgcolor=red><td align=center><font SIZE=6 color=white>Federal Medical Center</font></td></tr>

<tr><td><table align=center width=1000 cellspacing=0 cellpadding=10>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<?php
$host = 'localhost';
$user = 'root';
$pass = ' ';

mysql_connect($host, $user, $pass);

mysql_select_db('hospital');
$upload_image=$_FILES[" myimage "][ "name" ];

$folder="/wamp/www/hospital/images/";

move_uploaded_file($_FILES[" myimage "][" tmp_name "], "$folder".$_FILES[" myimage "][" name "]);

$insert_path="INSERT INTO images VALUES('$folder','$upload_image')";

$var=mysql_query($inser_path);
?>