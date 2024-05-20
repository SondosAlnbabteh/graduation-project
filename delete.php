<?php
include "db_conn.php";

$id = $_GET["id"];
$img_path = $_GET['img_path'];


$sql = "DELETE FROM `products` WHERE id = $id";
$result = mysqli_query($conn, $sql);
if ($result) {
  unlink('upload/' . $img_path);
  header("Location: product_list.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
} 

