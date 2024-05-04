<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM STORE_LOCATION WHERE STORE_ID = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index-store_location.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
