<?php
  include 'db_functions.php';

  function getComments() {
    // Create connection
    $conn = dbConnect();

    $sql = "SELECT * FROM comments ORDER BY created_at DESC";
    $result = $conn->query($sql);
    $conn->close();

    return $result;
  }

  function saveCookie($cookie_name, $cookie_value) {
    return setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  }
