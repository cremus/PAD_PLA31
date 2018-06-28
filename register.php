<?php
//Om te connecten naar de MySQl server worden de volgende parameters gebruikt
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "pad";
$port = "3307";

//Conectie wordt gemaakt met de database, geen connectie is DIE dan stopt het met alles laat het de error zien
$conn = mysqli_connect($hostname, $username, $password, $dbname, $port) or DIE ("".mysqli_connect_error());

//Pakt de gegevens wat ingevoerd wordt als de gebruiker op button 'SUBMIT' klikt anders gebeurt er niks
if(isset($_POST['submit'])) {
  $email = $_POST['email'];
  //Wachtwoord wordt gehasht er wordt B-crypt gebruikt
  $password = password_hash ($_POST['password'], PASSWORD_DEFAULT);

  // Dit is nu gedaan om sql injections te voorkomen
  //Bereid query voor
  $register = $conn->prepare ("INSERT INTO `user` (`email`, `password`) VALUES (?, ?)");
  //Zet de variabele in de query gebruikt daarvoor ss omdat 2x string
  $register->bind_param("ss", $email, $password);

  //query wordt uitgevoerd en geeft 'created' aan anders 'not created'
  if($register->execute() === TRUE) {
    echo "New record created";
  } else {
     echo "Not created";
  }
  $conn->close();
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
    <link rel="stylesheet" href="font-awesome/web-fonts-with-css/css">
    <title>Register</title>
</head>

<body>
<!--Background begin -->
<div id="intro" class="view">
    <div class="full-bg-img"></div>
    <!-- Background einde -->

    <!--Site heading begin -->
    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper  mb-3">Project Agile Development Planet</span>
    </h1>
    <!-- Site heading einde -->

    <!-- Menu bar -->
    <?php
    include "navigation.php";
    ?>
    <!--Einde menu bar -->

    <!-- Login Start -->
  <div class="container">
    <div class="jumbotron">
      <div class="col-md-6 col-md-offset-3" style="margin-left: 275px; margin-top: 25px;">
        <div class="row">
          <div class="col-md-11 col-md-offset-3">
            <h1 class="text-center"> Register </h1>

            <div class="form-group">
              <form method="post" role="form" action="register.php">
                  <div>
              <!-- Email -->
                  <div class="form-group input-group">
                      <input type="email" name="email" class="textInput" placeholder="Choose Email...">
                  </div>
              <!-- Einde email -->

              <!-- Password -->
                  <div class="form-group input-group">
                      <input type="password" name="password" class="textInput" placeholder="Choose Password...">
                  </div>
              <!-- Einde password -->

              <!-- Submit button -->
               <div align="center">
                <button class="btn btn-danger btn btn-outline-danger" name="submit"> Submit </button>
               </div>
              <!-- Einde submit button -->

              </form>
            </div>
          </div>
        </div>
    </div>
  </div>
 </div>
</div>

<!--Einde pagina -->
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
