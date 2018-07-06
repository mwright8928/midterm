<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>

    <!-- Meta tags -->
    <meta name='description' content='Home page for software engineering midterm.' />
    <meta name='robots' content='index follow'/>
    <meta http-equiv='author' content='Michael Wright'/>
    <meta http-equiv='pragma' content='no-cache' />
    <!-- Required boostrap meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link to boostrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Login</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <li><a class="nav-item nav-link" href="./midterm.php">Home <span class="sr-only">(current)</span></a><li>
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Log in
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./login.php">Log in</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./request.php">Request Access</a>
                </div>
              </li>
            <li><a class="nav-item nav-link disabled" href="./restricted.php">Members Area</a></li>
          </div>
        </div>
      </nav>

      <h1>Please enter your information</h1>

      <div class="container">
        <form class="form-horizontal" action="addUser.php" method='post' id='login'>
            <div class="form-group">
                <label for="userInput">Username:</label>
                <input type="username" class="form-control" id="user" name="username" placeholder="Enter a username" required autofocus>
                <span id='userfeedback'></span>
            </div>
            <div class="form-group">
                <label for="passInput">Password:</label>
                <input type="password" class="form-control" id="pass" name="password" placeholder="Enter a password" required autofocus>
                <span id='passwordfeedback'></span>
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me:</label>
            </div>
            <button type="submit" class="btn btn-primary" value="Login">Login</button>
        </form>
      </div>
    </div>

    <?php
      if(isset($_SESSION['username'])){
        header("Location: ./midterm.php");
      }
    ?>

    <!-- Footer -->
    <footer class="page-footer font-small">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">2018 &copy Copyright:
        <a href="../Project-VI/docs/logbook/mike.php"> Michael Wright</a>
      </div>
    </footer>
    <!-- Event listener script -->
    <script src='./requestScreening.js'></script>
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
