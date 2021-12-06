<?php
  $db_host = 'localhost';
  $db_username = 'root';
  $db_password = '';
  $db_name = 'mynote';
  $db_port = 3306;

  $connection = mysqli_connect($db_host, $db_username, $db_password, $db_name, $db_port)
  or die ("Connection to database failed");
?>