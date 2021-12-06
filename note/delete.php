<?php
require_once "connection.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = mysqli_query($connection, "DELETE FROM notes WHERE `id`=$id;");
}

header("Location: ../index.php"); 
exit();

?>