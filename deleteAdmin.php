<?php
include "db_conn.php";
$id = $_GET["id"];
$img_path = $_GET['img_path'];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    unlink('upload/' . $img_path);
    header("Location: AdminPage.php?msg=Admin deleted successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }