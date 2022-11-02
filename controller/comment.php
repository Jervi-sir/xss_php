<?php

include '../helpers/db_functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_REQUEST['name'];
  $text = $_REQUEST['comment'];

  if (empty($text)) {
      echo "data is empty";
  } else {
    $sqlquery = "INSERT INTO comments (name, text, created_at) VALUES ('$name', '$text', now())";
    dbInsert($sqlquery);
  }
}

header('Location: /');

