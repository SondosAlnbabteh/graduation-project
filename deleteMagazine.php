<?php
include "db_conn.php";
$id = $_GET["id"];
$image = $_GET['image'];
$sql = "DELETE FROM `magazine` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    unlink('upload/' . $image);
    header("Location: magazine_list.php?msg=data deleted successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }