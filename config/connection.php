<?php 
$con=mysqli_connect('localhost','root','','medical');
//mysql_query(‘SET CHARACTER SET utf8’);
//mysql_query(“SET SESSION collation_connection =’utf8_general_ci'”);

mysqli_set_charset($con,"utf8");
//mysqli_close($con);
?>