<?php
session_start();//start de sessie
$db = new PDO('mysql:host=localhost;port=3307;dbname=pad;charset=utf8', 'root', 'root');//pdo verbinding voor sql queries
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$register = new register($_POST['user'], $_POST['email'], $_POST['pass'], $db);

$register->handle($register.$db);

  $hostname="localhost";
  $username="username";
  $dbname="pad";
  $password="password";

  $conn=msqli_connect($hostname, $username, $password, $dbname) or DIE ("Unable to connect the database");

  if(isset($_POST['btnRegister']))
  (
    $user=$_POST['user'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql = "INSERT INTO user (username, email, password) VALUES ('$user', '$email', '$pass')";
    if($conn->query($sql) === TRUE)
    {
        echo "New record created succesfully";
    } else {
      echo "Not Instered";
    }

    $conn->close();
    )
?>
