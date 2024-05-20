<?php
include "db_conn.php";
$id = $_GET["id"];

$sql = "DELETE FROM `contact_us` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    unlink('upload/' . $img_path);
    header("Location: contact_messages.php?msges=Message deleted successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }