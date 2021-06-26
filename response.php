<?php

include('dbconn.php');

session_start();

    $name         = $_POST['1name'];
    $email        = $_POST['email'];
    $issue        = $_POST['issue'];
    $comment      = $_POST['message'];

    $sql = "INSERT INTO `responses` (`name`, `email`, `issue`, `comment`) VALUES ('$name', '$email', '$issue', '$comment')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['1name']      = $name;
    $_SESSION['email']      = $email;
    $_SESSION['issue']      = $issue;
    $_SESSION['comment']    = $comment;

  echo "OK";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);