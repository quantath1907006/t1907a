<?php
session_start(); 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>SESSION >> INPUT</title>
 </head>
 <body>
 <?php 
 $_SESSION['a']      = 12;
 $_SESSION['b']      ='quan';
 $_SESSION['student']=[
 	'fullname' => 'TRAN ANH QUAN',
 	'age'      => 12

 ];
//
  ?>
 </body>
 </html>