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

    <title>Contact</title>
  </head>

  <body>

   <!--Achtergrond foto -->
    <div id="intro" class="view">
      <div class="full-bg-img"></div>

      <!--Kop -->
      <h1 class="site-heading text-center text-white d-none d-lg-block">
        <span class="site-heading-upper  mb-3">Project Agile Development Planet</span>
      </h1>

      <!-- Menu bar -->
        <?php
        session_start();//start de sessie
        include "navigation.php";

        ?>
      <!--Einde menu bar -->

      <!-- Contact form -->
    <div class="container">
      <form method="post" action="">
        <h2 class="text-center">Contact Us</h2>
        <div class="form-group has-success has-feedback">
          <input class="form-control" type="text" name="name" placeholder="Name">
        <div class="form-group has-error has-feedback">
          <input class="form-control" type="email" name"email" placeholder="Email">
          <p class="help-block">Please enter a correct email address.</p>
        </div>
        <div class="form-group"
          <textarea class="form-control" rows="14" name"message" placeholder="message"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-danger" type="submit">send </button>
        </div>
      </form>
    </div>      






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
