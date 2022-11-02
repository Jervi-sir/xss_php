<?php
  include 'db_functions.php';
    $conn = dbConnect();

    $sqlUsers = "SELECT * FROM users ORDER BY created_at DESC";
    $sqlCookies = "SELECT * FROM cookies ORDER BY created_at DESC";
    $resultUsers = $conn->query($sqlUsers);
    $resultCookies = $conn->query($sqlCookies);

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Users</h1>
  <?php
    if ($resultUsers->num_rows > 0) {
      while($row = $resultUsers->fetch_assoc()) {
        ?>
    <div class="comment is-infected">
      <div class="name"><?php echo htmlspecialchars($row["name"]);?></div> - 
      <div class="text"><?php echo htmlspecialchars($row["password"], ENT_QUOTES);?></div>
    </div>
    <?php
        }} else {echo "0 results";}
    ?>
  <h1>Cookies</h1>
<?php
    if ($resultCookies->num_rows > 0) {
      while($row = $resultCookies->fetch_assoc()) {
        ?>
    <div class="comment is-infected"><span>contains XSS</span>
      <div class="name"><?php echo htmlspecialchars($row["client"]);?></div> - 
      <div class="text"><?php echo htmlspecialchars($row["content"], ENT_QUOTES);?></div>
    </div>
    <?php
        }} else {echo "0 results";}
    ?>

  
</body>
</html>