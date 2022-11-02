<?php
  
  include '../helpers/helper_functions.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if (empty($data)) {
        echo "data is empty";
    } else {
      
      $sqlquery = "INSERT INTO users (username, password, created_at) 
                    VALUES ('$username', '$password', 'now()')";
      $user = $conn->query($sqlquery);
      
      saveCookie('auth_id', $user['id']);
      saveCookie('username', $user['username']);
      saveCookie('password', $user['password']);

    }
  }

  header('Location: /');

