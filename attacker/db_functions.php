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
