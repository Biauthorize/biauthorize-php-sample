<?php

  include("biauthorize.php");

  //Credentials List
  $userList = array();

  //Sample User
  $userList[0] = array("user@example.com","password","1");

  $loggedIn = false;

  //Check that the token is valid
  $verified = ($_POST['biauth_verified'] == "true") && Biauthorize_VerifyToken($_POST['biauth_user'], $_POST['biauth_token']);

  if (!$verified)
    header("location: index.php?error");


  //Check the account details
  foreach ($userList as $user) {
    if ($user[0] == $_POST['username'] && $user[1] == $_POST['password'] && $user[2] == $_POST['biauth_user']) {
      $loggedIn = true;
      break;
    }
  }

  //Redirect to the correct page
  if ($loggedIn) {
    header("location: main.php");
  } else {
    header("location: index.php?error");
  }

?>