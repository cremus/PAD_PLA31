<?php
include 'database.php';
  if(isset($_POST['viewusers'])) {
    header("Location: viewuser.php");
  }
    if(isset($_POST['edit'])) {
      $sql = ("UPDATE user SET username = '".$_POST['txt_email']."', password = '".$_POST['txt_password']."',
                                              WHERE username = '".$_POST['txt_username']."'
                                              ");
      if(mysqli_query($conn, $sql)) {
        header("Location: viewuser.php");
      } else{
        echo "Error".mysqli_error($conn);
      }
    }
  $user = '';
  $email = '';
  $password = '';
  if(isset($_GET['user'])) {
    $sql = "SELECT username, email, password FROM user WHERE username=".$_GET['user'];
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $user = $row['username'];
      $email = $row['email'];
      $password = $row['password'];
    }
  }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

    <title>Manage Users</title>
</head>

<body>

<!--Background begin -->
<div id="intro" class="view">
    <div class="full-bg-img"></div>
    <!-- Einde background -->

    <!-- Site heading begin -->
    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper  mb-3">Project Agile Development Planet</span>
    </h1>
    <!-- Einde site heading -->


    <!-- Menu bar -->
    <?php
    include "navigation.php";
    ?>
    <!--Einde menu bar -->

<!-- Begin Knopjes -->
<nav class="navbar navbar-expand-lg">
    <form method="post">
        <input type="submit" name="viewusers" id="viewUsers" value="Users" class="btn btn-outline-warning btn-lg"  /><br/>
    </form>
</nav>
<!-- Einde Knopjes -->

<div class="container">
<form action="" method="post">
  <table>
    <tr>
      <td style="color:red">Email</td>
      <td><input name="txt_email" value="<?$email?>"></td>
    </tr>
    <tr>
      <td style="color:red">Password</td>
      <td><input name="txt_password" value="<?$password?>"></td>
    </tr>
    <tr>
      <td><input type="hidden" name="txt_username" value="<?$user?>"></td>
    </tr>
    <tr>
      <button type="submit" class="btn btn-success" name="edit">Edit</button>
  </tr>
  </table>

</form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
