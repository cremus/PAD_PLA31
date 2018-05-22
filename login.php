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

    <title>Login</title>
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
            <div class="col-md-6 col-md-offset-3" style="margin-left: 275px; margin-top: 25px;>
            <div class="row">
            <div class="col-md-11 col-md-offset-3" >
                <h1 class="text-center"> Login </h1>
                <div class="form-group">
                    <form class="form-horizontal" action="logingo.php" method="post">
                        <!-- Username -->
                        <div class="form-group input-group">
                            <input type="email" class="form-control" name="email" id="email"
                                   placeholder="Enter Email...">
                        </div>
                        <!-- Einde Username -->
                        <!-- Wachtwoord -->
                        <div class="form-group input-group">
                            <input type="password" class="form-control"
                                   name="pass" id="pass" placeholder="Enter Password...">
                        </div>
                        <!-- Einde Wachtwoord -->
                        <!-- Remember me checkbox -->
                        <div class="form-group">
                            <label>
                                <input type="checkbox">
                                Remember me
                            </label>
                        </div>
                        <!-- Einde remember me checkbox -->
                        <!-- Login Knop -->
                        <div align="center">
                            <button class="btn btn-danger btn btn-outline-danger"> Login </button>
                        </div>
                        <!-- Einde Login Knop -->
                        <!-- Wachtwoord vergeten -->
                        <div class="form-group">
                            <a href="#"> Forgot Password ?</a>
                        </div>
                        <!-- Einde wachtwoord vergeten -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Einde login -->
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>