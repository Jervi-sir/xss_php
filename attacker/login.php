<?php

  function dbConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "xss_attacker";
    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
  }

  function dbClose($conn) {$conn->close();}

  function dbInsert($sqlquery) {
    $conn = dbConnect();
    $conn->query($sqlquery);
    dbClose($conn);
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = dbConnect();
    $username = $_REQUEST['username']; $password = $_REQUEST['password'];
      
    $sqlquery = "INSERT INTO users (name, password, created_at) 
                  VALUES ('$username', '$password', now())";
    $user = $conn->query($sqlquery);
    dbClose($conn);

  }

//header('Location: ' . $_SERVER['HTTP_ORIGIN']);



