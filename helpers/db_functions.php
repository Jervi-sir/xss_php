<?php

  function dbConnect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "xss";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else {
      return $conn;
    }
  }

  function dbClose($conn) {
    $conn->close();
  }

  function dbInsert($sqlquery) {
    $conn = dbConnect();
    $conn->query($sqlquery);
    dbClose($conn);
  }
?>
