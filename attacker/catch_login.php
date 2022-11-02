<?php

  include 'db_functions.php';
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = dbConnect();
    $username = $_REQUEST['username']; 
    $password = $_REQUEST['password'];
      
    $sqlquery = "INSERT INTO users (name, password, created_at) 
                  VALUES ('$username', '$password', now())";
    $user = $conn->query($sqlquery);
    dbClose($conn);

  }

//header('Location: ' . $_SERVER['HTTP_ORIGIN']);



