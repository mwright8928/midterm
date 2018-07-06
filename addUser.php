<?php
  // Modified from authentication file.
  session_start();

  // Get username and passsword contents from json file.
  $users = file_get_contents('./midterm.json');
  //  Convert file contents to array.
  $userArray = json_decode($users, true);
  // $accessGranted = -1;
  foreach ($userArray as $userAndPass) {
    echo "Username: " . $userAndPass["user"] . ", Password: " . $userAndPass["pass"] . "<br />";
    if(strcmp($userAndPass["user"] == $_POST["username"]))  {
      setcookie("usertaken", 1);
      header("Location: ./request.php");
    } else {
      header("Location: ./midterm.php");
    }
  }
?>
