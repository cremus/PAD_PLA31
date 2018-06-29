<?php
include 'database.php';
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

    <title>View Users</title>
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


<!-- Begin tabel -->
<div class="container">
<h2 class="text-center" style="color:pink">User List</h2>
<table bordercolor="black" border="1" cellspacing="0" cellpadding="8px">
  <tr>
    <th bgcolor="powderblue">Username</th>
    <th bgcolor="powderblue">E-mail</th>
    <th bgcolor="powderblue">Password(hashed)</th>
    <th bgcolor="powderblue">Create date</th>
    <th bgcolor="powderblue">Action</th>
  </tr>
<?php
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)){
 ?>
      <tr>
        <td bgcolor="yellow"><?=$row['username']?></td>
        <td bgcolor="yellow"><?=$row['email']?></td>
        <td bgcolor="yellow"><?=$row['password']?></td>
        <td bgcolor="yellow"><?=$row['create_time']?></td>
        <td>
          <a href="manageuser.php?id=<?=$row['username']?>">Edit</a> |
          <a href="delete.php?id=<?$row['username']?>">Delete</a>
      </tr>
  <?php
      }
    }
  ?>
</table>
</div>
<!-- Einde tabel -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
