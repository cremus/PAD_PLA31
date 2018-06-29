<?php
include "database.php";
  if(isset($_GET['username'])) {
    $sql = "DELETE FROM user WHERE username =".$_GET['username'];
    if(mysqli_query($conn, $sql)) {
      header('Location: viewuser.php');
    } else{
      echo "Error".mysqli_error($conn);
  }
}
?>
